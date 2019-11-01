
This is a simple and secure php login app. It's built with PHP, MySQL and jQuery (AJAX) and PHP-Mailer for user account verification and confirmation.

## Setup
### Clone the Repo (including PHP-Mailer)
    $ git clone --recursive https://github.com/kzars/Login_app.git

### Creating the MySQL Database

Import SQL Dump php_login.sql

or

Create database "login" and create the table "members" :

```sql
CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `surname` varchar(65) NOT NULL DEFAULT '',
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `surname_UNIQUE` (`surname`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```
### Configure the `login/dbconf.php` file
```php
<?php
    //DATABASE CONNECTION VARIABLES
    $host = "localhost"; // Host name
    $username = "root"; // Mysql username
    $password = ""; // Mysql password
    $db_name = "login"; // Database name

```

### Setup the `login/config.php` file
<i>Enter your gmail and password. For the email verification to work you will have to gmail allow less secure apps.</i>

```php
<?php

    //Find specific server settings at https://www.arclab.com/en/kb/email/list-of-smtp-and-pop3-servers-mailserver-list.html
    $mailServerType = 'smtp';
    //IF $mailServerType = 'smtp'
    $smtp_server = 'smtp.gmail.com';
    $smtp_user = ''; //Your gmail email
    $smtp_pw = ''; // password for email
    $smtp_port = 587; //465 for ssl, 587 for tls, 25 for other
    $smtp_security = 'tls';//ssl, tls or ''


```
