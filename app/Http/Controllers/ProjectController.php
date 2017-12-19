<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return ProjectResource::collection(Auth::user()->projects);
    }
}
