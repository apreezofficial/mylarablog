<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Http\Controllers\BlogsController;
use Illuminate\Http\Request;
use App\Models\Categories;
class ApiController extends Controller
{
    public function get_categories(){
      $categories = Categories::where('status', 'active')->get();
      return $categories;
    }
        public function get_blogs(){
      $blog_controller = new BlogsController();
      $blogs = $blog_controller->index();
      return response()->json($blogs);
}
}