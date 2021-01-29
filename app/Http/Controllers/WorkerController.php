<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Worker;

class WorkerController extends Controller
{
  public function index() {
    $workers = Worker::all();
    //dd($workers);
    return view('pages.workers', compact('workers'));
  }

  public function show($id) {
    $worker = Worker::findOrFail($id);
    return view('pages.worker', compact('worker'));

  }

}
