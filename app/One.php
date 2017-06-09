<?php

namespace App;

//use App\Other;
use Other;


class One
{

    /**
     * @var Other\Two
     */
    public $property;

    public function __construct()
    {
        //echo get_class(new Other\Two());
    }

}