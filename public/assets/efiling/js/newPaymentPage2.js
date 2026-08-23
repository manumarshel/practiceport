function showPage(pageNumber) {
  // Hide all pages
  var pages = document.querySelectorAll('.pageContent');
  pages.forEach(function(page) {
    page.classList.remove('active');
  });

  // Show the selected page
  var selectedPage = document.getElementById('page' + pageNumber);
  selectedPage.classList.add('active');

  // Remove the 'selectedBtn' class from all buttons
  var buttons = document.querySelectorAll('.pageBtn');
  buttons.forEach(function(button) {
    button.classList.remove('selectedBtn');
  });

  // Add the 'selectedBtn' class to the clicked button
  var clickedButton = document.querySelector('.pageBtn:nth-child(' + pageNumber + ')');
  clickedButton.classList.add('selectedBtn');
}

// Show the default page (Page 1) when the page loads
window.onload = function() {
  showPage(1);
};

document.getElementById("newPaymentPage1").onclick = function () {
    location.href = "e-pay_Tax_NewPayment.html";
  };

  document.getElementById("continueBtn").onclick = function () {
    location.href = "e-pay_Tax_NewPayment_Page3.html";
  };

  document.addEventListener('DOMContentLoaded', function() {
    const radio = document.getElementById('dividend');
    const continueBtn = document.getElementById('continueBtn');

    // Add a change event listener to the radio button
    radio.addEventListener('change', function() {
        // Check if the radio button is selected
        if (radio.checked) {
            // If selected, change the style of continueBtn
            continueBtn.style.backgroundColor = '#2a3a8d'; // Change this to your desired style
            continueBtn.style.color = 'white'; // Change this to your desired style
        } else {
            // If unselected, revert the style of continueBtn
            continueBtn.style.backgroundColor = 'grey'; // Revert to the original style
            continueBtn.style.color = ''; // Revert to the original style
        }
    });
});

