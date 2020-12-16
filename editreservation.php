<br />
<br />
<br />
<br />


<?php 

    $title = 'Edit Record';
    require_once 'includes/header.php'; 
   // require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    $results = $crud->getChurchPosition();
    $results2 = $crud->getCountry();

    if(!isset($_GET['id'])){

        //echo 'error';
        include ' includes/errormessage.php';
        header("Location: viewrecords.php");

    }else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
       

?>


 <h1 class="text-center font-weight-bold shadow p-3 mb-5 bg-white rounded"><?php echo $title ?></h1> 

<!--<h1 class="text-center">Edit Record</h1>--> 

<!--<form method="get" action="success.php">  Snippet of code uses the get action method -->
<!-- form utilizing the post method -->
<form method="post" action="editreservationpost.php">
    <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname"
            name="firstname" aria-describedby="text">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label for="lasttname">Last Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname"
            name="lastname" aria-describedby="textHelp">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob"
            aria-describedby="dateHelp">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>

    <div class="form-group">
        <label for="homeAddress">Home Address</label>
        <input required type="text" class="form-control" value="<?php echo $attendee['homeaddress'] ?>" id="homeAddress"
            name="homeAddress" aria-describedby="homeAddresHelp">
        <small id="homeAddressHelp" class="form-text text-muted">We'll never share your address with anyone
            else.</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?>" id="exampleInputEmail1"
            name="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="phone" name="phone"
            aria-describedby="phoneHelp">
        <small id="phoneHelp" name="phoneHelp" class="form-text text-muted">We'll never share your phone number with
            anyone else.</small>
    </div>

    <div class="form-group ">
        <label for="yearsOfService">First time attending International Men's Retreat: </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Yes"
                <?php if($attendee['firsttimeattend']=="Yes"){echo "checked";} ?> />
            <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="No"
                <?php if($attendee['firsttimeattend']=="No"){echo "checked";} ?> />
            <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
    </div>

    <div class="form-group">
        <label for="churchposition">Church Position</label>

        <!-- insert drop down box selection -->
        <select class="form-control" id="churchposition" name="churchposition">
            <?php  while($r = $results->fetch(PDO::FETCH_ASSOC)) {    ?>

            <option value="<?php echo $r['churchposition_id'] ?>"
                <?php if($r['churchposition_id'] == $attendee['churchposition_id']) echo 'selected' ?>><?php 
                echo $r['churchposition_name']; ?>

            </option>

            <?php } ?>

            <!--
            <option value="1">Database Admin</option>
            <option>Software Developer</option>
            <option>Web Adminstrator</option>
            <option>Other</option>
            <option>5</option>-->
        </select>

        <!--<input type="text" class="form-control" id="speciality" aria-describedby="text">-->
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>

    <div class="form-group">
        <label for="churchname">Church Name</label>
        <input required type="text" class="form-control" value="<?php echo $attendee['churchname'] ?>" id="churchname"
            name="churchname" aria-describedby="text">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>

    <div class="form-group">
        <label for="country">Country</label>
        <select class="form-control" id="country" name="country">

            <?php  while($r = $results2->fetch(PDO::FETCH_ASSOC)) {    ?>

            <option value="<?php echo $r['country_id'] ?>"
                <?php if($r['country_id'] == $attendee['country_id']) echo 'selected' ?>><?php 
    echo $r['country_name']; ?>

            </option>

            <?php } ?>

            <!--

            <option value="<?php //echo $r['country'] ?>"></option>
            <option>United Kingdom</option>
            <option>United States of America</option>
            <option>Cayman Islands</option>

            -->
        </select>
        <!--<input required type="text" class="form-control" id="lastname" name="lastname" aria-describedby="textHelp">-->
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>

    <div class="form-group">
        <label for="yearsofservice">Years of Service</label>
        <input type="text" class="form-control" value="<?php echo $attendee['yearsofservice'] ?>" id="yearsofservice"
            name="yearsofservice" aria-describedby="yearsofserviceHelp">
    </div>

    <br />
    <div class="form-group ">
        <label for="paymentoptions">Retreat Fees Payment Options: </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1"
                <?php if($attendee['paymentoption']=="Regional Office"){echo "checked";} ?> value="Regional Office">
            <label class="form-check-label" for="inlineRadio1">Regional Office</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2"
                <?php if($attendee['paymentoption']=="Online"){echo "checked";} ?> value="Online">
            <label class="form-check-label" for="inlineRadio2">Online</label>
        </div>
    </div>

    <div class="custom-file">
        <input type="file" accept="image/*" class="custom-file-input" value="<?php echo $attendee['avatar_path'] ?>"
            id="avatar" name="avatar">
        <label class="custom-file-label" for="avatar">Choose File</label>
        <small id="avatar" class="form-text text-danger">File Upload (Optional)</small>
    </div>



    <!--
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    -->
    <br />
    <br />
    <br />
    <button type="submit" name="submit" class="btn btn-outline-success ">Save Changes</button>
    <a href="index.php" class="btn btn-outline-primary">Home</a>
    <a href="viewreservation.php" class="btn btn-outline-info">Back to Reservation</a>
</form>


<?php } ?>


<br />
<br />
<br />
<br />


<?php require_once 'includes/footer.php'; ?>