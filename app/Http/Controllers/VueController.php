<?php

namespace App\Http\Controllers;

class VueController extends Controller
{
    public function index()
	{
		$array = [
			[
				'title' => 'yandex',
				'url' => 'yandex.ru',
			],
			[
				'title' => 'google',
				'url' => 'google.com',
			],
			[
				'title' => 'youtube',
				'url' => 'youtube.com',
			],
		];
		return view("vue", ["array" => $array]);
	}
    public function getJson($id)
	{
		$array = [
			[
				'title' => 'yandex',
				'url' => 'yandex.ru',
			],
			[
				'title' => 'google2',
				'url' => 'google.com',
			],
			[
				'title' => 'youtube',
				'url' => 'youtube.com',
			],
		];

		$array2 = [
			[
				'title' => 'yandex',
				'url' => 'yandex.ru',
			],
		];

		if($id == 2){
			return $array2;
		}
		else{
			return $array;			
		}

	}
}
