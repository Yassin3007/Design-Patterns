<?php 
namespace App\SocialMediaLogin;

use App\Interfaces\LoginInterface;

class Github implements LoginInterface {

    public function register()
    {
        return 'Github' ;
    }
}