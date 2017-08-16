<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function index()
	{
		$posts = [
			"0" => [
				"title" => "First post title",
				"description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quaerat quis quibusdam ducimus accusamus alias vitae iste fuga! Quos, ab iure corrupti ut nobis eius officiis id culpa voluptatibus molestias!"
			],
			"1" => [
				"title" => "First post title",
				"description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quaerat quis quibusdam ducimus accusamus alias vitae iste fuga! Quos, ab iure corrupti ut nobis eius officiis id culpa voluptatibus molestias!"
			],
			"2" => [
				"title" => "First post title",
				"description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quaerat quis quibusdam ducimus accusamus alias vitae iste fuga! Quos, ab iure corrupti ut nobis eius officiis id culpa voluptatibus molestias!"
			],
		];
		return view("posts.index")->withPosts($posts);
	}
}
