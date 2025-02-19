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

    public function generateCertificate3()
    {
        // Conexión a la base de datos y obtención de datos del usuario
        $dbInstance = new UserModel($db);

        $diplomaDate = $dbInstance->getDiplomaDate(session('user_id'));
        $nombre = $dbInstance->getUserCertificateData($_SESSION['user_id']);

        if (!$diplomaDate->examdate) {
            return redirect()->back()->with('error', 'Diploma no encontrado.');
        }

        // limpiar memoria
        ob_clean();

        // Configurar Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('debugPng', true);
        $options->set('debugKeepTemp', true);
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);

        //return view('certification/diploma');


        // Convertir SVG a PDF
        $html = view('certification/diploma');

        $dompdf->loadHtml($html);
        $dompdf->setPaper("a4", 'landscape');
        try {
            $dompdf->render();
            // Descargar el PDF
            $dompdf->stream("certificate.pdf", ["Attachment" => true]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "error al generar el diploma: " . $th->getMessage());
        }

    }

    public function generateCertificate2()
    {
        require_once APPPATH . '../vendor/mpdf/mpdf/mpdf.php';
        var_dump(APPPATH);
        $mpdf = new Mpdf();
        $nombre = "beto";
        $html = "<p>hola pdf de " . $nombre . ", ya impreso";
        $this->load->library('pdf', $config);
        $this->pdf->loadHtml($html);
        $this->pdf->output('ejemplo', 'I');
    }

    public function generateCertificate1()
    {
        // Conexión a la base de datos y obtención de datos del usuario
        $dbInstance = new UserModel($db);

        $diplomaDate = $dbInstance->getDiplomaDate(session('user_id'));
        $nombre = $dbInstance->getUserCertificateData(session('user_id'));

        if (!$diplomaDate->examdate) {
            return redirect()->back()->with('error', 'Diploma no encontrado.');
        }

        // Leer plantilla SVG
        ob_clean();
        $templatePath = FCPATH . 'public/img/' . session('course') . '/certification/diploma_' . session('course') . '.svg';
        $svgContent = file_get_contents($templatePath);

        // Reemplazar los marcadores con datos dinámicos
        //$svgContent = str_replace('{diplomadate}', $diplomaDate->examdate, $svgContent);
        //$svgContent = str_replace('{course}', session('course'), $svgContent);
        //$svgContent = str_replace('{fullname}', $nombre[0]['fullname'], $svgContent);

        /*
        // Convertir SVG a PNG usando Imagick
        try {
            $imagick = new \Imagick();
            $imagick->readImageBlob($svgContent); // Leer el SVG desde el contenido
            $imagick->setImageFormat('png'); // Convertir a PNG
            $pngData = $imagick->getImageBlob(); // Obtener el blob de la imagen PNG
            $pngPath = FCPATH . 'public/img/' . session('course') . '/certification/diploma_' . session('course') . '_' . session('user_id') . '.png'; // Ruta donde guardar el PNG
            file_put_contents($pngPath, $pngData); // Guardar el PNG
        } catch (\Exception $e) {
            return redirect()->back()->with('error', "Error al convertir el SVG a PNG: " . $e->getMessage());
        }
        */

        // Configurar Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('debugPng', true);
        $options->set('debugKeepTemp', true);
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('isImageEnabled', true);  // Habilita la carga de imágenes
        $dompdf = new Dompdf($options);

        // HTML para el PDF, incluyendo la imagen PNG
        $html = '<html><body>';
        $html .= '<img src="' . base_url('public/img/' . session('course') . '/certification/diploma_' . session('course') . '_' . session('user_id') . '.png') . '" style="width:100%; height:auto;"/>';
        $html .= '</body></html>';

        // Cargar HTML con la imagen convertida
        $dompdf->loadHtml($html);
        $dompdf->setPaper("a4", 'landscape');

        try {
            // Renderizar y generar el PDF
            $dompdf->render();
            // Descargar el PDF
            $dompdf->stream("certificate.pdf", [
                "Attachment" => true,
                "Content-Type" => "application/pdf",
                "Content-Disposition" => "inline; filename=certificate.pdf"
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Error al generar el diploma: " . $th->getMessage());
        }
    }

    public function generateCertificate4()
    {
        // Cargar la librería Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Habilitar recursos remotos
        $dompdf = new Dompdf($options);

        // Datos dinámicos
        $nombreAlumno = "Juan Pérez"; // Puedes obtener este valor de una base de datos o formulario

        // Cargar el SVG como plantilla
        $svgContent = file_get_contents(FCPATH . 'public/img/' . session('course') . '/certification/diploma_' . session('course') . '.svg');

        // Reemplazar el nombre del alumno en el SVG
        $svgContent = str_replace('{{fullname}}', $nombreAlumno, $svgContent);
        
        view('test',$svgContent);

        /*
        // Convertir el SVG a PNG (opcional, si Dompdf no renderiza el SVG correctamente)
        $im = new \Imagick();
        $im->readImageBlob($svgContent);
        $im->setImageFormat("png");
        $pngPath = ROOTPATH . 'public/img/' . session('course') . '/certification/temp/diploma_' . session('user_id') . '.png';
        file_put_contents($pngPath, $im);

        // Crear el HTML con la imagen PNG
        $html = '<div style="width: 100%; text-align: center;">
            <img src="' . base_url($pngPath) . '" alt="Plantilla">
         </div>';

        // Cargar el HTML en Dompdf
        $dompdf->loadHtml($html);

        // Renderizar el PDF
        $dompdf->render();

        // Descargar el PDF
        $dompdf->stream("certificado.pdf", array("Attachment" => true));
        */
    }

    public function generateCertificate() {
        // Datos dinámicos
        $nombreAlumno = "Juan Pérez"; // Puedes obtener este valor de una base de datos o formulario

        // Cargar la vista del diploma
        $data = ['nombreAlumno' => $nombreAlumno];
        $html = view('test', $data);
        //return view('test', $data);

        
        // Configurar Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Habilitar recursos remotos (por si usas imágenes externas)
        $dompdf = new Dompdf($options);

        // Cargar el HTML en Dompdf
        $dompdf->loadHtml($html);

        // Renderizar el PDF
        $dompdf->setPaper('A4', 'landscape'); // Opcional: ajustar el tamaño y orientación
        $dompdf->render();

        // Descargar el PDF
        $dompdf->stream("diploma.pdf", array("Attachment" => true));
        
    }

}