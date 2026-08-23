<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Column Layout</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        
        .iframe-container {
            width: 75%;
            height: 100%;
            border-right: 1px solid #ccc;
        }
        
        .iframe-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .input-container {
            width: 25%;
            height: 100%;
            padding: 1rem;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
        }
        
        textarea {
            flex-grow: 1;
            padding: 0.5rem;
            margin-bottom: 1rem;
            resize: none;
        }
        
        button {
            padding: 0.75rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        
        button:hover {
            background-color: #45a049;
        }
        
        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }
            
            .iframe-container {
                width: 100%;
                height: 60%;
            }
            
            .input-container {
                width: 100%;
                height: 40%;
            }
        }
    </style>
</head>
<body>
    <?php 
    
    if(!empty($existingAnswer)){
        $notes=$existingAnswer['notes'];
    }else{
        $notes="";
    }
      ?>
    <div class="iframe-container">
        <iframe src="<?= $scormPath ?>"   style="border: none;"></iframe>
    </div>
  <form action="<?= base_url(); ?>/user/save_accounting" method="post" id="myForm" style="width:25%">
    <div class="input-container" style="width:100%">
        <textarea placeholder="Enter your notes here..."  name="notes" required> <?php echo $notes; ?></textarea>
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <input type="hidden" name="question_id" value="<?php echo $question_id; ?>">
        <button type="submit">Submit</button>
    </div>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $('#myForm').on('submit', function(e) {
    e.preventDefault(); // prevent default form submission

    $.ajax({
      url: '<?= base_url(); ?>/user/save_accounting', // adjust URL to your route
      method: 'POST',
      data: $(this).serialize(), // serialize form data
      success: function(response) {
        alert('Form submitted successfully!');
         
      },
      error: function(xhr, status, error) {
        alert('Error submitting form!');
        console.error(xhr.responseText);
      }
    });
  });
</script>
</html> 