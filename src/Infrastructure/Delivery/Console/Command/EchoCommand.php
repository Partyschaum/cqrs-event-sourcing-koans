<?php

namespace Partyschaum\Koans\CqrsAndEventSourcing\Infrastructure\Delivery\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class EchoCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('app:echo')
            ->setDescription('Echoes your message.')
            ->setHelp('Echoes your important and awesome message.')

            ->addArgument(
                'message',
                InputArgument::OPTIONAL,
                'Your echo message.',
                '<silence/>'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Echo: ' . $input->getArgument('message'));
    }
}
