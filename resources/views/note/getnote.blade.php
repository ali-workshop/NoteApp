<x-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Edit your note BY Title </h1>
        <form action={{route("note.search")}} method="GET" class="note">
            @csrf
            @method("GET")
            <textarea  name="title" rows="1" class="note-body" placeholder="Enter your note Title or peice of the title here..."></textarea>
            
            <div class="note-buttons">
                <a href="{{ route('note.panel') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>