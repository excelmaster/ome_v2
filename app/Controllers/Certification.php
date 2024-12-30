<?php

namespace App\Controllers;
use App\Models\UserModel;
use Dompdf\Dompdf;
use Dompdf\Options;
use Mpdf\Mpdf;


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
            //var_dump($_SESSION['course']);       
            return view('certification/index', $data);
        }
    }

    public function generateCertificate2()
    {
        // Conexión a la base de datos y obtención de datos del usuario
        $dbInstance = new UserModel($db);

        $diplomaDate = $dbInstance->getDiplomaDate(session('user_id'));
        $nombre = $dbInstance->getUserCertificateData($_SESSION['user_id']);

        if (!$diplomaDate->examdate) {
            return redirect()->back()->with('error', 'Diploma no encontrado.');
        }
        
        // Leer plantilla SVG
        ob_clean();
        $templatePath = FCPATH . 'public/img/' . session('course') . '/certification/diploma_' . session('course') . '.svg';                
        $svgContent = file_get_contents($templatePath);
        

        // Reemplazar los marcadores con datos dinámicos
        $svgContent = str_replace('{diplomadate}', $diplomaDate->examdate, $svgContent);
        $svgContent = str_replace('{course}', session('course'), $svgContent);
        $svgContent = str_replace('{fullname}', $nombre[0]['fullname'], $svgContent);

        
        $testdata = [
            'date' => $diplomaDate->examdate,
            'svg' => $svgContent
        ];
        
        //return view('test',$testdata);
        
        // Configurar Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('debugPng', true);
        $options->set('debugKeepTemp', true);
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);

        // Convertir SVG a PDF
        $dompdf->loadHtml($svgContent); 
        //$dompdf->loadHtml('<p>hola certificate</p>');
        //$custompaper = [0,0,1344,753];
        $dompdf->setPaper("a4", 'landscape');
        try {            
            $dompdf->render();
            // Descargar el PDF
            $dompdf->stream("certificate.pdf", ["Attachment" => true]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "error al generar el diploma: " .$th->getMessage());
        }
               
    }

    public function generateCertificate()
    {    
        require_once APPPATH . 'vendor/mpdf/mpdf/mpdf.php'; 
        var_dump(APPPATH);
        $mpdf = new Mpdf();
        $nombre = "beto";
        $html = "<p>hola pdf de ".$nombre.", ya impreso";
        $this->load->library('pdf', $config);
        $this->pdf->loadHtml($html);
        $this->pdf->output('ejemplo','I');
    }
}