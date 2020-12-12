<br />
<br />
<br />
<?php 
$title = "Registration Form 1";
require_once 'includes/header.php'; 
require_once 'db/conn.php';
//require_once 'includes/session.php';

$results = $crud->getChurchPosition();

?>


<h1><?php //echo $title ?></h1>


<h1 class="text-center font-weight-bold shadow p-3 mb-5 bg-white rounded">International Men's Retreat Registration</h1>

<!--<form method="get" action="success.php">  Snippet of code uses the get action method -->
<!-- form utilizing the post method -->
<form method="POST" action="reviewregform.php" enctype="multipart/form-data">

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
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Yes">
            <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="No">
            <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
    </div>

    <!-- Form 2 Test -->

    <div class="form-group">
        <label for="churchposition">Church Postion</label>
        <!-- insert drop down box selection -->
        <select class="form-control" id="churchposition" name="churchposition">
            
        <?php  while($r = $results->fetch(PDO::FETCH_ASSOC)) {    ?>
            <option value="<?php echo $r['churchposition_id'] ?>"><?php echo $r['name']; ?> </option>  
           <?php } ?>
        <!--
            <option value=1>Bishop</option>
            <option>Pastor</option>
            <option>Minister</option>
            <option>International Men's Dept. Worker</option>
            <option>National Men's Dept. Worker</option>
            <option>Local Men's Dept. Worker</option>
            <option>Member</option>
        --> 

        </select>
        <!--<input type="text" class="form-control" id="speciality" aria-describedby="text">-->
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>


    <div class="form-group">
        <label for="churchname">Church Name</label>
        <input required type="text" class="form-control" id="churchname" name="churchname" aria-describedby="text">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>

    <br />

    <div class="form-group">
        <label for="country">Country</label>
        <select class="form-control" id="country" name="country">
            <option>Jamaica</option>
            <option>United Kingdom</option>
            <option>United States of America</option>
            <option>Cayman Islands</option>
        </select>
        <!--<input required type="text" class="form-control" id="lastname" name="lastname" aria-describedby="textHelp">-->
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>

    <div class="form-group">
        <label for="yearsofservice">Years of Service</label>
        <input type="text" class="form-control" id="yearsofservice" name="yearsofservice"
            aria-describedby="yearsofserviceHelp">
    </div>

    <br />
    <div class="form-group ">
        <label for="paymentoptions">Retreat Fees Payment Options: </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1"
                value="Regional Office">
            <label class="form-check-label" for="inlineRadio1">Regional Office</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="Online">
            <label class="form-check-label" for="inlineRadio2">Online</label>
        </div>
    </div>

    <div class="custom-file">
        <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar">
        <label class="custom-file-label" for="avatar">Choose File</label>
        <small id="avatar" class="form-text text-danger">File Upload (Optional)</small>
    </div>


    <!-- end of form 2 Test -->

    <br />
    <br />
    <br />
    <div class="text-center">
        <button type="submit" name="submit" class="btn btn-outline-primary ">Save </button>
        <!--
            <span
            
            class="text-success"> </span>

            

            <a href="regform2.php" class="btn btn-outline-primary">Next</a>
-->
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