<?php
namespace r4f\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use r4f\SiteBundle\Entity\Message;
use r4f\SiteBundle\Form\MessageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MessageController extends Controller
{      
    /**
     * @Template()
     */
    public function listMessagesAction($id)
    {
        $messages = $this->getDoctrine()
            ->getRepository('r4fSiteBundle:Message')
            ->getMessages($id)
        ;
        
        return array('messages' => $messages);
    }
    
    /**
     * @Template()
     */    
    public function indexAction($id)
    {
        $message = new Message;
        $form = $this->createForm(new MessageType, $message);
        $validator = $this->get('validator');
        $liste_erreurs = $validator->validate($message);
        $request = $this->get('request');
        $course = $this->getDoctrine()
                    ->getEntityManager()
                    ->getRepository('r4fSiteBundle:Course')
                    ->find($id)
        ;
        
        if( $request->getMethod() == 'POST' )
        {
            $form->bindRequest($request);
            if( $form->isValid() )
            {                
                $em = $this->getDoctrine()->getEntityManager();
                                
                $user = $this->container->get('security.context')->getToken()->getUser();
                $message->setUser($user);
                $message->setCourse($course);
               
                $em->persist($message);
                $em->flush();
                
                $this->get('session')->setFlash('notice', 'Your message is sended');

            }
        }
        
        return $this->render('r4fSiteBundle:Message:index.html.twig', array(
            'form' => $form->createView(),
            'course' => $course,
        ));   
    
    }
}
