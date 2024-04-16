<x-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Filter your Notes.</h1>
        <form action='{{route("note.get.destroy.title")}}' method="GET" class="note">
            @csrf
            @method("GET")
            <textarea  name="text" rows="10" class="note-body" placeholder="Enter title  of the note u want to delet it."></textarea>
            
            <div class="note-buttons">
                <a href="{{ route('note.index',['howwilldisplay'=>'order_pages_UD']) }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Search For Delet</button>
            </div>
        </form>
    </div>
</x-layout>