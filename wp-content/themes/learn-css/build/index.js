// Get references to the image and button elements
const myImage = document.getElementById('myImage');
const myButton = document.getElementById('myButton');

// Add a click event listener to the button
myButton.addEventListener('click', () => {
  // Change the width and height properties of the image
  myImage.style.width = '500px';
  myImage.style.height = '300px';
});



