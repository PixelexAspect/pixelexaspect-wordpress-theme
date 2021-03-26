<?php

namespace Uposcar\Pixelex\PostTypes;

use PostTypes\Taxonomy;

final class PageType
{
    public function init() : void
    {
        $taxonomy = new Taxonomy('page_type');
        $taxonomy->options([
            'hierarchical' => false,
        ]);
        $taxonomy->posttype('page');
        $taxonomy->register();
    }
}
