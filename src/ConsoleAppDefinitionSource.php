<?php

declare(strict_types=1);

namespace ConsoleApp;

use mjfklib\Container\DefinitionSource;
use mjfklib\Container\Env;

class ConsoleAppDefinitionSource extends DefinitionSource
{
    /**
     * @inheritdoc
     */
    protected function createDefinitions(Env $env): array
    {
        return [];
    }


    /**
     * @inheritdoc
     */
    public function getSources(): array
    {
        return [];
    }
}
