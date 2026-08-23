document.addEventListener('DOMContentLoaded', function() {
    const inputFields = document.querySelectorAll('input[type="password"], input[type="text"]');
  
    inputFields.forEach(inputField => {
      inputField.addEventListener('input', function() {
        // Check if the input field has content
        if (inputField.value.trim() !== '') {
          // Add the 'buttonSuccess' class to the button
          applyButtonSuccess();
        } else {
          // Remove the 'buttonSuccess' class if the input is empty
          removeButtonSuccess();
        }
      });
    });
  
    function applyButtonSuccess() {
      const myButton = document.getElementById('continueButton');
      myButton.classList.add('buttonSuccess');
    }
  
    function removeButtonSuccess() {
      const myButton = document.getElementById('continueButton');
      myButton.classList.remove('buttonSuccess');
    }

  });



  