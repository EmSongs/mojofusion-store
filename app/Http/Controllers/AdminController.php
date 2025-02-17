<?php

namespace App\Http\Controllers;
use app\Models\Brand;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("admin.index");
    }

    public function brands(){
        $brands = Brand::oderBy('id', 'DESC')->paginate(10);
        return view('admin.brands', compact('brands'));
    }
}
