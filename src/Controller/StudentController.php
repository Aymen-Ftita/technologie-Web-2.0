<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/student/{name}', name: 'app_student')]
    public function index($name): Response
    {
        return new Response("hello " . $name) ; 
        
    }
    
    #[Route('/showStudentTwig', name: 'show_teacher_twig')]

    public function showTwig(){
        $title='list of students';
        $Students=array(
            array('id'=>1,'name'=>'Teacher 1', 'nb_classe'=>4),
            array('id'=>2, 'name' => 'Teacher 2', 'nb_classe' =>5 ),
            array('id'=>3, 'name' => 'Teacher 3', 'nb_classe' =>7 ),
        );
        return $this->render('student/show.html.twig',['tt'=>$Students]) ;
    }
}
