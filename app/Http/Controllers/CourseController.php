<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use App\Models\Details;
use App\Models\TakenCourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(){
        $data = Books::simplePaginate(5);
        $dataC = Categories::all();
        return view('home', compact('data', $data), compact('dataC', $dataC));
    }

    public function contact(){
        $dataC = Categories::all();
        return view('contact', compact('dataC', $dataC));
    }

    public function show($id){
        $data = Books::all()[$id];
        $dataC = Categories::all();
        return view('detail', compact('data', $data), compact('dataC', $dataC));
    }

    public function cat($id){
        $dataC = Categories::find($id+1);
        $dataD = Categories::all();
        $data = $dataC->books()->simplePaginate(5);
        return view('category',compact('dataC', 'data', 'dataD'));
    }

}
