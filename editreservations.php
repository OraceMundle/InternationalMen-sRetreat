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
        $email = $_POST['exampleInputEmail1'];
        $contact = $_POST['phone'];
        $churchposition = $_POST['churchposition']; 
    

        //Call Crud function
        $result = $crud->editAttendee($fname,$lname,$dob,$homeAddress,$email,$contact,$firsttimeattend,
        $churchposition,$churchname,$country,$yearsofservice,$paymentoption,$destination);


        //Redirect to viewrecords.php
        if($result){
            header("Location: viewrecords.php");
        }else{
            //echo 'error';
            include ' includes/errormessage.php';
            header("Location: viewrecords.php");

        } 
    


    }else {
        //echo 'error';
        include ' includes/errormessage.php';
    }




?>