<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Animation</title>
    <style>
        #text-container {
            font-family: Arial, sans-serif;
            font-size: 18px;
            overflow: hidden;
            white-space: nowrap;
            animation: typing 1s steps(40) forwards;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
    </style>
</head>
<body>
    <div id="text-container">
        <!-- Text content will be dynamically inserted here -->
    </div>

    <script>
        // JavaScript to fetch and display text character by character
        const textContainer = document.getElementById('text-container');
        const text = `{{ $text }}`; // Assuming $text is the variable passed from the controller

        // Function to display text character by character
        function typeWriter(text, i) {
            if (i < text.length) {
                textContainer.innerHTML += text.charAt(i);
                i++;
                setTimeout(() => {
                    typeWriter(text, i);
                }, 50); // Adjust speed here (milliseconds)
            } else {
                textContainer.style.animationDuration = '0s'; // Stop the typing animation
            }
        }

        // Start typing animation
        typeWriter(text, 0);
    </script>
</body>
</html>
