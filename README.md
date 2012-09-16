Silex Bootstrap
===============

This is my standard bootstrap for a new web project that uses the [Silex micro-framework][1].

It has the following advantages:

* defines a file structure for code (config folder for all the configuration, views folder for twig templates, etc)
* [Zend Framework 2][2] components configured in the composer file
* registers the main providers commonly used (config/services.php)
* ready to use with an index.php controller
* incorporates [Twitter Bootstrap][3] assets
* has a layout.html.twig that implements the [Initializr][4] recommendations for a valid HTML5 page
* makes use of the [Yui3][5] grid and reset (style tag in the layout.html.twig file)
* uses [composer][6] to manage all dependencies

Instalation
-----------

1. Clone this project

git clone https://github.com/titomiguelcosta/SilexBootstrap.git YourProjectName

2. Install composer

cd YourProjectName
composer.phar update

3. To test, if you have php 5.4, just start server and visit page in your favorite browser

php -S localhost:8000

visit htp://localhost:8000/


[1]: http://silex.sensiolabs.org/
[2]: http://framework.zend.com/
[3]: http://twitter.github.com/bootstrap/
[4]: http://www.initializr.com/
[5]: http://yuilibrary.com/projects/yui3/
[6]: http://getcomposer.org/
