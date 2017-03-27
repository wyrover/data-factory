import MySQLdb as mdb
import sys

try:
    con = mdb.connect('localhost', 'root', 'xiaotian', 'pdo_test', 3310)

    cur = con.cursor()
    cur.execute('select version()')

    ver = cur.fetchone()

    print 'MySQL version: %s' % ver

except mdb.Error, e:
    print 'Error %d: %s' % (e.args[0], e.args[1])
    sys.exit(1)

finally:
    if con:
        con.close()