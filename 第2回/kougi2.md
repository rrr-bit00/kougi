```mermaid
flowchart LR
a{{客}}
b(注文する)
c(支払う)
a --- b
a --- c

m{{発注管理
データベース}}

b --- m
c --- m

subgraph レジ
b
c
end

```
