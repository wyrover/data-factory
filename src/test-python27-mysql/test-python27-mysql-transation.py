# coding: utf-8

import MySQLdb as mdb

try:
    con = mdb.connect('localhost', 'root', 'xiaotian', 'pdo_test', 3310)

    # Cursor 创建，事务开始。
    cur = con.cursor()

    cur.execute('drop table if exists writers')
    # MyISAM doesn't support transaction.
    cur.execute('create table writers(id int primary key auto_increment,\
            name varchar(25)) engine=innodb')

    cur.execute('insert into writers(name) values("Jack London")')
    cur.execute('insert into writers(name) values("Honore de Balzac")')
    cur.execute('insert into writers(name) values("Lion Feuchtwanger")')
    cur.execute('insert into writers(name) values("Emile Zola")')
    cur.execute('insert into writers(name) values("Truman Capote")')

    # 显式地调用 commit 来结束一个事务。
    con.commit()

except mdb.Error, e:
    # 异常发生时，调用 rollback 进行回滚。
    if con:
        con.rollback()

    print "Error %d: %s" % (e.args[0], e.args[1])
    sys.exit(1)

finally:
    if con:
        con.close()