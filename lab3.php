<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$city = $_POST['city'];
$province = $_POST['province'];
$gender = $_POST['gender'];
$newsletter = $_POST['newsletter'];
$comments = $_POST['comments'];
$website = $_POST['website'];

// Username validation
if((strlen($username) > 3 || (strlen($username > 20)) )){
    $valueUsermessage = 'Please enter a username more than 3 and less than 20 !';
}
?>

<html>
<head>
    <title>PHP lab3 validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <h1>Form Validation</h1>
    <form name='myform' method='post' class="row">
    <div class="col-lg-6">
        <p>Username</p>
        <input type='text' name='username' value='<?php echo $username ?>' class="form-control">
        <p>Email</p>
        <input type='text' name='email' value='<?php echo $email ?>' class="form-control">       
        <p>Password</p>
        <input type='text' name='password' value='<?php echo $password ?>' class="form-control">       
        <p>Address</p>
        <input type='text' name='address' value='<?php echo $address ?>' class="form-control">       
        <p>City</p>
        <input type='text' name='city' value='<?php echo $city ?>' class="form-control">
    </div>
    <div class="col-lg-6">
    <p>Province</p>
        <select name="province" class="form-control" id="">
            <option value="">please select an option</option>
            <option value="ab">Alberta</option>
            <option value="bc">BC</option>
            <option value="on">Ontario</option>
            <option value="mn">Manitoba</option>
            <option value="sk">Saskatchewan</option>
            <option value="qc">Quebec</option>
            <option value="nl">Newfoundland</option>
            <option value="nb">New Brunswick</option>
            <option value="nv">Nova Scotia</option>
            <option value="pei">PEI</option>
        </select>
        <p>Gender</p>
        <input class="form-control" type="radio" name="gender" value="male">Male
        <input class="form-control" type="radio" name="gender" value="female">Female
        <input class="form-control" type="checkbox" name="newsletter" value="1">Subscribe to News Letter
        <p>Website Url</p>
        <input type='text' name='website' value='<?php echo $website ?>' class="form-control">
        <p>Comments</p>
        <textarea class="form-control" name="comments" cols="30" rows="10"><?php echo $comments ?></textarea>
        <input type="submit" name="mysubmit" class="btn-btn-primary" value="submit">
    </div>  
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>