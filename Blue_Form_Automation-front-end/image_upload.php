<?php
require_once 'connection.php'; 
session_start();
$user = $_SESSION['user_name'];

 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    $reason=$_POST["reason"];
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','pdf'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
           
            $imgContent = addslashes(file_get_contents($image)); 
           
        
         
            // Insert image content into database 
            $insert = $con->query("INSERT into images (image, created,reg_no,reason) VALUES ('$imgContent', NOW(),'$user','$reason')"); 
             
            if($insert){ 
                $status = 'success'; 
                header('Location: student_dashboard.php'); 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>