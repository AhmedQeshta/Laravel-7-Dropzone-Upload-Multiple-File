<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadImage($image , $dir = 'image'){
        $uploadImage = $image;
        $imagename = time(). '.' . $uploadImage->getClientOriginalExtension();
        $direction = public_path('/'.$dir.'/');
        $uploadImage->move($direction,$imagename);
        $imagePath = $dir. '/' . $imagename ;
        return $imagePath;
    }

}
