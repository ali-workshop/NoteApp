<x-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Filter your Notes.</h1>
        <form action={{route("note.search.bytext")}} method="GET" class="note">
            @csrf
            @method("GET")
            <textarea  name="text" rows="10" class="note-body" placeholder="Enter biece of text to search in notes about it"></textarea>
            
            <div class="note-buttons">
                <a href="{{ route('note.index',['howwilldisplay'=>'order_pages_UD']) }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>