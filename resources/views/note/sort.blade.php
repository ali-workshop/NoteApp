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
            <a href="{{route('note.sort',['howtosort'=>'all'])}}" class="link">Don't Care For Sorting</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.sort',['howtosort'=>'order_pages_CA'])}}" class="link">Sort BY Created Notes Last</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.sort',['howtosort'=>'order_pages_CD'])}}" class="link">Sort BY Created Notes First</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.sort',['howtosort'=>'order_pages_UA'])}}" class="link">Sort BY Updated Notes Last</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.sort',['howtosort'=>'order_pages_UD'])}}" class="link">Sort BY Updated Notes First</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.sort',['howtosort'=>'small_notes'])}}" class="link">Sort BY The Smallest to Largest Notes</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.sort',['howtosort'=>'larg_notes'])}}" class="link">Sort BY The Largest to Smallest Note</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.sort',['howtosort'=>'notes_start_A'])}}" class="link">Sort BY Start With "A" Notes </a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.sort',['howtosort'=>'notes_contain_alice_words'])}}" class="link">Sort BY Lili Drama</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.sort',['howtosort'=>'happy_notes'])}}" class="link">Sort BY Happy Notes</a>
        </div>
        <div class="sticker orange">
            <a href="{{route('note.unvalid')}}" class="link">ADD Another Type of Sorting </a>
        </div>
        
    </div>
</body>
</html>
