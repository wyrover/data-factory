


**�ı䵱ǰ����Ŀ¼**
```
cd /d "%~dp0"
```

**��¼ mysql**

```
mysql -uroot -p
```

**���⽨��**
```
mysql> source test.sql
```

```
mysql -uroot -pxiaotian < C:\test.ql
```

**����һ����**

```
mysqldump -uroot -pxiaotian table_name > outfile_name.sql
```

**�������ݿ�ṹ**

```
mysqldump -uroot -pxiaotian -d -add-drop-table database_name > outfile_name.sql
```

```
-d û������ --add-drop-table ��ÿ�� create ���֮ǰ����һ�� drop table
```

**�����Բ�������**

```
mysqldump -uroot -p --default-character-set=latin1 --set-charset=gbk  --skip-opt database_name > outfile_name.sql
```


**����**

```
mysqldump --databases -u [LOGIN] --password=[PASSOWRD] [DATABASE] > /home/mac/db-`date +%Y-%m-%d`.sql
```

**��ԭ**

```
mysql -u [LOGIN] --password=[PASSWORD] [DATABASE] < /home/mac/db-2012-04-25.sql
```

**��������־�Ļ�ԭ**

```
mysql --init-command="SET sql_log_bin=0" 
mysql < file_name
```

**��������ĵ� SQL**

```
mysql -uroot -proot110 table < table.sql -f --default-character-set=utf8
Ҫע�����-f --default-character-set=utf8
```


**myql �������ݿ�**

https://github.com/datacharmer/test_db


**�޸� my.cnf �ַ���**
```
[client]
default-character-set=utf8

[mysql]
default-character-set=utf8


[mysqld]
collation-server=utf8_general_ci
init-connect='SET NAMES utf8'
character-set-server=utf8
```

���

```
show variables like 'char%';
show variables like 'collation%';
```