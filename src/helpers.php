<?php

use Ycs77\LaravelGlide\Facades\Glide;

if (! function_exists('glide_url')) {
    /**
     * Get the manipulated image url from glide.
     *
     * @param  string  $path
     * @param  array  $attributes
     * @return string
     */
    function glide_url(string $path, array $attributes = [])
    {
        return Glide::url($path, $attributes);
    }
}
