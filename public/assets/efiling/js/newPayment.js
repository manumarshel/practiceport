document.addEventListener('DOMContentLoaded', function() {
    // Get the select element
    const selectForm = document.getElementById('year');
  
    // Add an event listener to the select element
    selectForm.addEventListener('change', function() {
      // Get the selected option value
      const selectedOption = selectForm.value;
  
      // Get all the sideContainer divs
      const sideContainers = document.querySelectorAll('.optionDetails');
  
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

  document.getElementById("epayTax").onclick = function () {
    location.href = "E-pay_Tax.html";
  };

  document.getElementById("proceedTDS").onclick = function () {
    location.href = "E-pay_Tax_NewPayment_Page2.html";
  };
