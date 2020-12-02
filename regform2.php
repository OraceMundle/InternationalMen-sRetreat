<?php 

$title = "Registration Form 2";
require_once 'includes/header.php'; 

?>


 <h1><?php echo $title ?></h1> 

 <h1 class="text-center">Registration for IT Conference</h1>

<!--<form method="get" action="success.php">  Snippet of code uses the get action method -->
<!-- form utilizing the post method -->    
<form method="post" action="success.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname" aria-describedby="text">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label for="lasttname">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname" aria-describedby="textHelp">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob" aria-describedby="dateHelp">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label> 
        <input required type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <small id="phoneHelp" name="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
    </div>
    <br/>
    <div class="custom-file">
        <input type="file" accept="image/*" class="custom-file-input" id ="avatar" name="avatar">
        <label class="custom-file-label" for="avatar">Choose File</label>
        <small id="avatar" class="form-text text-danger">File Upload (Optional)</small>
        
    </div>
   
    <br/>
    <br/>
    <br/>
    <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
</form>

<br/>
<br/>
<br/>
<br/>





 <?php 


require_once 'includes/footer.php'; 

?>



