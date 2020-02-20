<?php
if($_POST)
{
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$firstname=test_input($_POST['firstname']);
$lastname=test_input($_POST['lastname']);
$name1=$firstname." ".$lastname;
$username=test_input($_POST['username']);
$dob=test_input($_POST['date']);
$mobile_no=test_input($_POST['mobile_no']);
$email=test_input($_POST['email']);
$password=test_input($_POST['pass']);
$c_password=test_input($_POST['conf']);
$account=test_input($_POST['account']);
$adhar=test_input($_POST['adhar']);
$pan=test_input($_POST['pan']);
$servername="3.6.52.254:3306";
$s_username="shashank";
$s_password="root";
$dbname="realestate";
$s="1";
$check1=0;
$ping= new mysqli($servername,$s_username,$s_password,$dbname);
if(mysqli_connect_error())
{
    die("Connection Failed : " .mysqli_connect_error());
}
else
{
	$errors=array();
	$check="select * from registration where user_id='".$username."'";
	$result= mysqli_query($ping, $check);
	if(mysqli_num_rows($result)>=1)
    {
    	$errors['username']="Username already registered!!!";
    }
	$check="select * from registration where email='".$email."'";
	$result= mysqli_query($ping, $check);
	if(mysqli_num_rows($result)>=1)
    {
    	$errors['email']="Email is already registered!!!";
    }
	$check="select * from registration where adhar_card='".$adhar."'";
	$result= mysqli_query($ping, $check);
	if(mysqli_num_rows($result)>=1)
    {
    	$errors['adhar']="Invalid Aadhar Number!!!";
    }
	$check="select * from registration where pan_card='".$pan."'";
	$result= mysqli_query($ping, $check);
	if(mysqli_num_rows($result)>=1)
    {
    	$errors['pan']="Invalid Pan Card Number!!!";
        echo $check1;
    }

	if(count($errors)==0)
    {
    $insert="insert into registration(user_id,password,name,date_birth,mobile_no,email,type,adhar_card,pan_card) values('".$username."','".$password."','".$name1."','".$dob."','".$mobile_no."','".$email."','".$account."','".$adhar."','".$pan."')";
        $check1=1;
    $result= mysqli_query($ping, $insert);
	if($account=="Buyer")
    {
    	$insert="insert into buyer(user_id,password,email) values('".$username."','".$password."','".$email."')";	
    }
	else
    {
    	$insert="insert into seller(User_id,Password,Email,property_id) values('".$username."','".$password."','".$email."','".$s."')";
    }
    $result= mysqli_query($ping, $insert);
        echo $check1;
    }
}
mysqli_close($ping);
}
?>

