<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
  //protected variables(will move to helper soon)
  protected $blog_name = "mylarablog";
    public function index(){
      $title = $this->blog_name . '- Home of Laravel Blogs, tweets, raffles and comparisons';
      return view('client.home', ['blog_name'=> $this->blog_name, 'title' => $title]);
    }
    public function page_not_found(Request $request)
{
    $title = $this->blog_name . ' - Page not Found';
    $not_found_page = $request->path(); // the path that was accessed

    return view('client.includes.page_not_found', [
        'blog_name' => $this->blog_name,
        'title'     => $title,
        'path'      => $not_found_page,
    ]);
}
    
}
