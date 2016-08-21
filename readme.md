--- **IMPORTANT** ---

**THIS IS AN OLD REPOSITORY**  
I intentionally leave this repository available to remember me how I was coding back in 2012!  
Please don't clone or use this repo because is certainly out of date!

--- **IMPORTANT** ---  



Adminer for CakePHP
===================

Admin you app database whithout logging in every time with full database credentials set.

It uses `App/Config/database.php` credentials to **automagically log in Adminer** and open the correct db for you.

**IMPORTANT:**  
I wrote that extension **for developing enviroments** where database data should be lost or modified without causing problems!  
**Do not use this script in production environments!**

**NOTICE:**  
This package contains an [Adminer](http://www.adminer.org/) distribution you can update or change as you want.  
That file is included in this package to make it ready to use!

## How to install?
**Adminer for CakePHP** comes as a **webroot folder** so you need to download this repo and unzip it into you webroot folder:

    /App/webroot/adminer/index.php
    /App/webroot/adminer/adminer-x.x.x-mysql.php
    /App/webroot/adminer/readme.md
    
To run Adminer with auto login you need to call this url on your browser:

    http://cake-install.org/adminer

## Simple Security Layer
**Adminer for CakePHP** allows you to setup a **simple password** to access your database manager tool in a more protected way.

- rename `passwd.txt.default` to `passwd.txt` to enable simple security layer
- open `passwd.txt` to set up your custom password, hash it with `md5()`

Default password is "adminer" and is hashed with `md5()` to the passwd file.  

**IMPORTANT** This is a very **minimal security layer** **IMPORTANT**  
**Please do not use _Adminer for CakePHP_ in production enviroment!**
