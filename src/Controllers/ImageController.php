<?php

namespace Ycs77\LaravelGlide\Controllers;

use Illuminate\Routing\Controller;
use Ycs77\LaravelGlide\Facades\Glide;

class ImageController extends Controller
{
    /**
     * Handle the glide image manipulation request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Glide::fromRequest()->response();
    }
}
