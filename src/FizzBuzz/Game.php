<?php

namespace FizzBuzz;

class Game
{
    /**
     * @var \FizzBuzz\PlayerImpl
     * @Inject
     */
    private $player;

//    @Inject のアノテーションがあれば自動的に
//    フィールドインジェクションされるためコンストラクタは要らない
//    public function __construct(Player $player)
//    {
//        $this->player = $player;
//    }

    public function play()
    {
        for ($number = 1; $number <= 20; $number++) {
            $this->player->say($number);
        }
    }
}
