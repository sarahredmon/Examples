## Optimizing Prompts Review - https://chat.openai.com/
You can use ChatGPT to help you optimize prompts using three basic steps: 

1. Give ChatGPT an overview of what you'd like to do, 
prompt to ask clarifying questions

2. Answer ChatGPT's clarifying questions

3. When ChatGPT returns an optimized prompt, 
feed the prompt back to ChatGPT

## Practice: Use the steps above to optimize the following prompt: 

"Show me a code snippet for a modal in React."

## My prompt 

"I'm going to give you a prompt and I want you to ask me clarifying questions to help optimize the prompt. Suggest a more effective prompt based on my answers. Here's the prompt: "Show me a code snippet for a modal in React." 

## Clarifying Questions: 

- Do you want a functional component or a class component in React?
    - functional
- Should the modal be styled with plain CSS, SCSS, or a specific library like styled-components?
    - external css stylesheet
- Do you want the modal to open and close based on a button click?
    - yes
- Are there any specific content types you want inside the modal? (e.g., text, images, forms)
    - just text is fine for now
- Do you require any animation or transition effects when the modal appears or disappears?
    - use a simple fade in/out effect
- Are you using any state management tools (like Redux) or do you prefer local component state for managing the modal's visibility? 
    - local component state 

## Optimized prompt

"Provide a React functional component code snippet for a modal that utilizes an external CSS stylesheet. The modal should display text content and open/close based on a button click. It should have a simple fade in/out transition effect and manage its visibility using local component state."