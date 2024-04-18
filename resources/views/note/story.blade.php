<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Animation</title>
    <style>
        /* Styles for text container */
        #text-container {
            font-family: Arial, sans-serif;
            font-size: 18px;
            overflow: hidden;
            white-space: pre-wrap; /* Use pre-wrap to preserve whitespace */
            word-break: break-all;
            padding-bottom: 10px; /* Add padding between lines */
            margin-bottom: 20px; /* Add margin at the end of each line */
            max-width: 980px; /* Added from your style */
            margin: 0 auto; /* Added from your style */
            padding: 20px; /* Add padding for content */
        }

        /* Added from your style */
        .note-body {
            outline: 0;
            font-family: 'Caveat', cursive;
            font-size: 24px;
            padding: 10px 16px 16px;
            width: 100%;
            resize: none;
            color: #1e1e1e; /* Set text color */
            background-color: #f0c806; /* Set background color */
            border-radius: 8px;
            box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.2);
            transition: all 0.5s;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Form to enter text -->
    <form id="text-form" onsubmit="startTyping(event)">
        <!-- Message before entering text -->
        <div class="message">Please enter your prompt here to see how we can creat note using AI:</div><br><br>

        <!-- Text input -->
        <textarea id="user-text" class="note-body" rows="1" style="width: 100%; resize: none;"></textarea><br><br>

        <!-- Submit button -->
        <button type="submit" class="new-note-btn">Generate Note Using AI </button>
    </form>

    <!-- Text container -->
    <div id="text-container" style="display: none;">
        <!-- Text content will be dynamically inserted here -->
    </div>

    <script>
        // Function to start typing animation when the form is submitted
        function startTyping(event) {
            event.preventDefault(); // Prevent form submission
            document.getElementById('text-form').style.display = 'none'; // Hide text input form
            document.getElementById('text-container').style.display = 'block'; // Display text container
            const mainText = `{{ $text }}`; // Get text sent from controller
            typeWriter(mainText, 0); // Start typing animation with main text
        }

        // Function to display text character by character
        function typeWriter(text, i) {
            const textContainer = document.getElementById('text-container');
            if (i < text.length) {
                textContainer.innerHTML += text.charAt(i);
                i++;
                setTimeout(() => {
                    typeWriter(text, i);
                }, 50); // Adjust speed here (milliseconds)
            }
        }
    </script>
</body>
</html>
