# coding: utf-8

import MySQLdb as mdb

con = mdb.connect('localhost', 'root', 'xiaotian', 'pdo_test', 3310)



with con:
    cur = con.cursor(mdb.cursors.DictCursor) # 字典 cursor
    cur.execute('select * from writers limit 4')

    # rows 为字典的元组
    rows = cur.fetchall()
    for row in rows:
        print row['id'], row['name'] # 通过列