
<x-layout>
 
    <div class="note-container py-12">
    
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
                        {{ Str::words($note->note,75) }}<div style="color: red">created at:</div>{{$note->created_at}}
                      </div>
                </div>
                <div class="note-buttons">
                    <form action="{{ route('note.destroy', $note) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="note-delete-button">Delete</button>
                    </form> 
            @endforeach
        </div>
        
    </div>
</x-layout>