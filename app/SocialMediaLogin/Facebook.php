<?php 
namespace App\SocialMediaLogin;

use App\Interfaces\LoginInterface;

class Facebook implements LoginInterface {

    public function register()
    {
        return 'Facebook' ;
    }
}