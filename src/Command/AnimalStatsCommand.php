<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class AnimalStatsCommand extends Command
{
    protected static $defaultName = 'animal:stats';

    protected function configure()
    {
        $this
            ->setDescription('Show number of views and likes')
            ->addArgument('slug', InputArgument::OPTIONAL, 'Animal id / slug')
            ->addOption('format', null, InputOption::VALUE_REQUIRED, 'Option description', 'text')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $arg1 = $input->getArgument('slug');
        $data = [
            'slug' => $arg1,
            'hearts' => \rand(0,100)
        ];



        $io = new SymfonyStyle($input, $output);
       
        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
        }

        if ($input->getOption('format')==='json') {
            $io->write(\json_encode($data));
        }else{
            $rows = [];
            foreach ($data as $key => $value) {
                $rows[] = [$key, $value];
            }
            $io->table(['key', 'value'], $rows);
        }

        $io->success("Your animals {$arg1} got {$data['hearts']} views this week! Well done!");
    }
}
