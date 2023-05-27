<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Carrousel extends Component
{
    /**
     * Categories.
     */
    public $categories;

    /**
     * Create the component instance.
     */
    public function __construct()
    {
        global $wp_query;
        if($wp_query->post->post_name == 'artes'){
            $args = array(
               'type'                     => 'artes',
               'orderby'                  => 'name',
               'order'                    => 'ASC',
               'hide_empty'               => 1,
               'hierarchical'             => 1,
               'taxonomy'                 => 'category',
               'exclude'                  => ['1'],
            );
            $this->categories = get_categories($args);
        } else if($wp_query->post->post_name == 'homepage'){
            $args = array(
               'type'                     => 'artes',
               'orderby'                  => 'name',
               'order'                    => 'ASC',
               'hide_empty'               => 1,
               'hierarchical'             => 1,
               'taxonomy'                 => 'category',
               'exclude'                  => 'all',
               'include'                  => get_fields('options')['dreamup_config_page_group']['artes_carrousel'],
            );
            $this->categories = get_categories($args);
        }
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return $this->view('components.carrousel');
    }
}
