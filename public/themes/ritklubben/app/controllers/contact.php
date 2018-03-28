<?php

namespace App;

use Sober\Controller\Controller;

class Contact extends Controller
{
    
    public function featuredImage()
    {
        return get_field('featured_image');
    }

}
