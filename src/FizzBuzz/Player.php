<?php

namespace FizzBuzz;

interface Player
{
    /**
     * 数字を受けて言う
     *
     * @param int $number 数字
     *
     * @return mixed
     */
    public function say(int $number);
}