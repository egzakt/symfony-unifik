This project is experimental.

## Installation

### Install vendors

``` bash
$ composer install
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
