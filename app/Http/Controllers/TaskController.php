<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    function index() {
	return view('tasks.index');
    }
    function create() {
	return view('tasks.create');
    }
    function store() {
	return redirect();
    }
    function show() {
	return view('tasks.show');
    }
    function edit() {
	return view('tasks.edit');
    }
    function update() {
	return redirect();
    }
    function destroy() {
	return redirect();
    }
}
