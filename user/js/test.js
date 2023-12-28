function areAllCharactersSame(inputString) {
    // Check if the string is empty or has only one character
    if (!inputString || inputString.length === 1) {
        return true;
    }

    // Compare each character with the first character
    const firstChar = inputString[0];
    for (let i = 1; i < inputString.length; i++) {
        if (inputString[i] !== firstChar) {
            return false;
        }
    }

    return true;
}

// Example usage:
const result1 = areAllCharactersSame("aabaa"); // true
const result2 = areAllCharactersSame("abcde"); // false
const result3 = areAllCharactersSame(""); // true (empty string)
const result4 = areAllCharactersSame("a"); // true (single character)

console.log(result1);
console.log(result2);
console.log(result3);
console.log(result4);
