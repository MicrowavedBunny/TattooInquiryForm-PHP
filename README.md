# TattooInquiryForm-PHP
Simple php form for tattoo inquries that emails artist and stores submitted data in mysql db
### Useful Links

* PHP Documentation: [PHP Docs](https://www.php.net/docs.php)
* Composer website: [Composer](https://getcomposer.org/)
* PHPMailer Repo: [PHPMailer](https://github.com/PHPMailer/PHPMailer)
* Xampp website: [XAMPP](https://www.apachefriends.org/)
* MySQL Website: [MySQL](https://www.mysql.com/)

### Requirements

```
* Webserver
  o PHP 7.4 or higher
    * ini setting: MySqli extention enabled
    * Built in PHP 8.2.0 (unsure minimum version)
    * Composer to install PHPMailer
  o MySQL 5.6 or MariaDB 10 and higher
```

## How to setup

Create database and run the included sql script to setup tables.<br />
Install XAMPP/PHP/Composer<br />
Ensure you have PHPMailer installed ```composer require phpmailer/phpmailer```<br />
Edit files to include your database information/email information<br />
Login using Username: 'test' Password: 'test' in order to create new user via registration page (delete test user from DB after)

## Things to do
* **Form valitdation/sql injection prevention <br />**
* Make mutliple choices work form times and days (make required) <br />
* Move timestamp from images table to other table and refactor code <br />
* Send email to submitter as well <br />
* Add abilty to edit submissions (maybe) <br />
* Add login for admins <br />
* Add dashboard crud operations <br />
* Dashboard folders/archivale (some kind of organization/archiving) (drag and drop maybe) <br />
* If coverup = yes then add required picture field<br />