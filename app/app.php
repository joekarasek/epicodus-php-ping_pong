<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app){
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/ping_pong", function() use ($app){
        $input = $_GET['number'];
        $my_PingPongGenerator = new PingPongGenerator;
        $results = $my_PingPongGenerator->generatePingPongArray($input);

        return $app['twig']->render('results.html.twig', array('results' => $results));
    });

    return $app;
?>