<html>
    <head>
    <title>OPEN DOORS</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
    <script src="registration.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudfla=re.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="regstyle.css" title="Registration Page">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="icon" href="https://i.ibb.co/tHb1k2f/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body onload=<?php if(isset($check1)) if($check1==1) echo '"openForm()"'; ?>>
    <div class="mobile-container">
    <div class="navbar">
        <div class="c1">
            <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
            <i class="fa fa-bars"></i>
            </a>
        <ul id="myLinks">
            <button class="dropdownbtn" onclick="openForm()">Login&nbsp;<i class="fa fa-user"></i></button>
                    <button class="dropdownbtn" href="contact.html">Contact Us&nbsp;<i class="fa fa-fw fa-envelope"></i></button>
            <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdownbtn">What's Trending?&nbsp;&nbsp;<i class="fa fa-thumbs-o-up"></i></a>
                    <div class="dropdown-content1">
                            <a href="property.html">Property Gallery</a>
                            <a href="blog.html">Open Doors Blog</a>
                          </div>
                        </li>
            <button class="dropdownbtn">Home Loan&nbsp;<i class="fa fa-bank"></i></button>
            <button class="dropdownbtn" href="">Auction&nbsp;<i class="fa fa-gavel"></i></button>
            <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdownbtn">Properties&nbsp;&nbsp;<i class="fa fa-home"></i></a>
                    <div class="dropdown-content2">
                            <a href="sellerhome.php">Sell Property</a>
                            <a href="#">Buy Property</a>
                          </div>
            </li>
            </ul>
        </div> 
        <div class="logo">
             <a href="index.php"><img src="https://i.ibb.co/tHb1k2f/logo.png"></a>
        </div>
        <div class="search">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
    </div>
    <script>
        function myFunction1() 
        {
            var i=1;
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") 
            {
                x.style.display = "none";
            } 
            else 
            {
                x.style.display = "block";
            }
        }
        var slideIndex = 0;
    </script>
        <div class="page">
            <div class="border1"><pre class="text">Registration Form</pre></div>
            <div class="box">
                <form method="post" target="">
            <pre class="details">Name</pre>  
                    <input type="text" id="h" onfocusout="FirstName_Validation()" placeholder="First Name" name="firstname" required style="margin-top:-30px;margin-left:250px;background-color: transparent;color:black;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>"><label id="a8"></label>
                    <input type="text" id="i" onfocusout="LastName_Validation()" placeholder="Last Name" name="lastname" required style="margin-top:-30px;margin-left:550px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>"><label id="a9"></label>
            <pre class="details1">User Name</pre>
                    <input type="text" placeholder="User Name" 
                    required name="username" style="margin-top:-30px;margin-left:250px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
                    <label id="a13">
                        <?php if(isset($errors['username']))
                            {
                                echo $errors['username'];
                            }
                    ?></label>
             <pre class="details2">Date of Birth</pre>
                    <input type="text" id="g" onfocusout="DOB_Validation()" required name="date" placeholder="DD/MM/YYYY" style="margin-top:-30px;margin-left:250px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;" value="<?php if(isset($_POST['date'])) echo $_POST['date']; ?>"><label id="a7"></label>
             <pre class="details3">Mobile Number</pre>
                    <input type="text" id="a" onfocusout="Mobile_Validation()" required name="mobile_no" placeholder="+91 - 1234567890" style="margin-top:-30px;margin-left:250px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;" value="<?php if(isset($_POST['mobile_no'])) echo $_POST['mobile_no']; ?>"><label id="a1"></label>
              <pre class="details4">Email</pre>
                     <input type="text" id="b" onfocusout="Email_Validation()" required name="email" placeholder="abc@gmail.com" style="margin-top:-30px;margin-left:250px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"><label style="colour:red;" id="a10"><?php if(isset($errors['email']))
                            {
                                echo $errors['email'];
                            }
                    ?></label><label id="a2"></label>
                    
               <pre class="details5">Password</pre>
                    <input type="password" id="c" onkeyup="Password_Check()" required name="pass" placeholder="********" style="margin-top:-30px;margin-left:250px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;"><label id="a3"></label>
               <pre class="details6">Confirm Password</pre>
                     <input type="password" id="d" onfocusout="ConfirmPassword_Check()" required name="conf" placeholder="********" style="margin-top:-30px;margin-left:250px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;"><label id="a4"></label>
                    <br><br><br><fieldset style="border:1px solid black;width:120%;margin-left:-90px;">
                        <legend style="color:black;font-weight:bold;text-align:center;">Verification Details</legend>
                <pre class="details7">Account Type</pre>
                     <select name="account" required style="margin-top:-30px;margin-left:330px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;" >
                         <option>Seller</option>
                         <option selected="selected">Buyer</option>
                    </select>
                <pre class="details8">Aadhar Card</pre>
                     <input type="text" id="e" onfocusout="Aadhar_Validation()" required name="adhar" placeholder="0123 - 4567- 8901" style="margin-top:-30px;margin-left:330px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;" value="<?php if(isset($_POST['adhar'])) echo $_POST['adhar']; ?>"><label style="colour:red;" id="a11"><?php if(isset($errors['adhar']))
                            {
                                echo $errors['adhar'];
                            }
                    ?></label><label id="a5"></label>
                    
                <pre class="details9">Pan Card</pre>
                     <input type="text" id="f" onfocusout="Pan_Validation()" name="pan" placeholder="ABCD12345E" style="margin-top:-30px;margin-left:330px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;" value="<?php if(isset($_POST['pan'])) echo $_POST['pan']; ?>"><label style="colour:red;" id="a12"><?php if(isset($errors['pan']))
                            {
                                echo $errors['pan'];
                            }
                    ?></label><label id="a6"></label>
                    
                    <br><br>
                    </fieldset><br><br>
                <pre class="details10">I agree to the Terms and Conditions</pre>
                    <input type="checkbox" required style="width:20px;height:20px;margin-left:45px;margin-top:-20px;"><br><br>
                    <input type="submit" value="REGISTER" style="background-color:#B2B2B2;height:40px; width:150px; margin-left:740px; border-radius:3%;"  >
                    </form>
            </div>
        </div>
        <div class="glass" style="display: none"></div>
        <div class="form-popup" id="myForm">
           <form action="/action_page.php" class="form-container">
               <i class="fa fa-check-circle" style="font-size:50px;color:green;margin-left:30px;margin-top:15px;"></i>
<br>    
               <h3 style="margin-top:-43px;margin-left:40px;"><center>Registered Successfully!</center></h3>
           <input type="button" class="btn cancel" onclick="window.location.href='http://3.6.52.254/';" style="margin-left:110px;margin-top:18px;" value="Okay">
           </form>
        </div>
    </body>
</html>