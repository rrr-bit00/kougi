```mermaid
flowchart LR
a_in
b_in
c_ex
d_ex
e_de
f_de

a_in -. include .-> b_in
d_ex -. extend .-> c_ex
e_de -.- f_de
```