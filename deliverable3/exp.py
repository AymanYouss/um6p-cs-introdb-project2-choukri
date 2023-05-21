#!/usr/bin/env python

import pandas as pd

df = pd.read_csv("C:\\wamp64\\www\\DBMS\\um6p-cs-introdb-project2-choukri\\deliverable3\\application\\src\\controllers\\tables-csv.csv")

df.to_excel("C:\\wamp64\\www\\DBMS\\um6p-cs-introdb-project2-choukri\\deliverable3\\application\\src\\controllers\\tables-xl.xlsx")