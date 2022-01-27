<?php

namespace App\Controller;

use App\Repository\GeneralsurveyRepository;
use App\Repository\Survey1Repository;
use App\Repository\Survey2Repository;
use App\Repository\Survey3Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class StatisticsController extends AbstractController
{
    /**
     * @Route("/statistics", name="statistics")
     */
    public function index(Survey1Repository $survey1, Survey2Repository $survey2, Survey3Repository $survey3, GeneralsurveyRepository $generalsurvey): Response
    {
        $survey1 = $survey1->findAll();
        $survey2 = $survey2->findAll();
        $survey3 = $survey3->findAll();
        $generalsurvey = $generalsurvey->findAll();

        foreach ($survey1 as $record) {
            $survey1Q1list[] = $record->getQ1();
            $survey1Q2list[] = $record->getQ2();
            $survey1Q3list[] = $record->getQ3();
            $survey1Q4list[] = $record->getQ4();
        }
        
        foreach ($survey2 as $record) {
            $survey2Q1list[] = $record->getQ1();
            $survey2Q2list[] = $record->getQ2();
            $survey2Q3list[] = $record->getQ3();
            $survey2Q4list[] = $record->getQ4();
            $survey2Q5list[] = $record->getQ5();
            $survey2Q6list[] = $record->getQ6();
        }

        foreach ($survey3 as $record) {
            $survey3Q1list[] = $record->getQ1();
            $survey3Q2list[] = $record->getQ2();
            $survey3Q3list[] = $record->getQ3();
            $survey3Q4list[] = $record->getQ4();
            $survey3Q5list[] = $record->getQ5();
        }

        foreach ($generalsurvey as $record) {
            $generalsurveyQ1list[] = $record->getQ1();
            $generalsurveyQ2list[] = $record->getQ2();
            $generalsurveyQ3list[] = $record->getQ3();
            $generalsurveyQ4list[] = $record->getQ4();
            $generalsurveyQ5list[] = $record->getQ5();
            $generalsurveyQ6list[] = $record->getQ6();
            $generalsurveyQ7list[] = $record->getQ7();
        }
        
        $survey1Q1average = array_sum($survey1Q1list) / count($survey1Q1list);
        $survey1Q2average = array_sum($survey1Q2list) / count($survey1Q2list);
        $survey1Q3average = array_sum($survey1Q3list) / count($survey1Q3list);
        $survey1Q4average = array_sum($survey1Q4list) / count($survey1Q4list);

        $survey2Q1average = array_sum($survey2Q1list) / count($survey2Q1list);
        $survey2Q2average = array_sum($survey2Q2list) / count($survey2Q2list);
        $survey2Q3average = array_sum($survey2Q3list) / count($survey2Q3list);
        $survey2Q4average = array_sum($survey2Q4list) / count($survey2Q4list);
        $survey2Q5average = array_sum($survey2Q5list) / count($survey2Q5list);
        $survey2Q6average = array_sum($survey2Q6list) / count($survey2Q6list);

        $survey3Q1average = array_sum($survey3Q1list) / count($survey3Q1list);
        $survey3Q2average = array_sum($survey3Q2list) / count($survey3Q2list);
        $survey3Q3average = array_sum($survey3Q3list) / count($survey3Q3list);
        $survey3Q4average = array_sum($survey3Q4list) / count($survey3Q4list);
        $survey3Q5average = array_sum($survey3Q5list) / count($survey3Q5list);

        $generalsurveyQ1average = array_sum($generalsurveyQ1list) / count($generalsurveyQ1list);
        $generalsurveyQ2average = array_sum($generalsurveyQ2list) / count($generalsurveyQ2list);
        $generalsurveyQ3average = array_sum($generalsurveyQ3list) / count($generalsurveyQ3list);
        $generalsurveyQ4average = array_sum($generalsurveyQ4list) / count($generalsurveyQ4list);
        $generalsurveyQ5average = array_sum($generalsurveyQ5list) / count($generalsurveyQ5list);
        $generalsurveyQ6average = array_sum($generalsurveyQ6list) / count($generalsurveyQ6list);
        $generalsurveyQ7average = array_sum($generalsurveyQ7list) / count($generalsurveyQ7list);

        return $this->render('statistics/index.html.twig', [
            'survey1Q1average' => $survey1Q1average,
            'survey1Q2average' => $survey1Q2average,
            'survey1Q3average' => $survey1Q3average,
            'survey1Q4average' => $survey1Q4average,

            'survey2Q1average' => $survey2Q1average,
            'survey2Q2average' => $survey2Q2average,
            'survey2Q3average' => $survey2Q3average,
            'survey2Q4average' => $survey2Q4average,
            'survey2Q5average' => $survey2Q5average,
            'survey2Q5average' => $survey2Q5average,
            'survey2Q6average' => $survey2Q6average,

            'survey3Q1average' => $survey3Q1average,
            'survey3Q2average' => $survey3Q2average,
            'survey3Q3average' => $survey3Q3average,
            'survey3Q4average' => $survey3Q4average,
            'survey3Q5average' => $survey3Q5average,

            'generalsurveyQ1average' => $generalsurveyQ1average,
            'generalsurveyQ2average' => $generalsurveyQ2average,
            'generalsurveyQ3average' => $generalsurveyQ3average,
            'generalsurveyQ4average' => $generalsurveyQ4average,
            'generalsurveyQ5average' => $generalsurveyQ5average,
            'generalsurveyQ6average' => $generalsurveyQ6average,
            'generalsurveyQ7average' => $generalsurveyQ7average,
        ]);
    }
}
