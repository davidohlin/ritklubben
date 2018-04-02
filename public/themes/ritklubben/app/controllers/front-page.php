<?php

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    /*
     * Returns navigation
     *
     * @return array
     */
    public function navigation()
    {
        global $post;
        
        if (!is_a($post, 'WP_Post')) {
            return;
        }
        
        $pages['current_page'] = $post;

        $args = array( 
            'hierarchical' => 0,
            'sort_column' => 'menu_order', 
            'sort_order' => 'asc'
        );

        $pages['page_children'] = get_pages($args);
        
        foreach ($pages['page_children'] as $page) {
            $page->url = get_page_link($page->ID);
        }
        
        return $pages;
    }

    public function posts()
    {   
        $posts = get_posts();
        
        return $posts;
    }
}
