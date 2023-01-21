<?php
// Include the database configuration file  
require_once 'dbConfig.php';
require_once 'mailer.php';
require_once 'emailTemplate.php';

$pB_Placement = false;
$pB_Reference1 = false;
$pB_Reference2 = false;
$pB_Reference3 = false;
$pB_success = false;

$name = $_POST["FirstName"] . " " . $_POST["LastName"];
$email = $_POST["exampleInputEmail1"];
$phone_number = $_POST["PhoneNumber"];
$placement = $_POST["Placement"];
$coverup = $_POST["CoverUp"];
$tattoo_size = $_POST["TattooSize"];
$style = $_POST["Style"];
$color = $_POST["Color"];
$description = $_POST["Description"];
$font = $_POST["Font"];
$preferred_days = $_POST["PreferedDays"];
$preferred_time = $_POST["PreferedTime"];
$specific_date = $_POST["SpecificDate"];
$comments = $_POST["Inquiries"];
$previous_client = $_POST["TattooedBefore"];

//silence warning reports if only one image is being uploaded
error_reporting(E_ERROR | E_PARSE);

//insert form data into database
$insert = $db->query("INSERT into formsubmission (name,email,phone_number,placement,coverup,tattoo_size,style,color,description,font,preferred_days,preferred_time,specific_date,comments,previous_client) 
VALUES ('$name','$email','$phone_number','$placement','$coverup','$tattoo_size','$style','$color','$description','$font','$preferred_days','$preferred_time','$specific_date','$comments','$previous_client')");

if ($insert) {
    $status = 'success';
    $statusMsg = "Form Submitted Succesfully successfully.";
    $pB_success = true;
} else {
    $statusMsg = "Submission failed, please try again.";
}


// If file upload form is submitted 
$status = $statusMsg = '';
if (isset($_POST["submit"])) {
    $status = 'error';

    if (!empty($_FILES["image"]["name"])) {
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $mail->AddAttachment($_FILES['image']['tmp_name'], $_FILES['image']['name']);
            $mail->addEmbeddedImage($_FILES['image']['tmp_name'], "placementImage");
            $pB_Placement = true;
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    }

    if (!empty($_FILES["reference1"]["name"])) {
        // Get file info 
        $fileName = basename($_FILES["reference1"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['reference1']['tmp_name'];
            $reference1 = addslashes(file_get_contents($image));
            $mail->AddAttachment($_FILES['reference1']['tmp_name'], $_FILES['reference1']['name']);
            $mail->addEmbeddedImage($_FILES['reference1']['tmp_name'], "referenceImage1");
            $pB_Reference1 = true;
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    }

    if (!empty($_FILES["reference2"]["name"])) {
        // Get file info 
        $fileName = basename($_FILES["reference2"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['reference2']['tmp_name'];
            $reference2 = addslashes(file_get_contents($image));
            $mail->AddAttachment($_FILES['reference2']['tmp_name'], $_FILES['reference2']['name']);
            $mail->addEmbeddedImage($_FILES['reference2']['tmp_name'], "referenceImage2");
            $pB_Reference2 = true;
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    }

    if (!empty($_FILES["reference3"]["name"])) {
        // Get file info 
        $fileName = basename($_FILES["reference3"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['reference3']['tmp_name'];
            $reference3 = addslashes(file_get_contents($image));
            $mail->AddAttachment($_FILES['reference3']['tmp_name'], $_FILES['reference3']['name']);
            $mail->addEmbeddedImage($_FILES['reference3']['tmp_name'], "referenceImage3");
            $pB_Reference3 = true;
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    }

    if ($pB_Placement == true || $pB_Reference1 == true || $pB_Reference2 == true || $pB_Reference3 == true) {
        //set ID for foreign key check
        $id = $db->query("SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'u337732309_TattooInquires' AND   TABLE_NAME   = 'formsubmission'");
        $id = $id->fetch_assoc();
        $id = $id["AUTO_INCREMENT"];
        $id -= 1;
        if ($id == 0)
            $id = 1;
        // Insert image content into database 
        $insert = $db->query("INSERT into images (id, placement, reference1, reference2, reference3, created) VALUES ('$id','$imgContent', '$reference1', '$reference2', '$reference3', NOW())");

        if ($insert) {
            $status = 'success';
            $statusMsg = "Form Submitted successfully.";
            $pB_success = true;
        } else {
            $statusMsg = "File upload failed, please try again.";
        }
    }
}

if($pB_success == true){
///change this to form data 
$mail->Subject = $name." has submitted a tattoo inquiry";
$mail->Body = MailTemplate($name, $email, $phone_number, $placement, $coverup, $tattoo_size, $style, $color, $description, $font, $preferred_days, $preferred_time, $specific_date, $comments, $previous_client);
$mail->IsHTML(true);
$mail->send();
}

// Display status message 
echo $statusMsg;
?>