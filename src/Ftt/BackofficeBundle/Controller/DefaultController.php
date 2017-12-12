<?php

namespace Ftt\BackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FttBackofficeBundle:Default:index.html.twig', array('name' => $name));
    }
    public function statAction()
    {

        $series = array(
            array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');
        $ob->title->text('Chart Title');
        $ob->xAxis->title(array('text'  => "Horizontal axis title"));
        $ob->yAxis->title(array('text'  => "Vertical axis title"));
        $ob->series($series);

        return $this->render('FttBackofficeBundle:Default:index.html.twig', array(
            'chart' => $ob
        ));

    }




}
