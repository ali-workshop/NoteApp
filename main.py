from transformers import pipeline
import json
# Initialize the text generation pipeline with a smaller model and a faster decoding strategy
story_generator = pipeline("text-generation", model="gpt2", device=0) # Use device=0 for GPU

# Generate a story
story_prompt = "Once upon a time in a small village, there lived a young girl named Lily."
story = story_generator(story_prompt, max_length=500, num_return_sequences=1, do_sample=True, temperature=0.8)

# Extract the generated text
generated_text = story[0]['generated_text']

# Split the text into words
words = generated_text.split()

# Extract the first 50 words
first_50_words = words[:150]

# Join the words back into a string
first_50_words_text = ' '.join(first_50_words)


# Write the first 50 words to a JSON file
with open('first_50_words.json', 'w') as json_file:
    json.dump({"text": first_50_words_text}, json_file)