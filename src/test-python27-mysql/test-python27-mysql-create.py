#!/usr/bin/python
# -*- coding: UTF-8 -*-

import MySQLdb

# �����ݿ�����
db = MySQLdb.connect('localhost', 'root', 'xiaotian', 'pdo_test', 3310)



# ʹ��cursor()������ȡ�����α� 
cursor = db.cursor()

# ������ݱ��Ѿ�����ʹ�� execute() ����ɾ����
cursor.execute("DROP TABLE IF EXISTS EMPLOYEE")

# �������ݱ�SQL���
sql = """CREATE TABLE EMPLOYEE (
         FIRST_NAME  CHAR(20) NOT NULL,
         LAST_NAME  CHAR(20),
         AGE INT,  
         SEX CHAR(1),
         INCOME FLOAT )"""

cursor.execute(sql)

# �ر����ݿ�����
db.close()