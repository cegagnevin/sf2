<?php

namespace Licweb\LocationBundle\View;

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializationContext;

use Symfony\Component\HttpFoundation\Request;

use FOS\RestBundle\View\ViewHandler as BaseViewHandler;
use FOS\RestBundle\View\View;

class ViewHandler extends BaseViewHandler 
{
    /**
     * Handles a request with the proper handler
     *
     * Decides on which handler to use based on the request format
     *
     * @param View    $view
     * @param Request $request Request object
     *
     * @return Response
     */
    public function handle(View $view, Request $request = null)
    {
        if (null === $request) 
        {
            $request = $this->container->get('request');
        }

        $format = $view->getFormat() ?: $request->getRequestFormat();
        
        if(in_array($format, array("json", "xml")))
        {
            $data = $view->getData();
            unset($data['form']);
            $view->setData($data);
        }

    
        return parent::handle($view, $request);
    }
}
