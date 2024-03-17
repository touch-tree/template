# @framework-boilerplate

A boilerplate using the [echtyushi/framework](https://github.com/echtyushi/framework/) framework.

## Requirements
- PHP version 7.4
- opcache for PHP 7.4

## Installation
First, navigate to your webserver's document root and clone this repo:

    git clone https://github.com/echtyushi/framework-boilerplate

## Credentials

You can add your own configuration by including them in `index.php`.

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

- This application relies on opcache. See [opcache](https://www.php.net/manual/en/opcache.installation.php).
