<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
class ApiController extends Controller
{
    public function get_categories(){
      $categories = Categories::where('status', 'active')->get();
      return $categories;
    }
}
