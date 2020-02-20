<html>
    <head>
        <title>OPEN DOORS</title>
        <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="777735311199-78khcv16jei9h5n1uf483grir8cmh7aq.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="sellerhome.css" title="Property Style">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
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
            <button class="dropdownbtn" onclick="openForm()" id="f1"><?php session_start();  if(isset($_SESSION))
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
  <form method="post" target="" class="form-container">
      <?php include('login.php') ?>
       <input type="image" src="https://cdn3.iconfinder.com/data/icons/glyph/227/Cancel-512.png" alt="Cancel" class="btncancel" style="margin-left:350px;width:20px;height:20px;" onclick="closeForm()">

    <h1 style="text-align:center;margin-top:-10px;font-family:Baskerville Old Face,cursive;">Login</h1><br>
    <label for="username"><b style="font-size:18px;font-family:Baskerville Old Face,cursive; margin-left:5px;">Username</b></label>
    <input type="text" placeholder="Enter Username"                                   name="username" required style="background-color: transparent;color:black;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;"><br><br>

    <label for="psw"><b style="font-size:18px;font-family:Baskerville Old Face,cursive;margin-left:14px;">Password</b></label>
    <input type="password" id="s18" placeholder="Enter Password" name="psw" required style="background-color: transparent;color:black;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
      <br><input type="checkbox" name="show" style="width:12px;height:12px;margin-left:120px;margin-top:5px;" onclick="Toggle()">&emsp;<pre class="show1">Show Password</pre>
    <br>
       <label id="st1"><?php if(isset($errors['password'])) echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$errors['password']."  " ?> </label><br><button type="submit" class="btn">Login</button>
      <br><pre class="new">New User?</pre>
      <br><pre class="register"><a href="register.php">Register Now!</a></pre>
      <br><pre class="or">OR</pre>
      <br><pre class="login_with">Login With...</pre>
      <br><input type="image" src="https://i.pinimg.com/originals/0d/3b/7a/0d3b7af79ad2b163f759eed5937cd764.png" alt="Facebook" style="height:60px;width:60px;margin-left:130px;margin-top:-15px;">
      <input type="image" src="https://cdn2.iconfinder.com/data/icons/social-icons-circular-color/512/gmail-512.png" alt="Gmail" style="height:60px;width:60px;margin-left:210px;margin-top:-60px;">
  </form>
</div>
<div class="desc">
    <p style="color:white;font-weight:bold;font-size:22px;font-family:Cooper;margin-left:5px;">Want to sell your property, but it's too much trouble?<br><br>Open Doors provide you the best platform to advertise your property to genuine buyers.
        <br><br>So upload your property now and sell properties easily and efficiently.</p>
    <a href="seller.php"><button style="margin-top:130px;margin-left:90px;border-radius:5px;background-color:#80888C;width:200px;height:70px;font-size:20px;font-family:Engravers MT;">Let's get <br>started</button></a>
</div>
    <div class="image">
        <img src="https://cdn.pixabay.com/photo/2017/06/16/12/37/home-2409009_960_720.jpg" width=70% height=100% style="margin-left:410px;margin-top:-657px;">
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

function openForm() 
{
  var data=document.getElementById("f1").innerHTML;
    if(data.search("login")!=-1)
        {
            document.getElementById("myForm").style.display = "block";
            
        }
}
function closeForm() 
{
   document.getElementById("myForm").style.display = "none";
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