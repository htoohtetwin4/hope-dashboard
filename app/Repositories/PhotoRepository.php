<?php

namespace App\Repositories;

class PhotoRepository
{
    public function getPhoto()
    {

        $photo = url("img/p1.jpg");
        return $photo;
    }
}
