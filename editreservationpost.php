<?php

    require_once 'db/conn.php';

        //Get values from post operation
        //checking to see if 
    if(isset($_POST['submit'])){
        //extracting values from the $_POST array
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $homeAddress = $_POST['homeAddress'];
        $email = $_POST['exampleInputEmail1'];
        $contact = $_POST['phone'];
        $firsttimeattend = $_POST['inlineRadioOptions'];
        $churchposition = $_POST['churchposition']; 
        $churchname = $_POST['churchname'];
        $country = $_POST['country'];
        $yearsofservice = $_POST['yearsofservice'];
        $paymentoption = $_POST['inlineRadioOptions2'];
        $destination = $_POST['avatar'];
    

        //Call Crud function
        $result = $crud->editAttendee($id,$fname,$lname,$dob,$homeAddress,$email,$contact,$firsttimeattend,
        $churchposition,$churchname,$country,$yearsofservice,$paymentoption,$destination);


        //Redirect to viewrecords.php
        if($result){
            header("Location: viewreservation.php");
        }else{
            //echo 'error';
            include ' includes/errormessage.php';
            header("Location: viewreservation.php");

        } 
    


    }else {
        //echo 'error';
        include ' includes/errormessage.php';
    }




?>