<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
   */


   public function dashboard(){


            return view('note.panal');




   }

   public function get_via_title(){

        return view('note.get-title');


   }

   public function edit_via_title(Request $request){
 
    $title=$request->validate([

'title' => ['string']
 ]);
    //  dd($id);


    //    dd($title); 
    $note=Note::query()->where('title','LIKE','%'.$title['title'].'%')->get();
   
    // dd($note);
    if ($note->count() === 0) {
        return view('note.unvalid-title');  
        // dd($note);
   }
        
    // dd($note);
    // dd($note[0]);
    // dd($note[0]->note);
    
    return view('note.edit-note-based-title',['note'=>$note[0]]);


   }

public function getnotes(){

    return view('note.getnote');


}

    public function index($how_dispaly)
    {
        if ($how_dispaly=="all"){$notes=Note::all();}#this is for display the all notes
     
       if($how_dispaly=="order_pages_CA"){$notes=Note::query()->orderBy('created_at','asc')->paginate(15);}
        if($how_dispaly=="order_pages_CD"){$notes=Note::query()->orderBy('created_at','desc')->paginate(15);}
            if($how_dispaly=="order_pages_UA"){$notes=Note::query()->orderBy('updated_at','asc')->paginate(15);}
        if($how_dispaly=="order_pages_UD"){$notes=Note::query()->orderBy('updated_at','desc')->paginate(15); #this for display all in pages and in asc order
        
        }
        // dd($notes);
        
        return view('note.index',['notes'=>$notes]);
    }

public function getsort(){


return view('note.sort');



}



public function search(Request $request){

$title=$request->validate(['title'=>['string','required']]);
$notes=Note::where('title','LIKE','%'.$title['title'].'%')->get();
return view('note.index',['notes'=>$notes]);
}
    public function sort($howtosort){

        
        if ($howtosort=="all"){$notes=Note::all();}
         
       

       if($howtosort=="order_pages_CA"){$notes=Note::query()->orderBy('created_at','asc')->paginate(15);}
        if($howtosort=="order_pages_CD"){$notes=Note::query()->orderBy('created_at','desc')->paginate(15);}
            if($howtosort=="order_pages_UA"){$notes=Note::query()->orderBy('updated_at','asc')->paginate(15);}
        if($howtosort=="order_pages_UD"){$notes=Note::query()->orderBy('updated_at','desc')->paginate(15); #this for display all in pages and in asc order
        
        }
        if($howtosort=='small_notes'){ $notes = Note::orderBy(DB::raw('LENGTH(note)'), 'asc')->get();}
        if($howtosort=='larg_notes'){ $notes = Note::orderBy(DB::raw('LENGTH(note)'), 'desc')->get();}
        if($howtosort=='notes_start_A'){$notes = Note::where('note', 'LIKE', 'A%')->get();}
        if($howtosort=='notes_contain_alice_words'){$notes=Note::where('note',"LIKE",'%lil%')->get(); }
        if($howtosort=='happy_notes'){$notes = Note::where('note', 'LIKE', '%Hap%')->get();}

        return view('note.index',['notes'=>$notes]);
    }


    public function allnotes(){

        $notes=Note::all();
        return view('note.all',["notes"=>$notes]);

    }

    public function getfilter(){
        return view('note.get-filter');

    }
    public function filter(Request  $request){

        $filter=$request->validate([

            'filter'=>['string','required']

        ]);

        $notes=Note::where('note','LIKE','%'.$filter['filter'].'%')->get();
        session()->flash('message', 'Your Notes Filted Succesfully');
        return view('note.all', ["notes" => $notes]);


    }
    
    public function getsometext(){
        return view('note.get-some-text');

    }
    public function notecontaintext(Request  $request){

        $text=$request->validate([

            'text'=>['string','required']

        ]);

        $notes=Note::where('note','LIKE','%'.$text['text'].'%')->get();
        session()->flash('message', 'the Notes contain this beice of text Filted Succesfully');
        return view('note.all', ["notes" => $notes]);


    }


    /**
     * Show the form for creating a new resource.
     */

    
    public function create()
    {
        return view('note.create');
    }

    
    public function createAi()
    {
        $note='this is ai';
        return view('note.create_ai',['note'=>$note]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $note=$request->validate([
            'title'=>['string','required'],
            'note'=>['string','required'],

        ]);

        $note=Note::create($note);
        
        return to_route("note.index",['howwilldisplay'=>'order_pages_CA'])->with("message","the note created successfully");
        // return to_route("note.show",["note"=>$note])->with("message","the note created successfully");
            
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note){
        
        return view('note.show',['note'=>$note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note) #search on chate#should be the same name of the name parapmeter in the route not like when i define it wihtout Note so the name doesnot matter
    {   
        return view('note.edit',['note'=>$note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
       $new=$request->validate([

            'note'=>['string'] #try with required
        ]);

        // $note->update($request->all());

        // $note->update($request->all());

 #for store
    //     $note= Note::create([
    //         'note' =>  $request->input('note') #$request->note 
    //  ]);



 
    //     $note->update([
    //         'note' =>  $request->input('note') #$request->note 
    //  ]);

          $note->update($new);
        return to_route("note.index",['howwilldisplay'=>'order_pages_UD'])->with("message","the note Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */


     public function getdelet(){
        
        return view('note.get_delet');


     }

     public function notetodelet(Request  $request){

        $text=$request->validate([

            'text'=>['string','required']

        ]);

        $notes=Note::where('title','LIKE','%'.$text['text'].'%')->get();
        session()->flash('message', 'the Notes match this title are below free to delet any one you need.....');
        return view('note.delet_via_title', ["notes" => $notes]);


    }




    public function destroy(Note $note)
    {
        $note->delete();
        return to_route("note.index",['howwilldisplay'=>'order_pages_UD'])->with("message","the note deleted successfully");

    }


    public function unvalid(){

        return view('note.unvalid-choice');


    }
}
