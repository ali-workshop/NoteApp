<!DOCTYPE html>
<html>
    <head>
        <title>Image Insertion in HTML</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh; /* Full viewport height */
                margin: 0; /* Remove default margin */
            }

            .image-container {
                position: relative;
                display: inline-block;
                width: 50%; /* Adjust the width as needed */
                height: auto;
            }

            .image-container img {
                display: block;
                width: 100%; /* Make the image take up the full width of the container */
                height: auto; /* Maintain aspect ratio */
            }

            .overlay-text {
                position: absolute;
                top: 50%; 
                left: 50%; 
                transform: translate(-50%, -50%); 
                background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
                color: #fff; 
                padding: 10px 20px; 
                font-size: 20px; 
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="image-container">
            <img src="https://media.giphy.com/media/nR4L10XlJcSeQ/giphy.gif?cid=790b7611ev2nrkpxohiqe6ot7sr271pctd5opjjv5rrrjwli&ep=v1_gifs_search&rid=giphy.gif&ct=g" alt="UN_VALID ID">
            <div class="overlay-text">UN_VALID ID</div>
        </div>
    </body>
</html>
