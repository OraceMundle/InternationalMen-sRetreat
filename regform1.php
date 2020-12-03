<?php 
$title = "Registration Form 1";
require_once 'includes/header.php'; 
?>


<h1><?php echo $title ?></h1>

<h1 class="text-center font-weight-bold shadow p-3 mb-5 bg-white rounded">International Men's Retreat Registration</h1>

<!--<form method="get" action="success.php">  Snippet of code uses the get action method -->
<!-- form utilizing the post method -->
<form method="post" action="reviewregform.php" enctype="multipart/form-data">

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
        <label for="homeAddress">Home Address</label>
        <input required type="text" class="form-control" id="homeAddress" name="homeAddress"
            aria-describedby="homeAddresHelp">
        <small id="homeAddressHelp" class="form-text text-muted">We'll never share your address with anyone
            else.</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input required type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1"
            aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <small id="phoneHelp" name="phoneHelp" class="form-text text-muted">We'll never share your phone number with
            anyone else.</small>
    </div>

    <div class="form-group ">
        <label for="yearsOfService">First time attending International Men's Retreat: </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
    </div>
        

        <br />
        <br />
        <br />
        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-outline-primary ">Save </button> <span
                class="text-success">--></span>
            <a href="regform2.php" class="btn btn-outline-primary">Next</a>
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