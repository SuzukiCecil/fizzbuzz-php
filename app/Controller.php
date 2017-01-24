<?php

use Container\ContainerService;
use FizzBuzz\Game;

class Controller
{
    public function index()
    {
        $container = ContainerService::build();
        $game = $container->make(Game::class);

        $game->play();
    }
}
