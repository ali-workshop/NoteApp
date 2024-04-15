<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="/styles.css"> <!-- Link to your external CSS file -->
</head>
<body>
    <x-layout>
        <div class="max-w-3xl mx-auto px-4 py-8">
            <ul class="list-none">
                <li class="mb-6">
                    <a href={{route('note.index',['howwilldisplay'=>'all'])}} class="block text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Press to show all the notes</a><br><br>
                </li>
                <li class="mb-6">
                    <a href={{route("note.get.id")}} class="block text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Press to edit specific Note by title</a><br><br>
                </li>
                <li class="mb-6">
                    <a href={{route("note.all")}} class="block text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Press to show all (filter) and edit</a><br><br>
                </li>
                <li class="mb-6">
                    <a href={{route("note.create")}} class="block text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Create new Note</a><br><br>
                </li>
                <li class="mb-6">
                    <a href={{route('note.get.id')}} class="block text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Continue write with specific Note</a><br><br>
                </li>
                <li class="mb-6">
                    <a href="#" class="block text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Delete note</a><br><br>
                </li>
                <li class="mb-6">
                    <a href="#" class="block text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Search for note using tite</a><br><br>
                </li>
                <li class="mb-6">
                    <a href="{{ route('note.get.text') }}" class="block text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Search for note using some text</a><br><br>
                </li>
                <li class="mb-6">
                    <a href="{{route('note.create.ai')}}" class="block text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Generate note with Ai</a><br><br>
                </li>
                 </ul>
        </div>
    </x-layout>
</body>
</html>
