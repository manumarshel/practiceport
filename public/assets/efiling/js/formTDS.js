document.addEventListener('DOMContentLoaded', function() {
    // Get the select element
    const selectForm = document.getElementById('form_type');
  
    // Add an event listener to the select element
    selectForm.addEventListener('change', function() {
      // Get the selected option value
      const selectedOption = selectForm.value;
  
      // Get all the sideContainer divs
      const sideContainers = document.querySelectorAll('.sideContainer');
  
      // Hide all sideContainer divs
      sideContainers.forEach(container => {
        container.style.display = 'none';
      });
  
      // Show the div with the corresponding id
      const selectedContainer = document.getElementById(selectedOption);
      if (selectedContainer) {
        selectedContainer.style.display = 'block';
      }
    });
  });
  
  document.addEventListener('DOMContentLoaded', function() {
    const regularRadio = document.getElementById('Regular');
    const correctionRadio = document.getElementById('Correction');
    const correctionDiv = document.getElementById('correctionDiv');

    // Add an event listener to the Regular radio button
    regularRadio.addEventListener('change', function() {
      // Hide the correctionDiv if it's visible
      correctionDiv.style.display = 'none';
    });

    // Add an event listener to the Correction radio button
    correctionRadio.addEventListener('change', function() {
      // Show or hide the correctionDiv based on the selected value
      correctionDiv.style.display = correctionRadio.checked ? 'flex' : 'none';
    });
  });

  document.getElementById("instructionScreen").onclick = function () {
    location.href = "TaxFormInstructionScreen.html";
};

document.getElementById("eVerify").onclick = function () {
  location.href = "TDSUploadPage.html";
};

