
<html>
<head>
   <title>OPEN DOORS</title>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="777735311199-78khcv16jei9h5n1uf483grir8cmh7aq.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="propertystyle.css" title="Property Style">
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
  <form method="post" target="" class="form-container">
      <?php include('login.php') ?>
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
      <input type="image" src="https://cdn2.iconfinder.com/data/icons/social-icons-circular-color/512/gmail-512.png" alt="Gmail" style="height:60px;width:60px;margin-left:210px;margin-top:-60px;">
  </form>
</div>

    <div class="property">
    <h1><center>PROPERTY GALLERY</center></h1>
    </div>
<div class="row"> 
  <div class="column">
      <div class="flip-card">
      <div class="flip-card-inner">
      <div class="flip-card-front">
      <img src="https://cdn.pixabay.com/photo/2017/03/26/16/06/architecture-2175925_960_720.jpg" style="width:100%">
      </div>
      <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
      </div>
      </div>
      </div>
      
      <div class="flip-card1">
      <div class="flip-card-inner1">
      <div class="flip-card-front1">
      <img src="https://cdn.pixabay.com/photo/2016/11/18/17/20/couch-1835923_960_720.jpg"  style="width:100%;margin-top:70px;">
          </div>
      <div class="flip-card-back1">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
      </div>
      </div>
      </div>
      
      <div class="flip-card2">
      <div class="flip-card-inner2">
      <div class="flip-card-front2">
      <img src="https://cdn.pixabay.com/photo/2015/09/27/22/36/house-961401_960_720.jpg" style="width:100%; margin-top:70px;">
      </div>
      <div class="flip-card-back2">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
      </div>
      </div>
      </div>
      
      <div class="flip-card3">
      <div class="flip-card-inner3">
      <div class="flip-card-front3">
      <img src="https://cdn.pixabay.com/photo/2015/03/26/09/41/condominium-690086_960_720.jpg" style="width:100%; margin-top:70px;">
      </div>
      <div class="flip-card-back3">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
      </div>
      </div>
      </div>
      
      <div class="flip-card8">
      <div class="flip-card-inner8">
      <div class="flip-card-front8">
      <img src="https://cdn.pixabay.com/photo/2017/07/03/21/45/house-2469110_960_720.jpg" style="width:100%;height:150px;">
      </div>
      <div class="flip-card-back8">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
      </div>
      </div>
      </div>
      
      <div class="flip-card13">
      <div class="flip-card-inner13">
      <div class="flip-card-front13">
      <img src="https://cdn.pixabay.com/photo/2014/08/11/21/26/kitchen-416027_960_720.jpg" style="width:100%">
      </div>
      <div class="flip-card-back13">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
      </div>
      </div>
      </div>
      
      <div class="flip-card20">
      <div class="flip-card-inner20">
      <div class="flip-card-front20">
      <img src="https://cdn.pixabay.com/photo/2015/10/20/18/57/furniture-998265_960_720.jpg" style="width:100%">
      </div>
      <div class="flip-card-back20">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
      </div>
      </div>
      </div>
</div>
    
<div class="column">
    <div class="flip-card4">
    <div class="flip-card-inner4">
    <div class="flip-card-front4">
    <img src="https://cdn.pixabay.com/photo/2014/10/22/16/38/buildings-498198_960_720.jpg" style="width:100%;height:350px;">
    </div>
    <div class="flip-card-back4">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div>
     
    <div class="flip-card6">
    <div class="flip-card-inner6">
    <div class="flip-card-front6">
    <img src="https://cdn.pixabay.com/photo/2017/03/27/15/17/apartment-2179337_960_720.jpg" style="width:100%; height:350px;margin-top:10px;">
    </div>
    <div class="flip-card-back6">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div>
      
    <div class="flip-card7">
    <div class="flip-card-inner7">
    <div class="flip-card-front7">
    <img src="https://cdn.pixabay.com/photo/2015/07/16/12/33/architecture-847659_960_720.jpg" style="width:100%;height:350px;">
    </div>
    <div class="flip-card-back7">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div>
    
    <div class="flip-card12">
    <div class="flip-card-inner12">
    <div class="flip-card-front12">
    <img src="https://cdn.pixabay.com/photo/2016/02/18/22/25/window-1208277_960_720.jpg" style="width:100%;height:350px;">
    </div>
    <div class="flip-card-back12">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div>
  </div>  
    
  <div class="column">
    <div class="flip-card5">
    <div class="flip-card-inner5">
    <div class="flip-card-front5">
    <img src="https://cdn.pixabay.com/photo/2017/12/27/14/42/furniture-3042835_960_720.jpg" style="width:100%">
    </div>
    <div class="flip-card-back5">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div>
    
    <div class="flip-card9">
    <div class="flip-card-inner9">
    <div class="flip-card-front9">
    <img src="https://cdn.pixabay.com/photo/2013/09/25/18/02/house-186400_960_720.jpg" style="width:100%">
    </div>
    <div class="flip-card-back9">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div>
      
    <div class="flip-card11">
    <div class="flip-card-inner11">
    <div class="flip-card-front11">
    <img src="https://cdn.pixabay.com/photo/2014/11/21/17/17/country-house-540796_960_720.jpg" style="width:100%">
    </div>
    <div class="flip-card-back11">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div>
    
    <div class="flip-card14">
    <div class="flip-card-inner14">
    <div class="flip-card-front14">
    <img src="https://cdn.pixabay.com/photo/2017/07/31/14/56/apartment-2558277_960_720.jpg" style="width:100%">
    </div>
    <div class="flip-card-back14">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div>
    
    <div class="flip-card18">
    <div class="flip-card-inner18">
    <div class="flip-card-front18"> 
    <img src="https://cdn.pixabay.com/photo/2014/11/11/22/54/bedroom-527645_960_720.jpg" style="width:100%">
    </div>
    <div class="flip-card-back18">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div>
    
    <div class="flip-card19">
    <div class="flip-card-inner19">
    <div class="flip-card-front19">   
    <img src="https://cdn.pixabay.com/photo/2017/07/03/21/35/house-2469067_960_720.jpg" style="width:100%">
    </div>
    <div class="flip-card-back19">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div>
  </div>
    
  <div class="column">
    <div class="flip-card10">
    <div class="flip-card-inner10">
    <div class="flip-card-front10">
    <img src="https://cdn.pixabay.com/photo/2016/08/25/21/38/home-1620736_960_720.jpg" style="width:100%;height:350px;">
    </div>
    <div class="flip-card-back10">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div> 
     
    <div class="flip-card15">
    <div class="flip-card-inner15">
    <div class="flip-card-front15">
    <img src="https://cdn.pixabay.com/photo/2016/01/19/17/32/apartment-building-1149751_960_720.jpg" style="width:100%;height:350px;">
    </div>
    <div class="flip-card-back15">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div> 
      
    <div class="flip-card16">
    <div class="flip-card-inner16">
    <div class="flip-card-front16">
    <img src="https://cdn.pixabay.com/photo/2015/05/15/14/21/architecture-768432_960_720.jpg" style="width:100%;height:350px;">
    </div>
    <div class="flip-card-back16">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
    </div>
    
    <div class="flip-card17">
    <div class="flip-card-inner17">
    <div class="flip-card-front17">
    <img src="https://cdn.pixabay.com/photo/2013/09/14/19/53/city-182223_960_720.jpg" style="width:100%;height:350px;">
    </div>
    <div class="flip-card-back17">
    <h1>John Doe</h1> 
    <p>Architect & Engineer</p> 
    <p>We love that guy</p>
    </div>
    </div>
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