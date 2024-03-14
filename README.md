# @rosegold-boilerplate

A simple yet configurable lightweight framework boilerplate for PHP.

## Requirements
- PHP version 7.4
- opcache for PHP 7.4

## Installation
First, navigate to your webserver's document root and clone this repo:

    git clone https://github.com/echtyushi/feather-boilerplate

## Credentials

For the config of our application make changes to `config/api.php`, you can add your own config file and include them in `index.php`.

### php.ini

For the `php.ini` we need to enable the extension opcache.

1.  Enable opcache extension:

        zend_extension=opcache

2.  Add opcache settings in `php.ini`:

        opcache.enable=1
        opcache.memory_consumption=128
        opcache.interned_strings_buffer=8
        opcache.max_accelerated_files=4000

## Additional Notes

- This application relies on opcache. See [opcache installation](https://www.php.net/manual/en/opcache.installation.php).
