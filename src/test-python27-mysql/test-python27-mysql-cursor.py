# coding: utf-8

import MySQLdb as mdb

con = mdb.connect('localhost', 'root', 'xiaotian', 'pdo_test', 3310)



with con:
    cur = con.cursor(mdb.cursors.DictCursor) # �ֵ� cursor
    cur.execute('select * from writers limit 4')

    # rows Ϊ�ֵ��Ԫ��
    rows = cur.fetchall()
    for row in rows:
        print row['id'], row['name'] # ͨ����