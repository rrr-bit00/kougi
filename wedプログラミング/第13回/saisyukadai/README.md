# Google風翻訳機

DeepL社のAPIを使用し、google翻訳のような翻訳機を作成しました。

## 使用言語
- HTML
- CSS
- JavaScript

## ※注意点

このプログラムを使用する前に、「API.js」というファイルを作成しDeepl社から取得したAPIkeyを適切な部分に記述しないと動作しません

### ※APIkeyの取得・設定方法
- こちらのURLからDeepLのAPIキーを取得してください（無料版で問題ありません）:
  [DeepL APIキーの取得ページ](https://www.deepl.com/pro)
- 作成した「API.js」に、取得したAPiキーを適切な部分に記述します
- 以下のコードを参考にしてください

```javascript
export const api ="https://api-free.deepl.com/v2/translate?auth_key={取得したAPIキー}&text="
