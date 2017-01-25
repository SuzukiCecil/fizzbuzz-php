<?php

namespace FizzBuzz;

interface PlayerInterface
{
    /**
     * 数字を受けて言う
     *
     * @param int $number 数字
     */
    public function say(int $number);
}
