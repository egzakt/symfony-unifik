# Unifik

Unifik is an open source CMF built to help developers create customs CMS, based on the Symfony2 framework.

It comes bundled with a complete CMS implementation that is highly extensible.

The project is currently under heavy developement.

## Requirements

* A SQL database. Any relational [database supported by Doctrine](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html#driver) will do. At the moment MySQL is recommended.<br>
* PHP 5.4 or newer is required in addition to Symfony base [requirements](http://symfony.com/doc/2.2/reference/requirements.html).<br />
* [Composer dependency manager](http://getcomposer.org/download/) must be installed.

## Installation

To install the project into the "unifik" folder, run the following terminal command and follow the instructions. When in doubt of the value of some parameter, just press enter to use the default value.

``` bash
$ composer create-project --stability=dev unifik/symfony-unifik unifik
$ cd unifik
$ app/console unifik:install
```

Now that unifik is installed you may use PHP 5.4 built-in web server to start unifik with this command:

``` bash
$ app/console server:run
```

Unifik is now accessible at [http://localhost:8000](http://localhost:8000)
