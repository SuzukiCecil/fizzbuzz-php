<?php

namespace FizzBuzz;

class Player implements PlayerInterface
{
    /**
     * @var RulesInterface
     */
    private $rules;

    /**
     * Constructor
     * コンストラクタインジェクションもできる(カッコの中に注入したいクラスを指定する)
     *
     * @Inject({"\FizzBuzz\Rules"})
     * @param RulesInterface $rules
     */
    public function __construct(RulesInterface $rules)
    {
        $this->rules = $rules;
    }

    /**
     * 数字を受けて言う
     *
     * @param int $number 数字
     */
    public function say(int $number)
    {
        echo $this->rules->convert($number)."\n";
    }
}
