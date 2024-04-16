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
Route::get('/notes',[NoteController::class,'allnotes'])->name('note.all');
Route::get('/notes/get/filter',[NoteController::class,'getfilter'])->name('note.getfilter'); 
Route::get('/notes/filtering',[NoteController::class,'filter'])->name('note.filter');
Route::get('/notes/get/text',[NoteController::class,'getsometext'])->name('note.get.text'); 
Route::get('/notes/filtering/some/text',[NoteController::class,'notecontaintext'])->name('note.search.bytext');
Route::get('/create/note',[NoteController::class,'create'])->name('note.create');
Route::post('/note/store',[NoteController::class,'store'])->name('note.store');
Route::get('/create/note/via/Ai',[NoteController::class,'createAi'])->name('note.create.ai');
Route::get('/note/show/{note}',[NoteController::class,'show'])->name('note.show');
Route::get('/get/note/via/id/',[NoteController::class,'get_via_id'])->name('note.get.id');
Route::get('/edit/note/via/id/',[NoteController::class,'edit_via_id'])->name('note.edit.via.id');
Route::get('note/edit/{note}',[NoteController::class,'edit'])->name('note.edit');
Route::put('note/update/{note}',[NoteController::class,'update'])->name('note.update');

Route::get('note/to/delete',[NoteController::class,'getdelet'])->name('note.get.destroy');
Route::get('note/delete/via/title',[NoteController::class,'notetodelet'])->name('note.get.destroy.title');

Route::delete('note/delete/{note}',[NoteController::class,'destroy'])->name('note.destroy');
# instead of the above line i can use better way and make it in one line
// Route::resource('note',NoteController::class);

// make title for each note 
// make the filter by the titles names  

Route::get('story',[StroyController::class,'test']);