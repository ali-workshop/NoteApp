<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticker Example</title>
    <style>
        .sticker-container {
            margin-top: 70px; /* Add margin to the top */
            display: grid;
           grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .sticker {
            width: 100%; /* Make each sticker fill the available width */
            height: 200px;
            border: 2px solid black;
            border-radius: 0;
            background: rgb(234, 0, 255);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .link {
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="sticker-container">
        <div class="sticker orange">
            <a href="{{route('note.index',['howwilldisplay'=>'all'])}}" class="link">Press to show all the notes</a>
        </div>
        <div class="sticker orange">
            <a href="{{route("note.get.title")}}" class="link">Press to edit specific Note</a>
        </div>
        <div class="sticker orange">
            <a href="{{route("note.all")}}" class="link">Press to show all (filter) and edit</a>
        </div>
        <div class="sticker orange">
            <a href="{{route("note.create")}}" class="link">Create new Note</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.get.title')}}" class="link">Continue write with specific Note</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.get.destroy')}}" class="link">Delete note</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.get.notes.title')}} " class="link">Search for note using title</a>
        </div>
        <div class="sticker orange">
            <a href="{{ route('note.get.text') }}" class="link">Search for note using some text</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.create.ai')}}" class="link">Generate note with Ai</a>
        </div>
        
    </div>
</body>
</html>
