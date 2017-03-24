


**改变当前工作目录**
```
cd /d "%~dp0"
```

**登录 mysql**

```
mysql -uroot -p
```

**建库建表**
```
mysql> source test.sql
```

```
mysql -uroot -pxiaotian < C:\test.ql
```

**导出一个表**

```
mysqldump -uroot -pxiaotian table_name > outfile_name.sql
```

**导出数据库结构**

```
mysqldump -uroot -pxiaotian -d -add-drop-table database_name > outfile_name.sql
```

```
-d 没有数据 --add-drop-table 在每个 create 语句之前增加一个 drop table
```

**带语言参数导出**

```
mysqldump -uroot -p --default-character-set=latin1 --set-charset=gbk  --skip-opt database_name > outfile_name.sql
```


**备份**

```
mysqldump --databases -u [LOGIN] --password=[PASSOWRD] [DATABASE] > /home/mac/db-`date +%Y-%m-%d`.sql
```

**还原**

```
mysql -u [LOGIN] --password=[PASSWORD] [DATABASE] < /home/mac/db-2012-04-25.sql
```

**不启用日志的还原**

```
mysql --init-command="SET sql_log_bin=0" 
mysql < file_name
```

**导入带中文的 SQL**

```
mysql -uroot -proot110 table < table.sql -f --default-character-set=utf8
要注意加上-f --default-character-set=utf8
```


**myql 测试数据库**

https://github.com/datacharmer/test_db


**修改 my.cnf 字符集**
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

检查

```
show variables like 'char%';
show variables like 'collation%';
```