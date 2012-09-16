<?php
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
    'twig.options' => array('cache' => __DIR__ . '/../data/cache'),
));
$app->register(new Silex\Provider\UrlGeneratorServiceProvider(), array(
));