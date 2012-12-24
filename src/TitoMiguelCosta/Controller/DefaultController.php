<?php

namespace TitoMiguelCosta\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

/**
 * Main controller
 *
 * @author titomiguelcosta
 */
class DefaultController
{
    public function indexAction(Application $app)
    {
        return $app['twig']->render('index.html.twig', array());
    }
}
