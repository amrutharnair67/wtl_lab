function isFirstCharacterUpperCase(inputString) {
    // Check if the string is not empty
    if (inputString.length === 0) {
      return false;
    }
  
    // Get the first character of the string
    const firstCharacter = inputString[0];
  
    // Compare it with its uppercase version
    if (firstCharacter === firstCharacter.toUpperCase()) {
      return true; // The first character is uppercase
    } else {
      return false; // The first character is not uppercase
    }
  }
  
  // Test cases
  console.log(isFirstCharacterUpperCase("Hello")); // true
  console.log(isFirstCharacterUpperCase("world")); // false
  console.log(isFirstCharacterUpperCase("123"));   // false
  console.log(isFirstCharacterUpperCase(""));      // false (empty string)
  