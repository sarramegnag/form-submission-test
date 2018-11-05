<?php

namespace AppBundle\Controller;

use AppBundle\Form\PersonType;
use AppBundle\Model\Person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $person = new Person('John Doe', 'New York');

        $form = $this->createForm(PersonType::class, $person);

        $form->handleRequest($request);

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'form' => $form->createView(),
            'clickedButton' => $form->getClickedButton() ? $form->getClickedButton()->getName() : null,
        ]);
    }
}
