# coding: utf-8

import MySQLdb as mdb

con = mdb.connect('localhost', 'root', 'xiaotian', 'pdo_test', 3310)

with con:
    cur = con.cursor()
    cur.execute('select * from writers')

    for i in range(cur.rowcount):
        row = cur.fetchone()
        print row