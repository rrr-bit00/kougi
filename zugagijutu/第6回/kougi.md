```mermaid

sequenceDiagram
actor s as 学生
actor r as 受付
participant db as データベース

s ->>+ r: 図書予約
r ->>+ db:　返却日問い合わせ
db -->>- r: 返却日返答
r -->>- s: 予約可能日返答



```