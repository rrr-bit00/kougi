import csv

def judge(syuseki, siken, repo):
    syuseki = syuseki      
    siken = siken
    repo = repo
    if syuseki < 12:
        if syuseki >= 10:
            goukei = siken + repo
            if goukei >= 80:
                return '合格'
            else:
                return '不合格'
        else:
            return '不合格'    
    else:
        goukei = siken + repo
        if goukei < 60:
            if siken >= 45 or repo >= 45:
                return '合格'
            else:
                return '不合格'
        else:
            return '合格'
        
def csv_file():
    with open('zugagijutu/第9回/hat.csv', 'r', newline='')as r_csv:
        reader = csv.DictReader(r_csv,delimiter=",")            #csvの中身を読み込む
        rows = list(reader)         #list型に変換し保存
        for row in rows:
            if not row['合否']:         #合否列の空の部分を判定
                temp_syu = int(row['出席回数'])         #文字から整数型に変換
                temp_si = int(row['試験'])
                temp_re = int(row['レポート'])
                row['合否'] = judge(temp_syu,temp_si,temp_re)          #合否を判定するjudge関数を呼び出す

    with open('zugagijutu/第9回/hat.csv', 'w', newline='')as w_csv:
        feildnames = reader.fieldnames      #csvを読み込んだ時のreaderを再利用
        writer = csv.DictWriter(w_csv, fieldnames=feildnames)
        writer.writeheader()
        writer.writerows(rows)
        
        for row in rows:            #forで1行ずつ出力させる
            print(row)

csv_file()