<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChapterGroupResource;
use App\ChapterGroup;
use Illuminate\Http\Request;

class ChapterGroupController extends Controller
{
    public function index()
    {
        $chaptergroups = ChapterGroup::all();
        return ChapterGroupResource::collection($chaptergroups);
    }
}
