<?php
use Illuminate\Support\Facades\Auth;

if(!function_exists('title')){
    function title(){
        $title = "Basic Curd App";
        return $title;
    }
}
