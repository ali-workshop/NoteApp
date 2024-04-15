
<x-layout>
    <div class="note-container py-12">
        <a href="{{ route('note.create') }}" class="new-note-btn">
            New Note
        </a>
        <div><a href="{{ route('note.panel') }}" class="new-note-btn">
            Different show (Different Sorting 😎)
        </a></div>
        <a href="{{ route('note.panel') }}" class="new-note-btn">
            Go Back TO DashBoard
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{ Str::words($note->note,50) }}<div style="color: red">created at:</div>{{$note->created_at}}
                    </div>
                    <div class="note-buttons">
                        <a href="{{route('note.show',$note)}}" class="note-edit-button">View</a>
                        <a href="{{route('note.edit',$note)}}" class="note-edit-button">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-button">Delete</button>
                        </form> 
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
</x-layout>