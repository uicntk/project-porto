
const resultTextElement = document.getElementById('result-text');
const originalText = 'tamayuraaa';
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

function randomizePosition(element) {
    if (!element) {
        console.error('Element not found');
        return;
    }

    const containerWidth = window.innerWidth;
    const containerHeight = window.innerHeight;
    const textWidth = element.offsetWidth;
    const textHeight = element.offsetHeight;

    const randomX = Math.random() * (containerWidth - textWidth);
    const randomY = Math.random() * (containerHeight - textHeight);

    element.style.position = 'absolute'; // Ensure absolute positioning
    element.style.left = `${randomX}px`;
    element.style.top = `${randomY}px`;
}

function updateText() {
    let iterations = 0;
    const randomInterval = setInterval(() => {
        resultTextElement.textContent = generateRandomString(originalText.length);

        setTimeout(() => {
            resultTextElement.textContent = randomizeSubstring(originalText);
        }, 300);

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
            const currentText = resultTextElement.textContent;
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
            resultTextElement.textContent = replaceText + generateRandomString(originalText.length - replaceText.length);
            // Transition to main content after animation
            setTimeout(showMainContent, 1000); // Adjust delay as needed
        }
    }
    updateCharacter();
}

function showSplashScreen() {
    document.getElementById('splash-screen').style.display = 'flex';
    randomizePosition(resultTextElement); // Randomize position on first load
    updateText(); // Start text animation
}

function showMainContent() {
    const splashScreen = document.getElementById('splash-screen');
    const mainContent = document.getElementById('main-content');
    
    splashScreen.classList.add('hidden'); // Add hidden class to fade out splash screen

    // Wait for fade out to complete before showing main content
    setTimeout(() => {
        mainContent.style.display = 'block'; // Show main content
        mainContent.classList.add('visible'); // Add visible class to fade in main content
    }, 1000); // Ensure this matches the duration of the splash screen fade-out
}

// Initialize the splash screen
showSplashScreen();