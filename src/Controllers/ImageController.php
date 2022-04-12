<?php

namespace Ycs77\LaravelGlide\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use League\Glide\Responses\LaravelResponseFactory;
use Ycs77\LaravelGlide\Facades\Glide;

class ImageController extends Controller
{
    /**
     * Handle the glide image manipulation request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $path
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, string $path)
    {
        Glide::setResponseFactory(new LaravelResponseFactory($request));

        return Glide::getImageResponse($path, $request->all());
    }
}
