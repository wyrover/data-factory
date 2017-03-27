# coding: utf-8

import MySQLdb as mdb

con = mdb.connect('localhost', 'root', 'xiaotian', 'pdo_test', 3310)

with con:
    cur = con.cursor()
    cur.execute('select * from writers')

    # 结果集 rows 为元组（tuple）的元组，每一个元组代表了表中的一行。
    rows = cur.fetchall()
    for row in rows:
        print row