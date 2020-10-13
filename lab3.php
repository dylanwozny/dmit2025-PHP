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

// Username validation
if((strlen($username) > 3 || (strlen($username > 20)) )){
    $valueUsermessage = 'Please enter a username more than 3 and less than 20 !';
}
?>

<html>
<head>
    <title>PHP lab3 validation</title>
    <link rel="stylesheet" href="">
</head>
<body>

    <h1>Form Validation</h1>
    <form name='myform' method='post'>
    <div>
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
    <div>
    </div>

    
    </form>
</body>
</html>