<?php

use App\Http\Controllers\SectionController;
use App\Http\Resources\SectionCollection;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/authenticated', function () {
    return true;
});
Route::post('register', 'RegisterController@register')->name('registerusers');
Route::post('login', 'LoginController@login')->name('loginusers');
Route::post('logout', 'LoginController@logout')->name('logoutusers');

Route::get('sections', 'SectionController@index')->name('sections');
Route::get('chapters', 'ChapterController@index')->name('chapters');
Route::get('kurals', 'KuralController@index')->name('kurals');
Route::get('chapter-groups', 'ChapterGroupController@index')->name('chapterGroups');
Route::get('kural/{id}', 'KuralController@kuralById')->name('KuralById');
Route::get('chapter/{id}', 'KuralController@chapter_kurals')->name('chapterKurals');
Route::get('section/{id}', 'ChapterController@section_chapters')->name('sectionChapters');
Route::get('chapter-group/{id}', 'ChapterController@chapter_group_chapters')->name('chapterGroupChapters');
Route::get('paginate', 'KuralController@index')->name('paginatedKurals');
Route::get('search/id/{search}', 'KuralController@searchById')->name('searchById');
Route::get('search/en/{search}', 'KuralController@searchInEnglish')->name('searchInEnglish');
Route::get('search/tr/{search}', 'KuralController@searchInTransliteration')->name('searchInTransliteraion');
Route::get('search/tn/{search}', 'KuralController@searchInTamil')->name('searchInTamil');
