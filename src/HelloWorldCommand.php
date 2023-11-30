<?php

declare(strict_types=1);

namespace ConsoleApp;

use mjfklib\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'hello:world')]
class HelloWorldCommand extends Command
{
    public function __construct()
    {
        parent::__construct(
            logStartFinish: false,
            logError: false,
        );
    }


    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ): int {
        $output->writeln("Hello world!");

        return static::SUCCESS;
    }
}
