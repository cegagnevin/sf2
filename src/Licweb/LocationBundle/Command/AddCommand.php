<?php

namespace Licweb\LocationBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Licweb\LocationBundle\Model\Location;

class AddCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('licweb:location:add')
             ->setDescription('Add a new location')
             ->addArgument('name', InputArgument::REQUIRED, 'What is the name of the new location?')
             ->addArgument('street', InputArgument::REQUIRED, 'The street of the location')
             ->addArgument('zipcode', InputArgument::REQUIRED, 'The zipcode of the location')
             ->addArgument('city', InputArgument::REQUIRED, 'The city of the location')
             ->addArgument('presentation', InputArgument::OPTIONAL, 'A little presentation of the location')
             ->addArgument('phonenumber', InputArgument::OPTIONAL, 'Phone number');
    }

    protected function execute(InputInterface $input, OutputInterface $output) 
    {
        $name = $input->getArgument('name');
        $street = $input->getArgument('street');
        $zipCode = $input->getArgument('zipcode');
        $city = $input->getArgument('city');
        $presentation = $input->getArgument('presentation');
        $phonenumber = $input->getArgument('phonenumber');
        
        $location = new Location();
        $location->setName($name);
        $location->setStreet($street);
        $location->setZipcode($zipCode);
        $location->setCity($city);
        $location->setPresentation($presentation);
        $location->setPhonenumber($phonenumber);
        
        $location->save();
        
        $output->writeln( sprintf("Location inserted\n  %4d | %s", $location->getId(), $location->getName()) );

    }
}
