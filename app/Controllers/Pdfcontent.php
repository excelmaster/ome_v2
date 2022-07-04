<?php

namespace App\Controllers;
//defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\ActivityModel;

class Pdfcontent extends BaseController
{
	public function index($site, $objectId, $lessonId, $courseNumber, $lessonNumber, $courseId, $tipo, $activity, $Source)
	{
		if ($_SESSION['logged'] == 1) {
			$previous = '0';
			$next = '0';
			$resInstance = new ActivityModel($db);
			$contentData = $resInstance->select('url_resources, activityNumber')->where('activityNumber', $activity)->where('lessonId', $lessonId)->first();
			$prevData = $resInstance->select('url_resources, activityNumber,img_path,objectId,tipo,lessonId')->where('activityNumber', $activity - 1)->where('lessonId', $lessonId)->first();

			$maxData = $resInstance->select('activityNumber')->where('lessonId', $lessonId)->orderBy('activityNumber', 'DESC')->first();
			//var_dump( $maxData);
			//var_dump( $contentData['activityNumber']);

			if (intval($contentData['activityNumber']) < intval($maxData['activityNumber'])) {
				$nextData = $resInstance->select('url_resources, activityNumber,img_path,objectId,tipo,lessonId')->where('activityNumber', $activity + 1)->where('lessonId', $lessonId)->first();
				$next = base_url('content/' . $site . '/' . $nextData['objectId'] . '/' . $nextData['lessonId'] . '/' . $courseNumber . '/' . $lessonNumber . '/' . $courseId . '/' . $nextData['tipo'] . '/' . ($activity + 1) . '/' . str_replace('.png', '', $nextData['img_path']));
			};

			if (intval($contentData['activityNumber'] > 1)) {
				$previous = base_url('content/' . $site . '/' . $prevData['objectId'] . '/' . $prevData['lessonId'] . '/' . $courseNumber . '/' . $lessonNumber . '/' . $courseId . '/' . $prevData['tipo'] . '/' . ($activity - 1) . '/' . str_replace('.png', '', $prevData['img_path']));
			};

			//echo ('PREVIOUS =>' .$previous . '<BR>');
			//echo ('NEXT =>' .$next);

			$contentData = array(
				'objectId' => $objectId,
				'course' => $courseNumber,
				'lesson' => $lessonNumber,
				'courseId' => $courseId,
				'lessonId' => $lessonId,
				'tipo' => $tipo,
				'activity' => $activity,
				'site' => $site,
				'source' => $Source,
				'urlresource' => $contentData['url_resources'],
				'url_prev' => $previous,
				'url_next' => $next
			);
			//var_dump($contentData);

			return view('pdfcontent/index', $contentData);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}
}
