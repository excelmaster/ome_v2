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

    public function generateCertificate()
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
            $dompdf->stream("certificate.pdf", ["Attachment" => false]);
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

    public function generateCertificate3()
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
        $svgContent = str_replace('{diplomadate}', $diplomaDate->examdate, $svgContent);
        $svgContent = str_replace('{course}', session('course'), $svgContent);
        $svgContent = str_replace('{fullname}', $nombre[0]['fullname'], $svgContent);

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

}