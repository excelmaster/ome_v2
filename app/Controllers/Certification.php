<?php

namespace App\Controllers;
use App\Models\UserModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class Certification extends BaseController
{
    public function index()
    {
        if ($_SESSION['logged'] = 1) {
            $dbInstance = new UserModel($db);
            $nombre = $dbInstance->getUserCertificateData($_SESSION['user_id']);
            $data = array(
                'nombre' => $nombre[0],
                'site' => $_SESSION['course']
            );
            //ar_dump($_SESSION['course']);       
            return view('certification/index', $data);
        }
    }

    public function generateCertificate()
    {
        // Conexión a la base de datos y obtención de datos del usuario
        $dbInstance = new UserModel($db);
        $diplomaDate = $dbInstance->getDiplomaDate(session('user_id'));
                
        if (!$diplomaDate->examdate) {
            return redirect()->back()->with('error', 'Diploma no encontrado.');
        }
        
        // Leer plantilla SVG
        $templatePath = FCPATH . 'public/img/' . session('course') . '/certification/diploma_' . session('course') . '.svg';                
        $svgContent = file_get_contents($templatePath);
        
        // Reemplazar los marcadores con datos dinámicos
        $svgContent = str_replace('{fullname}', $diplomaDate->examdate, $svgContent);
        var_dump($svgContent);
        /*
        $svgContent = str_replace('{COURSE}', $userData->course, $svgContent);
        $svgContent = str_replace('{DATE}', date('d-m-Y', strtotime($userData->completed_at)), $svgContent);
        */

        // Configurar Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('debugPng', true);
        $options->set('debugKeepTemp', true);
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);

        // Convertir SVG a PDF
        /* $dompdf->loadHtml($svgContent); */
        $dompdf->loadHtml('<p>hola certificate</p>');
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        // Descargar el PDF
        $dompdf->stream("certificate.pdf", ["Attachment" => true]);
        
    }

}