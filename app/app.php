<?php

     require_once __DIR__."/../vendor/autoload.php";
     require_once __DIR__."/../src/Scrabble.php";

     $app = new Silex\Application();
     $app->register(new Silex\Provider\TwigServiceProvider(),
        array('twig.path' => __DIR__.'/../views'));

     $app->get("/", function() use ($app) {
     return $app['twig']->render('home.twig');

     });

     $app->post("/results", function() use ($app) {
       $new_Scrabble = new Scrabble;  // INSTANCIATE YA IDGIT!
       $score = $new_Scrabble->score($_POST['input']);//NOW USE IT TO POST
       return $app['twig']->render('results.twig', array('score' => $score));

     });

     return $app

?>
