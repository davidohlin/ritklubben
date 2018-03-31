<?php

namespace App;

use Sober\Controller\Controller;

class Single extends Controller
{
    
    public function postImages()
    {
        return get_field('post_images');
    }

}
