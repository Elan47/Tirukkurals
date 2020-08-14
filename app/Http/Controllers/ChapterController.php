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
    public function section_chapters($id)
    {
        $chapters = Chapter::where('section_id', $id)->get();
        return ChapterResource::collection($chapters);
    }
    public function chapter_group_chapters($id)
    {
        $chapters = Chapter::where('chapter_group_id', $id)->get();
        return ChapterResource::collection($chapters);
    }
}
