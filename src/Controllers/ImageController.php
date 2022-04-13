<?php

namespace Ycs77\LaravelGlide\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use League\Glide\Signatures\SignatureException;
use League\Glide\Signatures\SignatureFactory;
use Ycs77\LaravelGlide\Facades\Glide;
use Ycs77\LaravelGlide\Responses\LaravelResponseFactory;

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
        $this->validateRequest($path);

        Glide::setResponseFactory(new LaravelResponseFactory($request));

        return Glide::getImageResponse($path, $request->all());
    }

    /**
     * Validate the glide image manipulation request.
     *
     * @param  string  $path
     * @return void
     */
    protected function validateRequest(string $path)
    {
        if (is_string(config('glide.key'))) {
            try {
                $path = '/'.config('glide.base_url').'/'.trim($path, '/');

                SignatureFactory::create(config('glide.key'))->validateRequest($path, $_GET);
            } catch (SignatureException $e) {
                abort(404);
            }
        }
    }
}
