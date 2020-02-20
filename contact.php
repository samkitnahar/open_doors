<html>
    <head>
        <title>OPEN DOORS</title>
        <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="777735311199-78khcv16jei9h5n1uf483grir8cmh7aq.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>   
     <link rel="stylesheet" href="contact.css" title="Home Style">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
   <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body onload="check()">
    <?php include('login.php') ?>
<div class="mobile-container">
<div class="navbar">
    <div class="c1">
        <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
        <i class="fa fa-bars"></i>
        </a>
    <ul id="myLinks">
        <button class="dropdownbtn" onclick="openForm()" id="f1"><?php session_start(); if(isset($_SESSION))
                                                    { 
                                                        echo $_SESSION['user'];
                                                    }
                                                    else
                                                    {
                                                        echo "Login";
                                                    }
                                                    ?>&nbsp;<i class="fa fa-user"></i></button>
                <button class="dropdownbtn" href="contact.php">Contact Us&nbsp;<i class="fa fa-fw fa-envelope"></i></button>
        <li class="dropdown">
                <a href="javascript:void(0)" class="dropdownbtn">What's Trending?&nbsp;&nbsp;<i class="fa fa-thumbs-o-up"></i></a>
                <div class="dropdown-content1">
                        <a href="property.php">Property Gallery</a>
                        <a href="blog.php">Open Doors Blog</a>
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
    
 <div class="glass" style="display: none"></div>
<div class="form-popup" id="myForm">
  <form method="post"  target=""  class="form-container">
      <?php include 'login.php' ?>
       <input type="image" src="https://cdn3.iconfinder.com/data/icons/glyph/227/Cancel-512.png" alt="Cancel" class="btncancel" style="margin-left:350px;width:20px;height:20px;" onclick="closeForm()">

    <h1 style="text-align:center;margin-top:-10px;font-family:Baskerville Old Face,cursive;">Login</h1><br>
    <label for="username"><b style="font-size:18px;font-family:Baskerville Old Face,cursive; margin-left:5px;">Username</b></label>
    <input type="text" placeholder="Enter Username"                                   name="username" required style="background-color: transparent;color:black;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;"><br><br>

    <label for="psw"><b style="font-size:18px;font-family:Baskerville Old Face,cursive;margin-left:14px;">Password</b></label>
    <input type="password" id="s18" placeholder="Enter Password" name="psw" required style="background-color: transparent;color:black;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
      <br><input type="checkbox" name="show" style="width:12px;height:12px;margin-left:120px;margin-top:5px;" onclick="Toggle()">&emsp;<pre class="show1">Show Password</pre>
    <br><label id="st1"><?php if(isset($errors['password'])) echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$errors['password']."  " ?> </label><br><button type="submit" class="btn">Login</button>
      <br><pre class="new">New User?</pre>
      <br><pre class="register"><a href="register.php">Register Now!</a></pre>
      <br><pre class="or">OR</pre>
      <br><pre class="login_with">Login With...</pre>
      <br><input type="image" src="https://i.pinimg.com/originals/0d/3b/7a/0d3b7af79ad2b163f759eed5937cd764.png" alt="Facebook" style="height:60px;width:60px;margin-left:130px;margin-top:-15px;">
      <div class="g-signin2" data-onsuccess="onSignIn"></div>
      <input type="image" src="https://cdn2.iconfinder.com/data/icons/social-icons-circular-color/512/gmail-512.png" alt="Gmail" style="height:60px;width:60px;margin-left:210px;margin-top:-60px;">
  </form>
</div>   
  
<div class="title"><br><h2><center>Let's Get Together</center></h2>
    <hr size=3 color="black"></div>
<input type="text" placeholder="What should we call you?" style="width:300px;height:40px;border-radius:5px;margin-left:30px;margin-top:30px;">
<input type="text" placeholder="Where can we email you back?" style="width:300px;height:40px;border-radius:5px;margin-left:30px;"><br>
<input type="text" placeholder="&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;What's on your mind?" style="margin-top:10px;margin-left:30px;border-radius:5px;width:635px;height:300px;"><br>
<input type="submit" value="SEND" style="width:100px;height:100px;border-radius:60px;margin-left:300px;margin-top:-60px;background-color:#10577A;color:white;">
<div class="contact">
<br><br><br><p style="margin-left:150px;"><i class="fa fa-map-marker" style="font-size:30px;margin-top:7px;"></i>&ensp;&emsp;&emsp;99/C 1st Cross,<br>&emsp;&emsp;&emsp;&ensp;Evoma Borewell Road<br>&emsp;&emsp;&emsp;&ensp;Whitefield, Bangalore</p>    
<br><p style="margin-left:150px;"><i class="fa fa-at" style="font-size:30px"></i>&emsp;&emsp;opendoors@gmail.com</p> 
    <br><p style="margin-left:150px;"><i class="fa fa-phone" style="font-size:36px"></i>&emsp;&emsp;+91-7413848730</p><br><br><br>
    <hr><br>
    <a href=""><i class="fa fa-facebook-f" style="font-size:50px;color:color;margin-left:90px;"></i></a>
    <a href=""><i class="fa fa-linkedin-square" style="font-size:50px;color:color;margin-left:40px;"></i></a>
    <a href=""><i class="	fa fa-telegram" style="font-size:50px;color:color;margin-left:40px;"></i></a>
    <a href=""> <i class="	fa fa-twitter" style="font-size:50px;color:color;margin-left:40px;"></i></a>
    <a href=""><i class="	fa fa-instagram" style="font-size:50px;color:color;margin-left:40px;"></i></a>
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
     $(document).ready(function()
    {
        $("icon").click(function()
        {
            $("#myLinks").animate({right: '250px'});
        });
    });
    function openForm() 
{
   var data=document.getElementById("f1").innerHTML;
    if(data.search("Login")!=-1)
        {
            document.getElementById("myForm").style.display = "block";
            document.querySelector(".glass").style.display = "block";
        }
}
function closeForm() 
{
  document.getElementById("myForm").style.display = "none";
  document.querySelector(".glass").style.display = "none"; 
}
      function check()
{
        data=document.getElementById("st1").innerHTML;
        if(data.length > 1)
        {
                 document.getElementById("myForm").style.display = "block";
        }
        else
            {
                document.getElementById("myForm").style.display = "none";
            }
        
    }
function Toggle() { 
            var temp = document.getElementById("s18"); 
            if (temp.type === "password") { 
                temp.type = "text"; 
            } 
            else { 
                temp.type = "password"; 
            } 
        } 
    </script>
    </body>
</html>