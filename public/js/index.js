document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('text-container');
    const resultTextElement = document.getElementById('result-text');
    const originalText = 'tamayuraaa';
    const searchText = 'tamayuraaa';
    const replaceText = 'sougetsuui';
    const randomSymbols = '0123456789!@#$%^&*()-+=[]{}|;:,.<>/?';
    const chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?/';

    // Helper functions
    function randomChar() {
        return chars.charAt(Math.floor(Math.random() * chars.length));
    }

    function randomizeSubstring(substring) {
        return substring.split('').map(() => {
            return randomSymbols.charAt(Math.floor(Math.random() * randomSymbols.length));
        }).join('');
    }

    function generateRandomString(length) {
        let result = '';
        for (let i = 0; i < length; i++) {
            result += randomChar();
        }
        return result;
    }

    function updateText() {
        let iterations = 0;
        const randomInterval = setInterval(() => {
            resultTextElement.textContent = generateRandomString(originalText.length);

            // Show randomized text for a short period
            setTimeout(() => {
                resultTextElement.textContent = randomizeSubstring(originalText);
            }, 300);

            // After a few iterations, start the transformation
            iterations++;
            if (iterations >= 10) { // Adjust this number as needed
                clearInterval(randomInterval);
                setTimeout(transformText, 100); // Delay before starting the transformation
            }
        }, 200); // Interval for random text updates
    }

    function transformText() {
        let index = 0;
        const targetLength = Math.min(originalText.length, replaceText.length); // Ensure we don't exceed bounds

        function updateCharacter() {
            if (index < targetLength) {
                // Get current text
                const currentText = resultTextElement.textContent;
                // Generate the new text with the transformed character
                let newText = '';
                for (let i = 0; i < originalText.length; i++) {
                    if (i < index) {
                        newText += replaceText[i];
                    } else if (i === index) {
                        newText += replaceText[i];
                    } else {
                        newText += randomChar(); // Randomize the remaining characters
                    }
                }
                resultTextElement.textContent = newText;
                index++;
                setTimeout(updateCharacter, 100); // Delay between character updates
            } else {
                // Once all characters have been updated, fill the remaining text
                resultTextElement.textContent = replaceText + generateRandomString(originalText.length - replaceText.length);
            }
        }
        updateCharacter();
    }

    // Function to randomize the position of an element
    function randomizePosition(element) {
        if (!element) {
            console.error('Element not found');
            return;
        }

        const containerWidth = container ? container.offsetWidth : window.innerWidth;
        const containerHeight = container ? container.offsetHeight : window.innerHeight;
        const textWidth = element.offsetWidth;
        const textHeight = element.offsetHeight;

        // Generate random position within container bounds
        const randomX = Math.random() * (containerWidth - textWidth);
        const randomY = Math.random() * (containerHeight - textHeight);

        element.style.position = 'absolute'; // Ensure absolute positioning
        element.style.left = `${randomX}px`;
        element.style.top = `${randomY}px`;
    }

    // Initialize body opacity to 0 for transition effect
    document.body.style.opacity = 0;

    // Start the text update process when the page loads
    window.addEventListener('load', () => {
        // Randomize position of the result text element within the container
        randomizePosition(resultTextElement);
        // Start updating text and ensure the body fades in
        updateText();
        document.body.style.opacity = 1;

        // Start transforming text and handle fade-in for main content
        setTimeout(() => {
            const mainContent = document.getElementById('main-content');
            if (mainContent) {
                mainContent.style.display = 'flex'; // Ensure the main content is displayed
                mainContent.style.opacity = 1; // Fade in the main content
            }
        }, 1000); // Delay to match the splash screen's fade-out timing
    });

    // Stop updating and switch to the main content after 5 seconds
    setTimeout(() => {
        resultTextElement.textContent = originalText.replace(searchText, replaceText); // Final state with "sougetsuui"

        // Fade out the splash screen and fade in the main content
        const splashScreen = document.getElementById('splash-screen');
        if (splashScreen) {
            splashScreen.style.transition = 'opacity 0.5s ease-in-out'; // Smooth fade out
            splashScreen.style.opacity = '0';
            setTimeout(() => {
                splashScreen.style.display = 'none'; // Ensure splash screen is hidden
            }, 500); // Match the fade-out duration
        }
    }, 5000);
});
