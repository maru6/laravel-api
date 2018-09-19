<?php

namespace App\Api\Controllers;

use App\Lesson;
use App\Api\Transformer\LessonTransformer;

class LessonsController extends BaseController {

	public function index()
	{
		$lessons = Lesson::all();

		return $this->collection($lessons, new LessonTransformer());
	}

}