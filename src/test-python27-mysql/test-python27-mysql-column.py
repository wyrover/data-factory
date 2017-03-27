# coding: utf-8

import MySQLdb as mdb

con = mdb.connect('localhost', 'root', 'xiaotian', 'pdo_test', 3310)

with con:
    cur = con.cursor()
    cur.execute('select * from writers limit 4')

    rows = cur.fetchall()
        
    # 元组的元组，每一个元组对应一个结果列，元组的第一个元素为列名。
    desc = cur.description

    # 打印前两个结果列的列名。
    print '%s %3s' % (desc[0][0], desc[1][0])

    for row in rows:
        print '%2s %3s' % row