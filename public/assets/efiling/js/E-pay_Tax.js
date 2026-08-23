document.addEventListener('DOMContentLoaded', function() {
  const navigationList = document.getElementById('navigationList');
  const contentDivs = document.querySelectorAll('.contentDiv');

  // Function to toggle visibility and update selected class
  function handleOptionClick(selectedOption) {
      const targetDivId = selectedOption.getAttribute('data-target');

      // Toggle visibility of contentDivs based on the selected option
      contentDivs.forEach(div => {
          div.style.display = div.id === targetDivId ? 'block' : 'none';
      });

      // Add or remove the titleSelected class based on the selected option
      navigationList.querySelectorAll('li').forEach(li => {
          li.classList.remove('titleSelected');
      });
      selectedOption.classList.add('titleSelected');
  }

  // Add click event listener to the navigationList
  navigationList.addEventListener('click', function(event) {
      // Check if the clicked element is a child of navigationList
      if (event.target.closest('#navigationList li')) {
          const selectedOption = event.target.closest('#navigationList li');
          handleOptionClick(selectedOption);
      }
  });

  // Trigger click event on "Saved Draft" to set it as selected by default
  const savedDraftOption = document.querySelector('[data-target="savedDraftDiv"]');
  handleOptionClick(savedDraftOption);

  // Add click event listeners for "Edit" and "Delete" buttons inside savedDraftDiv
  const savedDraftDiv = document.getElementById('savedDraftDiv');
//   savedDraftDiv.addEventListener('click', function(event) {
//       const clickedButton = event.target;

//       // Check if the clicked element is an "Edit" or "Delete" button
//       if (clickedButton.id === 'editButton') {
//           // Prevent the default behavior (e.g., link navigation) for the "Edit" button
//           event.preventDefault();

//           // Handle edit action as needed
//           location.href = "E-pay_Tax_NewPayment_Page2.html";
//       } else if (clickedButton.id === 'deleteButton') {
//           // Prevent the default behavior (e.g., form submission) for the "Delete" button
//           event.preventDefault();

//           // Handle delete action as needed
//           console.log('Delete button clicked');
//       }
//   });
});

const paymentHistoryDiv = document.getElementById('paymentHistoryDiv');
  paymentHistoryDiv.addEventListener('click', function(event) {
      const clickedButton = event.target;

      // Check if the clicked element is an "Edit" or "Delete" button
      if (clickedButton.id === 'download') {
          // Prevent the default behavior (e.g., link navigation) for the "Edit" button
          event.preventDefault();

          // Handle edit action as needed
          window.open("recepit.html", "_blank");

      } else if (clickedButton.id === 'delete') {
          // Prevent the default behavior (e.g., form submission) for the "Delete" button
          event.preventDefault();
      } else if (clickedButton.id === 'viewDetails') {
        // Prevent the default behavior (e.g., form submission) for the "Delete" button
        event.preventDefault();
    }
  });


//   document.getElementById("goDashboard").onclick = function () {
//     location.href = "Dashboard.html";
//   };

//   document.getElementById("newPayment").onclick = function () {
//     location.href = "e-pay_Tax_NewPayment.html";
//   };


  