<?= $this->extend('admin/layouts/main2'); ?>
  <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
        }
        /* Progress bar styles */
        .progress-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            position: relative;
        }
        .progress-bar::before {
            content: "";
            position: absolute;
            top: 15px;
            left: 0;
            width: 100%;
            height: 3px;
            background: #e0e0e0;
            z-index: 1;
        }
        .progress-step {
            width: 33px;
            height: 33px;
            border-radius: 50%;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            position: relative;
            z-index: 2;
        }
        .progress-step.active {
            background: #4CAF50;
        }
        .progress-step.completed {
            background: #2E7D32;
        }
        /* Form step styles */
        .form-step {
            display: none;
        }
        .form-step.active {
            display: block;
            animation: fadeIn 0.5s;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        .required-label::after {
            content: " *";
            color: #f44336;
        }
        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #4CAF50;
            box-shadow: 0 0 0 2px rgba(76, 175, 80, 0.25);
        }
        .error-message {
            color: #f44336;
            font-size: 12px;
            margin-top: 5px;
            display: none;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        button {
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        .btn-prev {
            background: #f5f5f5;
            color: #333;
        }
        .btn-next, .btn-submit {
            background: #4CAF50;
            color: white;
        }
        .btn-prev:hover {
            background: #e0e0e0;
        }
        .btn-next:hover, .btn-submit:hover {
            background: #43A047;
        }
        /* Form success message */
        .form-success {
            text-align: center;
            display: none;
        }
        .form-success i {
            font-size: 60px;
            color: #4CAF50;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h1>Admin Form</h1>
            <p>Complete all steps to submit your information</p>
        </div>
        
        <!-- Progress Bar -->
        <div class="progress-bar">
            <div class="progress-step active" id="step-1">1</div>
            <div class="progress-step" id="step-2">2</div>
            <div class="progress-step" id="step-3">3</div>
            <div class="progress-step" id="step-4">4</div>
            <div class="progress-step" id="step-5">5</div>
            <div class="progress-step" id="step-6">6</div>
            <div class="progress-step" id="step-7">7</div>
        </div>
        
        <!-- Form -->
        <form id="multi-step-form">
            <!-- Step 1: Basic Information -->
            <div class="form-step active" id="form-step-1">
                <h2>Basic Information</h2>
                
                <div class="form-group">
                    <label for="fullName" class="required-label">Full Name</label>
                    <input type="text" id="fullName" name="fullName" required>
                    <div class="error-message">Please enter your full name</div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="required-label">Email Address</label>
                    <input type="email" id="email" name="email" required>
                    <div class="error-message">Please enter a valid email address</div>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                
                <div class="buttons">
                    <button type="button" class="btn-prev" disabled>Previous</button>
                    <button type="button" class="btn-next" id="step1Next">Next</button>
                </div>
            </div>
            
            <!-- Step 2: Company Details -->
            <div class="form-step" id="form-step-2">
                <h2>Company Details</h2>
                
                <div class="form-group">
                    <label for="companyName" class="required-label">Company Name</label>
                    <input type="text" id="companyName" name="companyName" required>
                    <div class="error-message">Please enter your company name</div>
                </div>
                
                <div class="form-group">
                    <label for="industry">Industry</label>
                    <select id="industry" name="industry">
                        <option value="">Select Industry</option>
                        <option value="technology">Technology</option>
                        <option value="finance">Finance</option>
                        <option value="healthcare">Healthcare</option>
                        <option value="education">Education</option>
                        <option value="retail">Retail</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="companySize">Company Size</label>
                    <select id="companySize" name="companySize">
                        <option value="">Select Size</option>
                        <option value="1-10">1-10 employees</option>
                        <option value="11-50">11-50 employees</option>
                        <option value="51-200">51-200 employees</option>
                        <option value="201-500">201-500 employees</option>
                        <option value="501+">501+ employees</option>
                    </select>
                </div>
                
                <div class="buttons">
                    <button type="button" class="btn-prev">Previous</button>
                    <button type="button" class="btn-next" id="step2Next">Next</button>
                </div>
            </div>
            
            <!-- Step 3: Address Information -->
            <div class="form-step" id="form-step-3">
                <h2>Address Information</h2>
                
                <div class="form-group">
                    <label for="address" class="required-label">Street Address</label>
                    <input type="text" id="address" name="address" required>
                    <div class="error-message">Please enter your street address</div>
                </div>
                
                <div class="form-group">
                    <label for="city" class="required-label">City</label>
                    <input type="text" id="city" name="city" required>
                    <div class="error-message">Please enter your city</div>
                </div>
                
                <div class="form-group">
                    <label for="state">State/Province</label>
                    <input type="text" id="state" name="state">
                </div>
                
                <div class="form-group">
                    <label for="zipCode">ZIP/Postal Code</label>
                    <input type="text" id="zipCode" name="zipCode">
                </div>
                
                <div class="buttons">
                    <button type="button" class="btn-prev">Previous</button>
                    <button type="button" class="btn-next" id="step3Next">Next</button>
                </div>
            </div>
            
            <!-- Step 4: Service Selection -->
            <div class="form-step" id="form-step-4">
                <h2>Service Selection</h2>
                
                <div class="form-group">
                    <label for="serviceType" class="required-label">Service Type</label>
                    <select id="serviceType" name="serviceType" required>
                        <option value="">Select Service</option>
                        <option value="basicPlan">Basic Plan</option>
                        <option value="standardPlan">Standard Plan</option>
                        <option value="premiumPlan">Premium Plan</option>
                        <option value="customPlan">Custom Plan</option>
                    </select>
                    <div class="error-message">Please select a service type</div>
                </div>
                
                <div class="form-group">
                    <label for="startDate">Preferred Start Date</label>
                    <input type="date" id="startDate" name="startDate">
                </div>
                
                <div class="form-group">
                    <label for="additionalServices">Additional Services</label>
                    <select id="additionalServices" name="additionalServices" multiple>
                        <option value="consulting">Consulting</option>
                        <option value="training">Training</option>
                        <option value="support">Premium Support</option>
                        <option value="maintenance">Maintenance</option>
                    </select>
                </div>
                
                <div class="buttons">
                    <button type="button" class="btn-prev">Previous</button>
                    <button type="button" class="btn-next" id="step4Next">Next</button>
                </div>
            </div>
            
            <!-- Step 5: Project Details -->
            <div class="form-step" id="form-step-5">
                <h2>Project Details</h2>
                
                <div class="form-group">
                    <label for="projectName">Project Name</label>
                    <input type="text" id="projectName" name="projectName">
                </div>
                
                <div class="form-group">
                    <label for="projectBudget">Budget Range</label>
                    <select id="projectBudget" name="projectBudget">
                        <option value="">Select Budget Range</option>
                        <option value="less5k">Less than $5,000</option>
                        <option value="5k-10k">$5,000 - $10,000</option>
                        <option value="10k-25k">$10,000 - $25,000</option>
                        <option value="25k-50k">$25,000 - $50,000</option>
                        <option value="50k+">$50,000+</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="projectDescription" class="required-label">Project Description</label>
                    <textarea id="projectDescription" name="projectDescription" rows="4" required></textarea>
                    <div class="error-message">Please provide a project description</div>
                </div>
                
                <div class="buttons">
                    <button type="button" class="btn-prev">Previous</button>
                    <button type="button" class="btn-next" id="step5Next">Next</button>
                </div>
            </div>
            
            <!-- Step 6: Technical Requirements -->
            <div class="form-step" id="form-step-6">
                <h2>Technical Requirements</h2>
                
                <div class="form-group">
                    <label for="operatingSystem">Operating System</label>
                    <select id="operatingSystem" name="operatingSystem">
                        <option value="">Select Operating System</option>
                        <option value="windows">Windows</option>
                        <option value="macos">macOS</option>
                        <option value="linux">Linux</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="database">Database Type</label>
                    <select id="database" name="database">
                        <option value="">Select Database</option>
                        <option value="mysql">MySQL</option>
                        <option value="postgresql">PostgreSQL</option>
                        <option value="mongodb">MongoDB</option>
                        <option value="sqlserver">SQL Server</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="techRequirements">Additional Requirements</label>
                    <textarea id="techRequirements" name="techRequirements" rows="4"></textarea>
                </div>
                
                <div class="buttons">
                    <button type="button" class="btn-prev">Previous</button>
                    <button type="button" class="btn-next" id="step6Next">Next</button>
                </div>
            </div>
            
            <!-- Step 7: Terms and Submission -->
            <div class="form-step" id="form-step-7">
                <h2>Terms and Submission</h2>
                
                <div class="form-group">
                    <label for="terms" class="required-label">
                        <input type="checkbox" id="terms" name="terms" required>
                        I agree to the terms and conditions
                    </label>
                    <div class="error-message">You must agree to the terms</div>
                </div>
                
                <div class="form-group">
                    <label for="newsletter">
                        <input type="checkbox" id="newsletter" name="newsletter">
                        Subscribe to newsletter
                    </label>
                </div>
                
                <div class="form-group">
                    <label for="comments">Additional Comments</label>
                    <textarea id="comments" name="comments" rows="4"></textarea>
                </div>
                
                <div class="buttons">
                    <button type="button" class="btn-prev">Previous</button>
                    <button type="submit" class="btn-submit">Submit</button>
                </div>
            </div>
        </form>
        
        <!-- Success Message -->
        <div class="form-success" id="form-success">
            <i>✓</i>
            <h2>Form Submitted Successfully!</h2>
            <p>Thank you for your submission. We will get back to you shortly.</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all form steps and progress indicators
            const formSteps = document.querySelectorAll('.form-step');
            const progressSteps = document.querySelectorAll('.progress-step');
            const prevButtons = document.querySelectorAll('.btn-prev');
            const nextButtons = document.querySelectorAll('.btn-next');
            const form = document.getElementById('multi-step-form');
            const formSuccess = document.getElementById('form-success');
            
            let currentStep = 1;
            const totalSteps = formSteps.length;
            
            // Initialize
            updateProgressBar();
            
            // Add event listeners for next buttons
            nextButtons.forEach(button => {
                button.addEventListener('click', () => {
                    if (validateStep(currentStep)) {
                        goToNextStep();
                    }
                });
            });
            
            // Add event listeners for previous buttons
            prevButtons.forEach(button => {
                button.addEventListener('click', () => {
                    goToPrevStep();
                });
            });
            
            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (validateStep(currentStep)) {
                    // In a real application, you would send the form data to your server here
                    console.log('Form submitted successfully!');
                    
                    // Show success message
                    form.style.display = 'none';
                    formSuccess.style.display = 'block';
                    
                    // You could also collect and submit all form data here
                    const formData = new FormData(form);
                    let formValues = {};
                    
                    for (let [key, value] of formData.entries()) {
                        formValues[key] = value;
                    }
                    
                    console.log('Form Data:', formValues);
                    
                    // In a real application, you would send this data to your server
                    // fetch('/api/submit-form', {
                    //     method: 'POST',
                    //     headers: {
                    //         'Content-Type': 'application/json',
                    //     },
                    //     body: JSON.stringify(formValues),
                    // })
                    // .then(response => response.json())
                    // .then(data => {
                    //     console.log('Success:', data);
                    // })
                    // .catch((error) => {
                    //     console.error('Error:', error);
                    // });
                }
            });
            
            // Validate current step
            function validateStep(step) {
                const currentFormStep = document.getElementById(`form-step-${step}`);
                const requiredFields = currentFormStep.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    resetFieldError(field);
                    
                    if (field.type === 'checkbox' && !field.checked) {
                        showFieldError(field);
                        isValid = false;
                    } else if (field.value.trim() === '') {
                        showFieldError(field);
                        isValid = false;
                    } else if (field.type === 'email' && !isValidEmail(field.value)) {
                        showFieldError(field);
                        isValid = false;
                    }
                });
                
                return isValid;
            }
            
            // Show field error
            function showFieldError(field) {
                const formGroup = field.closest('.form-group');
                const errorMessage = formGroup.querySelector('.error-message');
                
                if (errorMessage) {
                    errorMessage.style.display = 'block';
                }
                
                field.classList.add('error');
            }
            
            // Reset field error
            function resetFieldError(field) {
                const formGroup = field.closest('.form-group');
                const errorMessage = formGroup.querySelector('.error-message');
                
                if (errorMessage) {
                    errorMessage.style.display = 'none';
                }
                
                field.classList.remove('error');
            }
            
            // Validate email format
            function isValidEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }
            
            // Go to next step
            function goToNextStep() {
                if (currentStep < totalSteps) {
                    // Hide current step
                    formSteps[currentStep - 1].classList.remove('active');
                    
                    // Increment step counter
                    currentStep++;
                    
                    // Show next step
                    formSteps[currentStep - 1].classList.add('active');
                    
                    // Update progress bar
                    updateProgressBar();
                }
            }
            
            // Go to previous step
            function goToPrevStep() {
                if (currentStep > 1) {
                    // Hide current step
                    formSteps[currentStep - 1].classList.remove('active');
                    
                    // Decrement step counter
                    currentStep--;
                    
                    // Show previous step
                    formSteps[currentStep - 1].classList.add('active');
                    
                    // Update progress bar
                    updateProgressBar();
                }
            }
            
            // Update progress bar
            function updateProgressBar() {
                progressSteps.forEach((step, index) => {
                    // Reset all steps
                    step.classList.remove('active', 'completed');
                    
                    // Mark completed steps
                    if (index + 1 < currentStep) {
                        step.classList.add('completed');
                    } 
                    // Mark current step
                    else if (index + 1 === currentStep) {
                        step.classList.add('active');
                    }
                });
                
                // Disable previous button on first step
                if (currentStep === 1) {
                    prevButtons[0].disabled = true;
                } else {
                    prevButtons.forEach(button => {
                        button.disabled = false;
                    });
                }
            }
        });
    </script>
</body>

