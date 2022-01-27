<?php

namespace App\Controller;

use App\Entity\Generalsurvey;
use App\Entity\Survey1;
use App\Entity\Survey2;
use App\Entity\Survey3;
use App\Repository\GeneralsurveyRepository;
use App\Repository\Survey1Repository;
use App\Repository\Survey2Repository;
use App\Repository\Survey3Repository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SurveyController extends AbstractController
{
    /**
     * @Route("/encuestas", name="surveys", methods={"GET"})
     */
    public function index(Survey1Repository $survey1, Survey2Repository $survey2, Survey3Repository $survey3, GeneralsurveyRepository $generalsurvey): Response
    {
        return $this->render('survey/index.html.twig', [
            'survey1' => $survey1->findAll(),
            'survey2' => $survey2->findAll(),
            'survey3' => $survey3->findAll(),
            'generalsurvey' => $generalsurvey->findAll(),
        ]);
    }

    /**
     * @Route("/tratar-encuesta", name="handle_survey")
     */
    public function handleSurvey(Request $request, EntityManagerInterface $entityManager): Response
    {
        $survey1Q1 = $request->get('survey1-q1');
        $survey1Q2 = $request->get('survey1-q2');
        $survey1Q3 = $request->get('survey1-q3');
        $survey1Q4 = $request->get('survey1-q4');

        $survey2Q1 = $request->get('survey2-q1');
        $survey2Q2 = $request->get('survey2-q2');
        $survey2Q3 = $request->get('survey2-q3');
        $survey2Q4 = $request->get('survey2-q4');
        $survey2Q5 = $request->get('survey2-q5');
        $survey2Q6 = $request->get('survey2-q6');

        $survey3Q1 = $request->get('survey3-q1');
        $survey3Q2 = $request->get('survey3-q2');
        $survey3Q3 = $request->get('survey3-q3');
        $survey3Q4 = $request->get('survey3-q4');
        $survey3Q5 = $request->get('survey3-q5');

        $generalQ1 = $request->get('general-q1');
        $generalQ2 = $request->get('general-q2');
        $generalQ3 = $request->get('general-q3');
        $generalQ4 = $request->get('general-q4');
        $generalQ5 = $request->get('general-q5');
        $generalQ6 = $request->get('general-q6');
        $generalQ7 = $request->get('general-q7');
        
        $generalQTextBox = $request->get('general-textarea');

        $survey1 = new Survey1();
        $survey2 = new Survey2();
        $survey3 = new Survey3();

        $generalSurvey = new Generalsurvey();


        // We instert the records
        $survey1->setQ1($survey1Q1);
        $survey1->setQ2($survey1Q2);
        $survey1->setQ3($survey1Q3);
        $survey1->setQ4($survey1Q4);
        $survey1->setCreateDate(new DateTime());

        $survey2->setQ1($survey2Q1);
        $survey2->setQ2($survey2Q2);
        $survey2->setQ3($survey2Q3);
        $survey2->setQ4($survey2Q4);
        $survey2->setQ5($survey2Q5);
        $survey2->setQ6($survey2Q6);
        $survey2->setCreateDate(new DateTime());

        $survey3->setQ1($survey3Q1);
        $survey3->setQ2($survey3Q2);
        $survey3->setQ3($survey3Q3);
        $survey3->setQ4($survey3Q4);
        $survey3->setQ5($survey3Q5);
        $survey3->setCreateDate(new DateTime());
        
        $generalSurvey->setQ1($generalQ1);
        $generalSurvey->setQ2($generalQ2);
        $generalSurvey->setQ3($generalQ3);
        $generalSurvey->setQ4($generalQ4);
        $generalSurvey->setQ5($generalQ5);
        $generalSurvey->setQ6($generalQ6);
        $generalSurvey->setQ7($generalQ7);

        $generalSurvey->setSuggestion($generalQTextBox);
        $generalSurvey->setCreateDate(new DateTime());

        $entityManager->persist($survey1);
        $entityManager->persist($survey2);
        $entityManager->persist($survey3);
        $entityManager->persist($generalSurvey);

        $entityManager->flush();

        echo "La encuesta fue enviada satisfactoriamente";
        die;

        return $this->render('survey/index.html.twig', [
            'controller_name' => 'SurveyController',
        ]);
    }

}
