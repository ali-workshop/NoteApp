const text = "This is a long text that will be displayed character by character.";
const textElement = document.getElementById('text');

function displayText() {
    let index = 0;
    const intervalId = setInterval(function() {
        textElement.textContent += text[index];
        index++;
        if (index === text.length) {
            clearInterval(intervalId);
        }
    }, 5); // Adjust the delay as needed
}

displayText();
