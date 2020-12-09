<?php 
require_once 'includes/session.php';

$title = "Review Registration Form 1";
require_once 'includes/header.php'; 
require_once 'db/conn.php';
require_once 'sendemail.php';

    

    
    //checking to see if 
    if(isset($_POST['submit'])){
        //extracting values from the $_POST array
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $dob=$_POST['dob'];
        $homeAddress=$_POST['homeAddress'];
        $email=$_POST['exampleInputEmail1'];
        $contact=$_POST['phone'];
        $firsttimeattend=$_POST['inlineRadioOptions'];
        $churchposition=$_POST['churchposition'];
        $churchname=$_POST['churchname'];
        $country=$_POST['country'];
        $yearsofservice=$_POST['yearsofservice'];
        $paymentoption=$_POST['inlineRadioOptions2'];


        //upload file code path
        
              
        
        $orig_file=$_FILES["avatar"]["tmp_name"];
        $ext=pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir='uploads/';
        $destination="$target_dir$contact.$ext";
        //$destination = $target_dir . basename($_FILES["avatar"]["name"]);
        move_uploaded_file($orig_file,$destination);
       
        //Call function to insert and track if success or not
        $isSuccess=$crud->insertAttendee($firstname,$lastname,$dob,$homeAddress,$email,$contact,$firsttimeattend,
        $churchposition,$churchname,$country,$yearsofservice,$paymentoption,$destination);
        $chuchPostionName=$crud->getChurchPositionById($churchposition);
       
        if($isSuccess){

            //echo 'Registration Successful';
            //echo '<h1 class="text-center text-success">Registration Successful!!!</h1>';
            SendEmail::SendMail($email, 'Welcome' . ' ' . $firstname . ' ' . $lastname . ' ' . 'to International Men-s Retreat 2020', 'You have successfully registered for this year\'s Men-s Retreat ');
            include 'includes/successmessage.php';

         
            
        } else{

            //echo  '<h1 class="text-center text-danger">Registration unsuccessful</h1>';
            include 'includes/errormessage.php';
        }

    }


?>

<!--<h1><?php //echo $title ?></h1>-->

<h1 class="text-center font-weight-bold shadow p-3 mb-5 bg-white rounded">Review Registration Information</h1>

<!--<form method="get" action="success.php">  Snippet of code uses the get action method -->
<!-- form utilizing the post method -->
<form method="POST" action="success.php" enctype="multipart/form-data">

    <div class="card" style="width: 25rem;">
        <div class="card-body">
            <!--
            <h5 class="card-title"><?php echo  $_POST['firstname'] . ' ' . $_POST['lastname'];   ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['churchposition'];  ?></h6>
            -->
            <input type="hidden" id="firstname" name="firstname" value="<?php echo $_POST['firstname']; ?> ">
            <input type="hidden" id="lastname" name="lastname" value="<?php echo $_POST['lastname']; ?> ">
            <input type="hidden" id="dob" name="dob" value="<?php echo $_POST['dob']; ?> ">
            <input type="hidden" id="exampleInputEmail1" name="exampleInputEmail1"
                value="<?php echo $_POST['exampleInputEmail1']; ?> ">




            <p class="card-text">Firstname: <?php   echo $_POST['firstname']; ?> </p>
            <p class="card-text">Lastname: <?php   echo $_POST['lastname']; ?> </p>
            <p class="card-text">Date of Birth: <?php   echo $_POST['dob']; ?> </p>
            <p class="card-text">Home Address: <?php   echo $_POST['homeAddress']; ?> </p>
            <p class="card-text">Email Address: <?php   echo $_POST['exampleInputEmail1']; ?> </p>
            <p class="card-text">Phone Number: <?php    echo $_POST['phone']; ?> </p>
            <p class="card-text">First time attending International Men's Retreat:
                <?php    echo $_POST['inlineRadioOptions']; ?> </p>
            <p class="card-text">Church Position: <?php   echo $_POST['churchposition']; ?> </p>
            <p class="card-text">Church Name: <?php   echo $_POST['churchname']; ?> </p>
            <p class="card-text">Country: <?php   echo $_POST['country']; ?> </p>
            <p class="card-text">Years of Service: <?php   echo $_POST['yearsofservice']; ?> </p>
            <p class="card-text">Retreat Payment Option: <?php   echo $_POST['inlineRadioOptions2']; ?> </p>


        </div>
    </div>

    <br />
    <br />
    <br />

    <div class="text-center">
        <button type="submit" name="submit" class="btn btn-outline-primary ">Submit </button>
        <a href="regform1.php" class="btn btn-outline-primary">Back</a>
        <a href="index.php" class="btn btn-outline-primary">Home</a>
    </div>
</form>

<br />
<br />
<br />
<br />

<?php 
require_once 'includes/footer.php'; 
?>