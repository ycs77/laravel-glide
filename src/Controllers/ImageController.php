<?php

namespace Ycs77\LaravelGlide\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Ycs77\LaravelGlide\Facades\Glide;

class ImageController extends Controller
{
    /**
     * Handle the glide image manipulation request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return Glide::fromRequest($request)->response($request);
    }
}
