<?php

namespace Uposcar\Pixelex\PostTypes;

use PostTypes\PostType;
use PostTypes\Taxonomy;

final class Rental
{
    public function init() : void
    {
        $rentals = new PostType('rental');
        $rentals->taxonomy('product-type');
        $rentals->columns()->hide([ 'date', 'author' ]);
        $rentals->icon('dashicons-book-alt');
        $rentals->register();

        $productTypes = new Taxonomy('product-type');
        $productTypes->options([
            'hierarchical' => false,
        ]);
        $productTypes->register();
    }
}
