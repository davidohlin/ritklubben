<?php

namespace App;

use Sober\Controller\Controller;

class Single extends Controller
{
    
    public function postImages()
    {
        return get_field('post_images');
    }

    public function author()
    {
		global $post;
        
        if (!is_a($post, 'WP_Post')) {
            return;
        }

    	$user = get_userdata($post->post_author);
        $user = $user->data->display_name;

        return $user;
    }

    public function date()
    {
        global $post;
        
        if (!is_a($post, 'WP_Post')) {
            return;
        }

        $date = date_i18n("j F Y", strtotime($post->post_date));
        
        return $date;
    }

}
