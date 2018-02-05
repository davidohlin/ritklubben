<?php

namespace App;

use Bladerunner\Controller;

class Home extends Controller
{
	/**
	 * Return Wordpress title
	 *
	 * @return string
	 */
	public function posts()
	{
		$posts = get_posts();

		foreach ($posts as $post) {
			$post->images = field('images', $post->ID);
		}

		return $posts;
	}
}