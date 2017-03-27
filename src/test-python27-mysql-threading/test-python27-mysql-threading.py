# -*- coding: utf-8 -*-

import MySQLdb 
import threading
import time

import sqlalchemy.pool
MySQLdb = sqlalchemy.pool.manage(MySQLdb)

#db = MySQLdb.connect("localhost", "root", "","miztest")
#cursor = db.cursor()

class Runner(threading.Thread):
    def __init__(self, name, counts):
        super(Runner, self).__init__(name=name)
        self.counts = counts
        #self.db = MySQLdb.connect("localhost", "root", "","miztest")
        #self.cursor = self.db.cursor()

    def run(self):
        for x in xrange(self.counts):
            self._do_db_thing(x)
            time.sleep(0.1)

    def _do_db_thing(self, x):
        sql = "insert into foo values(%s, %s)" % (self.name, x)
        #self.cursor.execute(sql)
        #self.db.commit()
        db = MySQLdb.connect("localhost", "root", "xiaotian", "pdo_test", 3310)
        cursor = db.cursor()
        cursor.execute(sql)
        db.commit()
        print id(db)

if __name__ == '__main__':
    runners = []
    for x in range(1, 6):
        runners.append(Runner(x, 50))

    for r in runners:
        r.start()

    for r in runners:
        r.join()