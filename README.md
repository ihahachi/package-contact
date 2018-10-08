# Contact Package


<p align="center"> 
<a href="https://packagist.org/packages/iha/contact"><img src="https://poser.pugx.org/iha/contact/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/iha/contact"><img src="https://poser.pugx.org/iha/contact/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/iha/contact"><img src="https://poser.pugx.org/iha/contact/license.svg" alt="License"></a>
</p>





## About Package

Package to send messages to the manager and saved in the database.


## Installation

### With Composer

#### Compatible with Laravel 5.x:

```
$ composer require iha/contact
```

After downloading package, Run this command :
```
$ php artisan vendor:publish
```




You see the composer.json like this :
```json
{
    "require": {
        "iha/contact": "^1.0"
    }
}
```



### Database
Run this command for generate database :

```
$ php artisan migrate
```
#### The default table name : contact



### Run

Finally, serve the application.

```
$ php artisan serve
```
To serve the application, you can use `php artisan serve`, then open [http://localhost:8000](http://localhost:8000) 
from your browser. To access the contact page, hit the link [http://localhost:8000/contact](http://localhost:8000/contact) 
from your browser.







## Configuration

The defaults configuration settings are set in `config/contact.php`.

```
<?php
return 
[
    'send_mail_to'  => 'sendTo@exemple.com',

    'externe_email' => 'TRUE',
];
```


the default views are set in `resources/views/contact/`




## License

This Contact Package Wrapper for Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
