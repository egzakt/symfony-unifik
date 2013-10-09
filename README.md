# Flexy

Flexy is an open source CMF built to help developers create customs CMS, based on the Symfony2 framework.

It comes bundled with a complete CMS implementation that is highly extensible.

The project is currently under heavy developement.


## Requirements

A SQL database. At the moment, MySQL is recommended.<br>
Flexy have the same [requirements](http://symfony.com/doc/2.2/reference/requirements.html) as Symfony2.<br/> 
PHP 5.4 and above.<br/> 
The [Composer dependency manager](http://getcomposer.org/download/) is required to install Flexy.

## Installation

To install the project into the "flexy" folder, run the following terminal command and follow the instructions. When in doubt of the value of some parameter, just press enter to use the default value.

``` bash
$ composer create-project --stability=dev flexy/symfony-flexy flexy
```

### Create the database

The default database name is 'flexy'.

``` bash
$ app/console doctrine:database:create
```

### Create the schema

``` bash
$ app/console doctrine:schema:create
```

### Load the fixtures

``` bash
$ app/console doctrine:fixtures:load
```

### Clear the cache

This will rebuild the routing cache

``` bash
$ app/console cache:clear
```
