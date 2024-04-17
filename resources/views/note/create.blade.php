<x-layout>
    <div class="note-container single-note">
        <h1>Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
            @csrf
            <textarea name="title" rows="1" class="note-body" placeholder="Enter your note title here"></textarea><br><br>

            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <div class="note-buttons">
                @php
                    $created_at_desc='order_pages_CD'
                @endphp
                <a href="{{ route('note.index',['howwilldisplay'=>$created_at_desc]) }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>