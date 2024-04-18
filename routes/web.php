<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\StroyController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// // finally create dashboard
Route::get('dashboard',[NoteController::class,'dashboard'])->name('note.panel');
Route::get('/note/{howwilldisplay}',[NoteController::class,'index'])->name('note.index'); #for show the all notes is the database
Route::get('/note/get/sort',[NoteController::class,'getsort'])->name('note.get.sort');
Route::get('/note/sort/via/{howtosort}',[NoteController::class,'sort'])->name('note.sort');
Route::get('/notes',[NoteController::class,'allnotes'])->name('note.all');
Route::get('/notes/get/filter',[NoteController::class,'getfilter'])->name('note.getfilter'); 
Route::get('/notes/filtering',[NoteController::class,'filter'])->name('note.filter');
Route::get('/notes/get/text',[NoteController::class,'getsometext'])->name('note.get.text'); 
Route::get('/notes/filtering/some/text',[NoteController::class,'notecontaintext'])->name('note.search.bytext');
Route::get('/create/note',[NoteController::class,'create'])->name('note.create');
Route::post('/note/store',[NoteController::class,'store'])->name('note.store');
Route::get('/create/note/via/Ai',[NoteController::class,'createAi'])->name('note.create.ai');
Route::get('/note/show/{note}',[NoteController::class,'show'])->name('note.show');
Route::get('/get/note/via/title/',[NoteController::class,'get_via_title'])->name('note.get.title');
Route::get('/edit/note/via/title/',[NoteController::class,'edit_via_title'])->name('note.edit.via.title');
Route::get('note/edit/{note}',[NoteController::class,'edit'])->name('note.edit');
Route::get('search/results',[NoteController::class,'search'])->name('note.search');
Route::put('note/update/{note}',[NoteController::class,'update'])->name('note.update');
Route::get('unvalid/note',[NoteController::class,'unvalid'])->name('note.unvalid');
Route::get('note/to/delete',[NoteController::class,'getdelet'])->name('note.get.destroy');
Route::get('note/delete/via/title',[NoteController::class,'notetodelet'])->name('note.get.destroy.title');
Route::get('get/all/notes/match/title',[NoteController::class,'getnotes'])->name('note.get.notes.title');
Route::delete('note/delete/{note}',[NoteController::class,'destroy'])->name('note.destroy');






// paginations