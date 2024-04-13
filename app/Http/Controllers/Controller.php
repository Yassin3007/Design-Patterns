<?php

namespace App\Http\Controllers;

use App\SocialMediaLogin\Facebook;
use App\SocialMediaLogin\Github;
use App\SocialMediaLogin\Twitter;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function signUp(HttpRequest $request){
        $type = $request->type ;

        $registerMethod = match($type) {
            "facebook"=>(new Facebook)->register(),
            "twitter"=>(new Twitter)->register(),
            "github"=>(new Github)->register(),
            default =>'enter a valid method '
        };

        return response()->json($registerMethod);

    }
}
