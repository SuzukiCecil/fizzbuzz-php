<?php

namespace FizzBuzz;

class PlayerImpl implements Player
{
    /**
     * @var RulesImpl
     */
    private $rules;

    /**
     * Constructor
     * コンストラクタインジェクションもできる(カッコの中に注入したいクラスを指定する)
     *
     * @Inject({"\FizzBuzz\RulesImpl"})
     * @param Rules $rules
     */
    public function __construct(Rules $rules) {
        $this->rules = $rules;
    }

    /**
     * 数字を受けて言う
     *
     * @param int $number 数字
     *
     * @return mixed
     */
    public function say(int $number) {
        echo $this->rules->convert($number)."\n";
    }
}