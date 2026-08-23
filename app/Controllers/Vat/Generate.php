<?php

namespace App\Controllers\Pf;

use App\Controllers\BaseController;

class Generate extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        
       //$questionId = session('question_id');
    
        if ($this->request->getMethod() == 'post') {
            //print_r($_POST); exit;
            $data = [];

            $month = $_POST['ctl00$HomePageContent$CtrlDdlMcMonth'];

            $months = [
                1 => "Jan",
                2 => "Feb",
                3 => "Mar",
                4 => "Apr",
                5 => "May",
                6 => "Jun",
                7 => "Jul",
                8 => "Aug",
                9 => "Sep",
                10 => "Oct",
                11 => "Nov",
                12 => "Dec"
            ];

            $data['month'] = $months[(int)$month];
            $data['year'] = $_POST['ctl00$HomePageContent$CtrlDdlMcYear'];

            $data['type'] = $_POST['ctl00$HomePageContent$CtrlDdlMcType'];

            return view('esi/generate-challan/index', $data);
        }

        $data = [];

       return view('esi/generate-challan/index', $data);
    }
     public function payment()
    {
          $data = [];
        return view('esi/generate-challan/payment', $data);
    }
    
     public function setfile()
    {
           $filePath = FCPATH  . 'public/uploads/downl.txt'; // Adjust the path accordingly
        // Check if file exists
         $grossWage = 0;
         $epf_ee = 0;
         $epf_er = 0;
         $epf_c = 0;

        // Check if file exists
        if (file_exists($filePath)) {
            // Open the file in read mode
            $file = fopen($filePath, 'r');

            if ($file) {
                //for listing all
                //  while (($line = fgets($file)) !== false) {
                //     // Remove any newline characters from the line
                //     $line = trim($line);

                //     // Split the line by #~#
                //     $data = explode('#~#', $line);

                //     // Output or process the number data
                //     if (count($data) > 1) {
                //         // Print each number (you can modify this to process/store the data)
                //         foreach ($data as $index => $value) {
                //             if (is_numeric($value)) {
                //                 echo 'Number ' . ($index) . ': ' . $value . '<br>';
                //             }
                //         }
                //     }
                // }
               
                while (($line = fgets($file)) !== false) {
                   
                    $line = trim($line);

                  
                    $data = explode('#~#', $line);
 
                    if (isset($data[2]) && is_numeric($data[2])) { 
                        $grossWage += $data[2];
                    }
                    if (isset($data[6]) && is_numeric($data[6])) { 
                        $epf_ee += $data[6];
                    }
                    if (isset($data[8]) && is_numeric($data[6])) { 
                        $epf_er += $data[8];
                    }
                    if (isset($data[7]) && is_numeric($data[7])) { 
                        $epf_c += $data[7];
                    } 
                    
                   $total=$grossWage + $epf_ee +  $epf_er +  $epf_c + 1552;
                   $net_total =$total+ 1554;
                    
                } 

                // Close the file
                fclose($file);

                // Output the total sum
                echo 'Total Sum of First Values: ' . $grossWage;
                 echo 'Total Sum of First Values: ' . $epf_ee;
                 echo 'Total Sum of First Values: ' . $epf_er;
                 echo 'Total Sum of First Values: ' . $epf_c.'\n';
                 
                 echo 'Total Sum of First Values: ' . $total.'\n';
                 echo 'Total Sum of First Values: ' . $net_total.'\n';
            } else {
                echo 'Could not open the file!';
            }
        } else {
            echo 'File not found!';
        }
     
    }
    
     function convertTxtToCsv($filePath)
{
    $txtFilePath = $filePath; // Path of the uploaded .txt file
    $csvFilePath = FCPATH  . 'public/uploads/converted_file.csv';  // Destination path for CSV

    // Open the text file for reading
    $file = fopen($txtFilePath, 'r');
    
    // Open a new CSV file for writing
    $csvFile = fopen($csvFilePath, 'w');
    
    // Loop through the lines in the .txt file and write to CSV
    while (($line = fgets($file)) !== false) {
        // Process the line if needed (split by space or delimiter)
        $data = explode(" ", $line);  // Assuming space-delimited data

        // Write data to CSV file
        fputcsv($csvFile, $data);
    }

    // Close the files
    fclose($file);
    fclose($csvFile);

    echo "Conversion to CSV completed. CSV File: " . $csvFilePath;
}
}
