<?php

use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Licweb\LocationBundle\Command\AddCommand;
use Licweb\LocationBundle\Model\LocationQuery;

class ListCommandTest extends WebTestCase
{
    public function testExecute()
    {
        $kernel = $this->createKernel();
        $kernel->boot();

        $application = new Application($kernel);
        $application->add(new AddCommand());

        $command = $application->find('licweb:location:add');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array('command' => $command->getName(),
                                      'name' => 'LocationTest',
                                      'street' => 'Rue de la république',
                                      'zipcode' => '63100',
                                      'city' => 'Clermont-Ferrand',
                                      'presentation' => 'location de test',
                                      'phonenumber' => '0473112233'  ));


        $this->assertRegExp('*Location inserted*', $commandTester->getDisplay());

        //deletion
        $location = LocationQuery::create()->findByName('LocationTest');
        $location->delete();
    }
}
