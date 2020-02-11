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
    public function getJson()
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
		return $array;
	}
}
