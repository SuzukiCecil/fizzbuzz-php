<?php

namespace FizzBuzz;

interface Player
{
    /**
     * 数字を受けて言う
     *
     * @param int $number 数字
     */
    public function say(int $number);
}
