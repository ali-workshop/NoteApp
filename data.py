import json

# Assuming both scripts are in the same directory
with open(r'C:\xampp\htdocs\backend_course\NoteApp\first_50_words.json', 'r') as json_file:
    data = json.load(json_file)

# Access the text
first_50_words_text = data["text"]

# Print the text
print(first_50_words_text)
