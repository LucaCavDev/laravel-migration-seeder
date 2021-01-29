<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;

class BrandController extends Controller
{
  public function index() {
   	$brands = Brand::all();
	  //dd($brands);
    return view('pages.home', compact('brands'));
  }

  //public function getAllBrands() {
  //  $brands = Brand::all();
  //  return json_encode($brands);
  //}
  //definisce una api

  public function show($id) {

    $brand = Brand::findOrFail($id);
    return view('pages.brand', compact('brand'));
  }

}
