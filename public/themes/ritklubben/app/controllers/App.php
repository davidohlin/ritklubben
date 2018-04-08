<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    /*
     * Returns navigation
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

     /*
     * Returns footer social settings
     * @return array
     */
    public function social()
    {
        $social['instagram'] = get_field('instagram', 'option');
        $social['facebook'] = get_field('facebook', 'option');

        return $social;
    }
}
