<?php

namespace Licweb\LocationBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Licweb\LocationBundle\Model\LocationQuery;

class ListCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('licweb:location:list')
             ->setDescription('List all locations');
    }

    protected function execute(InputInterface $input, OutputInterface $output) 
    {
        $locations = LocationQuery::create()->find();
        
        foreach($locations as $location)
        {
            $output->writeln( sprintf("%4d | %s", $location->getId(), $location->getName() ));
        }
    }
}
