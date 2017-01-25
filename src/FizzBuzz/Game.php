<?php

namespace FizzBuzz;

class Game
{
    /**
     * @var \FizzBuzz\PlayerInterface
     * @Inject("\FizzBuzz\Player")
     */
    private $player;

//    @Inject のアノテーションがあれば自動的に
//    フィールドインジェクションされるためコンストラクタは要らない
//    public function __construct(PlayerInterface $player)
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
