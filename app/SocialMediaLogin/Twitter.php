<?php 
namespace App\SocialMediaLogin;

use App\Interfaces\LoginInterface;

class Twitter implements LoginInterface {

    public function register()
    {
        return 'Twitter' ;
    }
}