<?php
// if the user has hit submit
if(isset($_POST['mysubmit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $newsletter = $_POST['newsletter'];
    $comments = $_POST['comments'];
    $website = $_POST['website'];
    
    //assume everything is ok
    $valid = 0;

    // Username validation
    if((strlen($username) < 3 || (strlen($username > 20)) )){
        $valueUsermessage = 'Please enter a username more than 3 and less than 20 characters!';
        $valid = 0;
    }

    //email Address
    if($email !=''){
        // removes any unwanted characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // check the email format
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $valueEmailmessage = "please fill in a correct email adderess";
            $valid = 0;
        }
    }

    else{
        $valueEmailmessage = 'Please fill in an email address';
        $valid = 0;

    }

    // Password
    if((strlen($password) < 3 || (strlen($password > 20)) )){
        $valuePassmessage = 'Please enter a password more than 3 and less than 20 characters!';
        $valid = 0;
    }

    //Address
     if($address != ''){
        if((strlen($address) < 3 || (strlen($address > 20)) )){
            $valueAddressmessage = 'Please enter a address with more than 3 and less than 20 characters!';
            $valid = 0;
        }
    }
    else{
        $valueAddressmessage = '';
    }

    // City
    if($city != ''){
        if((strlen($city) < 3 || (strlen($city > 20)) )){
            $valueCitymessage = 'Please enter a city more than 3 and less than 20 characters!';
            $valid = 0;
        }
    }

    // province validation
    if($province == ""){       
        $valid = 0;
    }

    // comments
    if($comments){
        if((strlen($comments) < 3) || (strlen($comments) > 100) ){
            $valueCommentmessage = 'Please enter a comment more than 3 and less than 100 characters!';
            $valid = 0;
        }
    }
    else{
        $valueCommentmessage = '';  
    }


    // website
    if($website){
        // removes any unwanted characters from website
        $website = filter_var($website, FILTER_SANITIZE_URL);

        // check the email format
        if(!filter_var($website, FILTER_VALIDATE_URL)){
            $valueWebsitemessage = "please fill in a correct website address";
            $valid = 0;
        }
    }

    else{
        $valueWebsitemessage = "please fill in a website ";
    }


    //country
    if($country == ""){
        $valueCountryMessage = "please select a country";
        $valid = 0;
    }

    // success message
    if($valid = 1){
        $valueSuccessMessage = "SUCCESS !";
    }

    else{
        $valueSuccessMessage = "";
    }

}
?>

<html>
<head>
    <title>PHP lab3 validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="p-4 mt-4">

    <h1>Form Validation</h1>
    <form name='myform' method='post' class="row">
    <div class="col-lg-6">
        <p>*Username</p>
        <input  type='text' name='username' value='<?php echo $username ?>' class="form-control">
        <div class="alert alert-danger p-0 border-0"><?php echo $valueUsermessage;?></div>
        <p class="mt-4">*Email</p>
        <input type='text' name='email' value='<?php echo $email ?>' class="form-control">   
        <div class="alert alert-danger p-0 border-0"><?php echo $valueEmailmessage;?></div>   
        <p class="mt-4">*Password</p>
        <input type='text' name='password' value='<?php echo $password ?>' class="form-control">     
        <div class="alert alert-danger p-0 border-0"><?php echo $valuePassmessage;?></div>    
        <p class="mt-4">Address</p>
        <input type='text' name='address' value='<?php echo $address ?>' class="form-control">  
        <div class="alert alert-danger p-0 border-0"><?php echo $valueAddressmessage;?></div>     
        <p class="mt-4">City</p>
        <input type='text' name='city' value='<?php echo $city ?>' class="form-control">
        <div class="alert alert-danger p-0 border-0"><?php echo $valueCitymessage;?></div> 
    </div>
    <div class="col-lg-6">
    <p class="mt-4">Province</p>
        <select name="province" class="form-control" id="">
            <option value="">please select an option</option>
            <option value="ab" <?php if (isset($province) && ($province == 'ab')) echo "selected";?>>Alberta</option>
            <option value="bc" <?php if (isset($province) && ($province == 'bc')) echo "selected";?>>BC</option>
            <option value="on" <?php if (isset($province) && ($province == 'on')) echo "selected";?>>Ontario</option>
            <option value="mn" <?php if (isset($province) && ($province == 'mn')) echo "selected";?>>Manitoba</option>
            <option value="sk" <?php if (isset($province) && ($province == 'sk')) echo "selected";?>>Saskatchewan</option>
            <option value="qc" <?php if (isset($province) && ($province == 'qc')) echo "selected";?>>Quebec</option>
            <option value="nl" <?php if (isset($province) && ($province == 'nl')) echo "selected";?>>Newfoundland</option>
            <option value="nb" <?php if (isset($province) && ($province == 'nb')) echo "selected";?>>New Brunswick</option>
            <option value="nv" <?php if (isset($province) && ($province == 'nv')) echo "selected";?>>Nova Scotia</option>
            <option value="pei" <?php if (isset($province) && ($province == 'pei')) echo "selected";?>>PEI</option>
        </select>
        <div class="alert alert-danger p-0 border-0"><?php echo $valueProvMessage;?></div>

        <p class="mt-4">*Country</p>
        <select name="country" class="form-control" id="">
            <option value="">please select an option</option>
            <option value="ca" <?php if (isset($country) && ($country == 'ca')) echo "selected";?>>Canada</option>
            <option value="usa" <?php if (isset($country) && ($country == 'usa')) echo "selected";?>>USA</option>
            <option value="fr" <?php if (isset($country) && ($country == 'fr')) echo "selected";?>>France</option>
            <option value="au" <?php if (isset($country) && ($country == 'au')) echo "selected";?>>Australia</option>
            <option value="tw" <?php if (isset($country) && ($country == 'tw')) echo "selected";?>>Taiwan</option>          
        </select>
        <div class="alert alert-danger p-0 border-0"><?php echo $valueCountryMessage;?></div>        

        <p class="mt-4">Gender</p>
        <div>Male<input class="form-control" type="radio" name="gender" value="male" <?php if (isset($gender) && ($gender == 'male')) echo "checked";?>></div>
        <div> Female<input class="form-control" type="radio" name="gender" value="female" <?php if (isset($gender) && ($gender == 'female')) echo "checked";?>></div>

        <p class="mt-4">Subscribe to Newsletter</p>
        <input class="form-control" type="checkbox" name="newsletter" value="1" <?php if (isset($newsletter) && ($newsletter == '1')) echo "checked";?>>

        <p class="mt-4">*Website Url</p>
        <input type='text' name='website' value='<?php echo $website ?>' class="form-control">
        <div class="alert alert-danger p-0 border-0"><?php echo $valueWebsitemessage;?></div>

        <p class="mt-4">Comments</p>
        <textarea class="form-control mb-4" name="comments" cols="30" rows="10"><?php echo $comments ?></textarea>
        <div class="alert alert-danger p-0 border-0"><?php echo $valueCommentmessage;?></div> 

        <input  type="submit" name="mysubmit" class="btn btn-primary" value="submit">
        <div class="alert alert-primary p-0 border-0 w-25"><?php echo $valueSuccessMessage; ?></div>
    </div>
  
    </form>
     
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>