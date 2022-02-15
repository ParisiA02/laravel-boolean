<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostCard;

class ApiController extends Controller
{   
    public function getPostcards(){
        $postcards = PostCard::All();
        return json_encode($postcards);
    }
}
