<x-layout>
    <div class="note-container single-note">
        <h1>Create new note</h1>
        <link rel="stylesheet" href="C:\xampp\htdocs\backend_course\NoteApp\resources\css\style.css">
        <form action="{{ route('note.store') }}" method="POST" class="note">
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <div class="typewriter">
                <p id="text"></p>
            </div>
            <script src="C:\xampp\htdocs\backend_course\NoteApp\resources\views\note\script.js"></script>
            <div class="note-buttons">
                @php
                    $all='order_pages'
                @endphp
                


                <a href="{{ route('note.index',['howwilldisplay'=>$all]) }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
        
    </div>
</x-layout>