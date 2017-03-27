@echo off
@path=H:\bitnami\db\wamp\tools;%path%
CALL "H:\bitnami\db\wamp\setenv.bat"
C:
cd /d "%~dp0"

::python test-python27-mysql-simple.py
::python test-python27-mysql-conn.py
::python test-python27-mysql-insert.py
::python test-python27-mysql-select.py
::python test-python27-mysql-select-one.py
python test-python27-mysql-create.py
::python test-python27-mysql-cursor.py
::python test-python27-mysql-column.py
::python test-python27-mysql-args.py
::python test-python27-mysql-transation.py

pause