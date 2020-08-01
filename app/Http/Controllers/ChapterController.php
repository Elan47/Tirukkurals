<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Http\Resources\ChapterResource;
use Illuminate\Http\Request;

class ChapterController extends Controller
{

    public function index()
    {
        $chapters = Chapter::all();
        return ChapterResource::collection($chapters);
    }
}
