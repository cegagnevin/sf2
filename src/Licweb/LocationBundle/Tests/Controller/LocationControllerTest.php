<?php

namespace Licweb\LocationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LocationControllerTest extends WebTestCase
{
    public function testGetLocations()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/locations');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals(1, $crawler->filter('html:contains("Liste des lieux")')->count());
        $this->assertEquals(2, $crawler->filter('table tbody tr')->count()); //Number of locations in table
        $this->assertEquals(1, $crawler->filter('html:contains("Coopérative de mai")')->count());
        $this->assertEquals(1, $crawler->filter('html:contains("Zénith d\'Auvergne")')->count());
    }

    public function testGetLocation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/locations/1'); //Coopérative de mai
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertEquals(1, $crawler->filter('h1:contains("Coopérative de mai")')->count());
    }

    /*
    public function testAddLocation()
    {
        $client = static::createClient();
    
        $crawler = $client->request('GET', '/locations');
        
        $form = $crawler->selectButton('Ajouter ce lieu')->form();
        $crawler = $client->submit($form, array('name' => 'Place de la Victoire',
                                                'street' => 'Place de la Victoire',
                                                'zipCode' => '63000',
                                                'city' => 'Clermont-Ferrand',
                                                'presentation' => 'Place à coté de la catédrale',
                                                'phone_number' => ''));


        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertEquals(1, $crawler->filter('html:contains("Liste des lieux")')->count());
        $this->assertEquals(3, $crawler->filter('table tbody tr')->count()); //Number of locations in table
        $this->assertEquals(1, $crawler->filter('html:contains("Coopérative de mai")')->count());
        $this->assertEquals(1, $crawler->filter('html:contains("Zénith d\'Auvergne")')->count());
        $this->assertEquals(1, $crawler->filter('html:contains("Place de la Victoire")')->count());
    }
    */
}


