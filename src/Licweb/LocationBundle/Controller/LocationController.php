<?php

namespace Licweb\LocationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Parser;
use Licweb\LocationBundle\Form\Type\LocationType;
use Licweb\LocationBundle\Form\Type\CommentType;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Licweb\LocationBundle\Model\LocationQuery;
use Licweb\LocationBundle\Model\Location;
use Licweb\LocationBundle\Model\Comment;
use Geocoder\Geocoder;

class LocationController extends FOSRestController
{   
    /**
     * @Rest\View
     * @ApiDoc(
     *  description="List all locations",
     *  output="Licweb\LocationBundle\Model\Location"
     * )
     */
    public function getLocationsAction()
    {    
        Request::enableHttpMethodParameterOverride(); //Enable _method input
        $locations = LocationQuery::create()->find()->getData();
        
        $form = $this->createForm(new LocationType(), new Location());
        
        $view = $this->view(
                            array('locations' => $locations,
                                  'form'      => $form->createView(),
                                 )
                            , 200)
            ->setTemplate("LicwebLocationBundle:Location:locations.html.twig")
        ;

        return $this->get('licweb_location.view_handler')->handle($view);
    }
    
    /**
     * @Rest\View
     * @ApiDoc(
     *  description="Details of one location",
     *  output="Licweb\LocationBundle\Model\Location"
     * )
     */
    public function getLocationAction($id)
    {
        Request::enableHttpMethodParameterOverride(); //Enable _method input
        $location = LocationQuery::create()->findPk($id);
        $comments = $location->getComments();
        
        $form = $this->createForm(new LocationType(), $location);
        $formComment = $this->createForm(new CommentType(), new Comment());
        
        //Localisation
        $geocoder = new \Geocoder\Geocoder();
        $adapter  = new \Geocoder\HttpAdapter\CurlHttpAdapter();
        $chain    = new \Geocoder\Provider\ChainProvider(array(
            new \Geocoder\Provider\FreeGeoIpProvider($adapter),
            new \Geocoder\Provider\HostIpProvider($adapter),
            new \Geocoder\Provider\GoogleMapsProvider($adapter, 'fr_FR', 'France', true),
        ));
        $geocoder->registerProvider($chain);

        try {
            $geocode = $geocoder->geocode($location->getStreet().", ".$location->getZipcode().", ".$location->getCity());
        } catch (Exception $e) {
            $geocode[ 'latitude' ] = null;
            $geocode[ 'longitude' ] = null;
        }
        
        
        $view = $this->view(
                            array(
                                'location' => $location,
                                'latitude' => $geocode[ 'latitude' ],
                                'longitude' => $geocode[ 'longitude' ],
                                'comments' => $comments,
                                'form' => $form->createView(),
                                'formComment' => $formComment->createView()
                            )
                            , 200)
            ->setTemplate("LicwebLocationBundle:Location:location.html.twig")
        ;

        return $this->get('licweb_location.view_handler')->handle($view);
    }
    
    
    /**
     * @Rest\View
     * @ApiDoc(
     *  description="Add a location",
     *  input="Licweb\LocationBundle\Model\Location"
     * )
     */
    public function addLocationAction(Request $request)
    {
        Request::enableHttpMethodParameterOverride(); //Enable _method input
    
        $location = new Location();

        $form = $this->createForm(new LocationType(), $location);
        $form->bind($request);

        if ($form->isValid()) 
        {
        
            $location->save();

            return $this->redirect($this->generateUrl('licweb_location.location_getlocations'));   
        }

        return $this->render('LicwebLocationBundle:Location:form.html.twig', array('form' => $form->createView() ));

    }
    
    /**
     * @Rest\View
     * @ApiDoc(
     *  description="Update a location",
     *  input="Licweb\LocationBundle\Model\Location"
     * )
     */
    public function updateLocationAction(Request $request, $id)
    {
        Request::enableHttpMethodParameterOverride(); //Enable _method input
    
        $location = LocationQuery::create()->findPk($id);
        
        $form = $this->createForm(new LocationType(), $location);
        $form->bind($request);

        if ($form->isValid()) 
        {
        
            $location->save();
            
            $response = $this->forward('LicwebLocationBundle:Location:getLocation', array(
                'id'  => $id,
            ));
            return $response;
        }

        return $this->render('LicwebLocationBundle:Location:formEditLocation.html.twig', array('form' => $form->createView()));
    }
    
    /**
     * @Rest\View
     * @ApiDoc(
     *  description="Delete a location"
     * )
     */
    public function deleteLocationAction($id)
    {
        Request::enableHttpMethodParameterOverride(); //Enable _method input
    
        $location = LocationQuery::create()->findPk($id);
        $form = $this->createForm(new LocationType(), $location);
        $form->bind($this->getRequest());
        
        $location->delete();

        return $this->redirect($this->generateUrl('licweb_location.location_getlocations'));   
    }
    
    
    
}
