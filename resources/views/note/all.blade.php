
<x-layout>
 
    <div class="note-container py-12">
    
        <div><a href="{{ route('note.index',['howwilldisplay'=>'all']) }}" class="new-note-btn">
            Stay-in The Same Page BUT 😎 Authorize Crud Operations
        </a></div>
        <div><a href="{{ route('note.getfilter') }}" class="new-note-btn">
            Filter By piece of text
        </a></div>
        <div><a href="{{ route('note.get.sort') }}" class="new-note-btn">
            Different show (Different Sorting 😎)
        </a></div>
        <div><a href="{{ route('note.panel') }}" class="new-note-btn">
            Go Back TO DashBoard
        </a></div>
        @if ($notes)
          <br><h1>  the number of Notes Now is {{count($notes)}}</h1>
      @endif
        <div class="notes">
         
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{ Str::words($note->note,50) }}<div style="color: red">created at:</div>{{$note->created_at}}
                      </div>
                </div>
            @endforeach
        </div>
        
    </div>
</x-layout>