import csv

def judge(syuseki, siken, repo):
    syuseki = int(syuseki)
    siken = int(siken)
    repo = int(repo)
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
        reader = csv.DictReader(r_csv,delimiter=",")
        rows = list(reader)
        print('読み込んだ内容')
        for row in rows:
            if not row['合否']:
                temp_syu = int(row['出席回数'])
                temp_si = int(row['試験'])
                temp_re = int(row['レポート'])
                row['合否'] = judge(temp_syu,temp_si,temp_re)

    with open('zugagijutu/第9回/hat.csv', 'w', newline='')as w_csv:
        feildnames = reader.fieldnames
        writer = csv.DictWriter(w_csv, fieldnames=feildnames)
        writer.writeheader()
        writer.writerows(rows)

    return [print(row) for row in rows]
csv_file()