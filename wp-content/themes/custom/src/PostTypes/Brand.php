<?php

namespace Uposcar\Pixelex\PostTypes;

use PostTypes\PostType;

final class Brand
{
    public function init() : void
    {
        $brand = new PostType('brand');

        $brand->columns()->hide([
            'date',
            'author'
        ]);

        $brand->icon('dashicons-book');

        $brand->register();
    }
}
