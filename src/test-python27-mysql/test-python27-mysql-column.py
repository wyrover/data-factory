# coding: utf-8

import MySQLdb as mdb

con = mdb.connect('localhost', 'root', 'xiaotian', 'pdo_test', 3310)

with con:
    cur = con.cursor()
    cur.execute('select * from writers limit 4')

    rows = cur.fetchall()
        
    # Ԫ���Ԫ�飬ÿһ��Ԫ���Ӧһ������У�Ԫ��ĵ�һ��Ԫ��Ϊ������
    desc = cur.description

    # ��ӡǰ��������е�������
    print '%s %3s' % (desc[0][0], desc[1][0])

    for row in rows:
        print '%2s %3s' % row