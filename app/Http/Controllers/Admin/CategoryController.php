<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function getList(){
    	return view ('admin.categories.list');
    }

    public function getAdd(){
    	return view ('admin.categories.add');
    }
    public function getEdit(){
    	return view ('admin.categories.edit');
    }





}
