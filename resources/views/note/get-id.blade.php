<x-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Edit your note BY ID </h1>
        <form action={{route("note.edit.via.id")}} method="GET" class="note">
            @csrf
            @method("GET")
            <textarea  name="id" rows="10" class="note-body" placeholder="Enter your note ID here"></textarea>
            
            <div class="note-buttons">
                <a href="{{ route('note.index',['howwilldisplay'=>'order_pages_UD']) }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>