<?php

namespace App\Http\Controllers;

use App\Http\Resources\SectionResource;
use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all();
        return SectionResource::collection($sections);
    }
}
