<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classRoom;

class ClassController extends Controller
{
    public function index(){
   	$classes = classRoom::all();
   	return view('class', ['classes'=> $classes]);
   }}
