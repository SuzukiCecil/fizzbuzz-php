<?php

namespace Container;

use DI\ContainerBuilder;

class ContainerService {
    /**
     * DIコンテナを作成
     *
     * @return \DI\Container
     */
    public static function build()
    {
        static $containerBuilder = null;
        if ($containerBuilder) {
            return $containerBuilder;
        }

        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAnnotations(true);

        return $containerBuilder->build();
    }
}
