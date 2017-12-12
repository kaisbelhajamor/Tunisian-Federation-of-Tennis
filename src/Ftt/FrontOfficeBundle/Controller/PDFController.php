<?php

namespace Ftt\FrontOfficeBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PDFController extends Controller
{
    public function generateAction()
    {
        
    $html = $this->renderView('FttFrontOfficeBundle:ResultatMedical:pdf.html.twig', array(
    'some'  => 'aaaaazer'
));

return new Response(
    $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
    200,
    array(
        'Content-Type'          => 'application/pdf',
        'Content-Disposition'   => 'attachment; filename="file.pdf"'
    )
);
}
}