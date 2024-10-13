function reverseNumber() {
    // Get the input value
    let number = document.getElementById('numberInput').value;

    // Reverse the number
    let reversedNumber = number.split('').reverse().join('');

    // Set the reversed number in the output field
    document.getElementById('output').innerText = reversedNumber;
}