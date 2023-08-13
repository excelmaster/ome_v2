<?php

namespace App\Controllers;
use App\Models\ActivityModel;
use App\Models\ProgressModel;

class Content extends BaseController
{
	public function index($site, $objectId, $lessonId, $courseNumber, $lessonNumber, $courseId, $tipo, $activity, $Source)
	{
		if ($_SESSION['logged'] == 1) {
			$previous = '0';
			$next = '0';
			$resInstance = new ActivityModel($db);
			$contentData = $resInstance->select('url_resources, activityNumber,descripcion,podcastName')->where('activityNumber', $activity)->where('lessonId', $lessonId)->first();
			$prevData = $resInstance->select('url_resources, activityNumber,img_path,objectId,tipo,lessonId')->where('activityNumber', $activity - 1)->where('lessonId', $lessonId)->first();
			$maxData = $resInstance->select('activityNumber')->where('lessonId', $lessonId)->orderBy('activityNumber', 'DESC')->first();			

			if (intval($contentData['activityNumber']) < intval($maxData['activityNumber'])) {
				$nextData = $resInstance->select('url_resources, activityNumber,img_path,objectId,tipo,lessonId')->where('activityNumber', $activity + 1)->where('lessonId', $lessonId)->first();
				$next = base_url('content/' . $site . '/' . $nextData['objectId'] . '/' . $nextData['lessonId'] . '/' . $courseNumber . '/' . $lessonNumber . '/' . $courseId . '/' . $nextData['tipo'] . '/' . ($activity + 1) . '/' . str_replace('.png', '', $nextData['img_path']));
			};

			if (intval($contentData['activityNumber'] > 1)) {
				$previous = base_url('content/' . $site . '/' . $prevData['objectId'] . '/' . $prevData['lessonId'] . '/' . $courseNumber . '/' . $lessonNumber . '/' . $courseId . '/' . $prevData['tipo'] . '/' . ($activity - 1) . '/' . str_replace('.png', '', $prevData['img_path']));
			};

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
				'descripcion' => $contentData['descripcion'],
				'podcastName' => $contentData['podcastName'],
				'urlresource' => $contentData['url_resources'],
				'url_prev' => $previous,
				'url_next' => $next
			);
			
			$this->session->set('podcastName', $contentData['podcastName']);
			$this->session->set('objectId', $contentData['objectId']);
			$this->session->set('tipo', $contentData['tipo']);
			
			// register activity visit 
			$progressInstance = new ProgressModel();
			$progressRecord = $progressInstance->register_scorm_activity($_SESSION['user_id'],$courseId);
			var_dump($progressRecord);

			return view('content/index', $contentData);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}
}
