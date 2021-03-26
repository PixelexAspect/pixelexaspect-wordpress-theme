<?php

namespace Uposcar\Pixelex\Util;

/**
 * ACF Image utility class to make the view rendering
 * more concise
 *
 * @author Gemma Black <gblackuk@googlemail.com>
 */
final class AcfImage
{



    /**
     * Whether to render a subfield or not
     *
     * @var boolean
     */
    private $subField = false;



    /**
     * Instantiates an ACF Image util class
     *
     * @return AcfImage
     *
     * @author Gemma Black <gblackuk@googlemail.com>
     */
    public static function instance() : AcfImage
    {
        return new self;
    }



    /**
     * Fluent interface: turns on sub field lookups
     *
     * @return AcfImage
     *
     * @author Gemma Black <gblackuk@googlemail.com>
     */
    public function sub() : AcfImage
    {
        $this->subField = true;

        return $this;
    }



    /**
     * Converts an acf image field into an alt
     * statement based on it being an array
     *
     * @param string $field
     *
     * @return string
     *
     * @author Gemma Black <gblackuk@googlemail.com>
     */
    public function alt(string $field) : string
    {
        $image = $this->getField($field);

        return esc_url($image['alt']) ?? '';
    }



    /**
     * Converts an acf image field into a url
     * based on it being an array
     *
     * @param string $field
     *
     * @return string
     *
     * @author Gemma Black <gblackuk@googlemail.com>
     */
    public function url(string $field) : string
    {
        $image = $this->getField($field);

        return esc_url($image['url']) ?? '';
    }



    /**
     * Gets field dependent on field type (sub or main field),
     * which is helpful when dealing with repeater fields
     *
     * @param string $field
     *
     * @return mixed
     *
     * @author Gemma Black <gblackuk@googlemail.com>
     */
    private function getField(string $field)
    {
        if ($this->subField) {
            return get_sub_field($field);
        }
        return get_field($field);
    }
}
