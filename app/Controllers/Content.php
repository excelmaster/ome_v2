<?php

namespace App\Controllers;
use App\Models\ActivityModel;

class Content extends BaseController
{
	public function index($site, $objectId, $lessonId, $courseNumber, $lessonNumber, $courseId, $tipo, $activity, $Source)
	{
		$resInstance = new ActivityModel($db);
		$contentData = $resInstance->select('url_resources')->where('id', $activity)->first();
		
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
			'urlresource' => $contentData['url_resources']
		);
		
		return view('content/index', $contentData);
	}
}
