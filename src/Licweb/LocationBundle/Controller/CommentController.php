<?php

namespace Licweb\LocationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Parser;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Licweb\LocationBundle\Model\CommentQuery;
use Licweb\LocationBundle\Model\Comment;
use Licweb\LocationBundle\Form\Type\CommentType;

class CommentController extends FOSRestController
{
    /**
     * @Rest\View
     * @ApiDoc(
     *  description="Add a comment about a location",
     *  input="Licweb\LocationBundle\Model\Comment"
     * )
     */
    public function addCommentAction(Request $request, $id)
    {
        Request::enableHttpMethodParameterOverride(); //Enable _method input
    
        $comment = new Comment();

        $form = $this->createForm(new CommentType(), $comment);
        $form->bind($request);

        if ($form->isValid()) {
        
            $comment->setIdLocation($id);
            $comment->save();

            $response = $this->forward('LicwebLocationBundle:Location:getLocation', array(
                'id'  => $id,
            ));
            return $response;
        }

    }
    
   
}
