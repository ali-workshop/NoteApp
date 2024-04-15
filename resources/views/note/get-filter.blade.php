<x-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Filter your Notes.</h1>
        <form action={{route("note.filter")}} method="GET" class="note">
            @csrf
            @method("GET")
            <textarea  name="filter" rows="10" class="note-body" placeholder="Enter your favorite Fitler"></textarea>
            
            <div class="note-buttons">
                <a href="{{ route('note.index',['howwilldisplay'=>'order_pages_UD']) }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>