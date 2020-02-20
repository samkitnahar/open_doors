<html>
<head>
   <title>OPEN DOORS</title>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="777735311199-78khcv16jei9h5n1uf483grir8cmh7aq.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="blog.css" title="Property Style">
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
      <?php include 'login.php' ?>
       <input type="image" src="https://cdn3.iconfinder.com/data/icons/glyph/227/Cancel-512.png" alt="Cancel" class="btncancel" style="margin-left:350px;width:20px;height:20px;" onclick="closeForm()">

    <h1 style="text-align:center;margin-top:-10px;font-family:Baskerville Old Face,cursive;">Login</h1><br>
    <label for="username"><b style="font-size:18px;font-family:Baskerville Old Face,cursive; margin-left:5px;">Username</b></label>
    <input type="text" placeholder="Enter Username"                                   name="username" required style="background-color: transparent;color:black;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;"><br><br>

    <label for="psw"><b style="font-size:18px;font-family:Baskerville Old Face,cursive;margin-left:14px;">Password</b></label>
    <input type="password" id="s18" placeholder="Enter Password" name="psw" required style="background-color: transparent;color:black;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
      <br><input type="checkbox" name="show" style="width:12px;height:12px;margin-left:120px;margin-top:5px;" onclick="Toggle()">&emsp;<pre class="show1">Show Password</pre>
    <br> <label id="st1"><?php if(isset($errors['password'])) echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$errors['password']."  " ?> </label><br><button type="submit" class="btn">Login</button>
      <br><pre class="new">New User?</pre>
      <br><pre class="register"><a href="register.php">Register Now!</a></pre>
      <br><pre class="or">OR</pre>
      <br><pre class="login_with">Login With...</pre>
      <br><input type="image" src="https://i.pinimg.com/originals/0d/3b/7a/0d3b7af79ad2b163f759eed5937cd764.png" alt="Facebook" style="height:60px;width:60px;margin-left:130px;margin-top:-15px;">
      <input type="image" src="https://cdn2.iconfinder.com/data/icons/social-icons-circular-color/512/gmail-512.png" alt="Gmail" style="height:60px;width:60px;margin-left:210px;margin-top:-60px;">
  </form>
</div>
    
<div class="background">
    <img src="https://www.r3interactive.in/img/photo3.jpg" height=235% width=1000%>
    <p style="margin-left:460px;margin-top:-330px;font-size:70px;color:white;width:500px;">OPEN DOORS<br>BLOG</p>
</div>
<div class="post">
    <img src="https://www.attomdata.com/wp-content/uploads/2019/01/Newsmaker_Futurists_Rob_Barber_1.jpg" style="width:500px;height:250px;
    border:1px solid rgba(255,255,255,0.20);
    box-shadow: -6px -6px 26px 0 rgba(255,255,255,0.83);
    box-shadow: 6px 6px 16px 0 rgba(217,210,200,0.51);">
    <div class="post1"><pre style="margin-left:70px;margin-top:60px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;RIS Media
                           <a href="http://rismedia.com"  target=”_blank” style="color:grey;text-decoration: none;"> http://rismedia.com</a>
                            Property industry news, best practices, marketing, 
                            technology, and more.</pre></div>
    
</div>
<div class="subscribe"><p style="font-size:17px;font-weight:bold;margin-top:30px;margin-left:10px;">Subscribe for the latest news about Real Estate..</p><input type="text" placeholder="Name..." style="margin-left:570px;margin-top:-32px;height:40px;width:250px;border-radius:5px;"><input type="text" placeholder="Email Address..." style="margin-left:870px;margin-top:-40px;height:40px;width:250px;border-radius:5px;"><input type="submit" style="margin-left:1170px;margin-top:-40px;height:40px;width:150px;border-radius:5px;background-color:cadetblue;"></div>
    
<div style="height:100px;width:100%;">
        <div style="transform: translateY(20vh); background: transparent; width: 50vw; padding: 2vh; margin: 0 auto;">
        <div class="hm" style="margin-top:-80px;margin-left:-30px; width: 100%;">
        <button class="btn2" id="b1" onclick="openLatest();return false;"><i class="fa fa-book"></i>&ensp;LATEST</button>
        <button class="btn2" onclick="openRealtor();return false;" id="b2"><i class="fa fa-clone"></i>&ensp;REALTOR</button>
         <button class="btn2" onclick="openBuyer();return false;" id="b2"><i class="fa fa-comments"></i>&ensp;BUYER</button>
        </div>
        </div>
        </div>    
    <form id="latest">
        <div class="latest1">
             <img src="https://www.tomferry.com/wp-content/uploads/2019/12/HTM_Dec19Thumb-1.jpg" style="width:230px;height:230px;margin-left:20px;margin-top:20px;border:1px solid black;"><pre style="margin-left:160px;margin-top:-160px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Keeping Current Matters
                           <a href="https://www.keepingcurrentmatters.com"  target=”_blank” style="color:grey;text-decoration: none;"> https://www.keepingcurrentmatters.com</a>
                            Supporting real estate advisors to
                            educate and serve their clients.</pre>
        </div>
        <div class="latest2">
             <img src="https://www.biggerpockets.com/blog/wp-content/uploads/2013/04/BiggerPockets-Podcast-Cover-300-300.jpeg" style="width:230px;height:230px;margin-left:20px;margin-top:20px;border:1px solid black;"><pre style="margin-left:160px;margin-top:-160px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Bigger Pockets
                           <a href="https://www.biggerpockets.com/renewsblog"  target=”_blank” style="color:grey;text-decoration: none;"> https://www.biggerpockets.com</a>
                           Information and guides to financial 
                           freedom through real estate investing.</pre>
        </div>
         <div class="latest3">
             <img src="data:image/png;base64,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" style="width:230px;height:230px;margin-left:20px;margin-top:20px;border:1px solid black;"><pre style="margin-left:160px;margin-top:-160px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Rightmove
                           <a href="http://www.rightmove.co.uk/news"  target=”_blank” style="color:grey;text-decoration: none;"> http://www.rightmove.co.uk/news</a>
                           Featuring property news, advice, trends, 
                           and showcase properties.</pre>
        </div>
        <div class="latest4">
             <img src="https://webassets.inman.com/wp-content/uploads/2017/06/real-trends-hero-1400x621.png" style="width:230px;height:230px;margin-left:20px;margin-top:20px;border:1px solid black;"><pre style="margin-left:160px;margin-top:-160px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;REAL Trends
                           <a href="https://www.realtrends.com/blog"  target=”_blank” style="color:grey;text-decoration: none;"> https://www.realtrends.com/blog</a>
                           Real Trends is a trusted rsource for property 
                           news, marketing, tech, and trends.</pre>
        </div>
    </form>
    <form id="realtor">
        <div class="realtor1">
             <img src="https://lh4.googleusercontent.com/proxy/mcD4Ogb1FHyk2rAQTkTsiMaDyeSakqIeNkN3zqKnsUr-To8bo_NVabk55i2a67NiZjyCk_0TuGr4p3wMIJG9oduWcjx343jkSJJtwosPn-kNnLtU1CNlTFVLTfsezw0hWOAeqboeCr-GWcgNQ1rv" style="width:230px;height:230px;margin-left:20px;margin-top:20px;border:1px solid black;"><pre style="margin-left:160px;margin-top:-160px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Realty Times
                           <a href="http://realtytimes.com/"  target=”_blank” style="color:grey;text-decoration: none;"> http://realtytimes.com/</a>
                            Guidance and information for both real
                            estate agents and home owners.</pre>
        </div>
        <div class="realtor2">
             <img src="https://i.vimeocdn.com/video/444174196_295x166.jpg?r=pad" style="width:230px;height:230px;margin-left:20px;margin-top:20px;border:1px solid black;"><pre style="margin-left:160px;margin-top:-160px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Yardi
                           <a href="https://www.yardi.com/blog"  target=”_blank” style="color:grey;text-decoration: none;"> https://www.yardi.com/blog</a>
                           Advice on living, renting, buying and
                           investing in real estate.</pre>
        </div>
         <div class="realtor3">
             <img src="https://www.nar.realtor/sites/default/files/styles/magazine_thumbnail_image/public/2018-realtor-mag-May-June-cover-677w-885h.jpg?itok=zApxhlxd" style="width:230px;height:230px;margin-left:20px;margin-top:20px;border:1px solid black;"><pre style="margin-left:160px;margin-top:-160px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Realtor Mag
                           <a href="http://realtormag.realtor.org/"  target=”_blank” style="color:grey;text-decoration: none;"> http://realtormag.realtor.org/</a>
                           A business tool for real estate investors 
                           from national association of realtors.</pre>
        </div>
        <div class="realtor4">
             <img src="https://dukelong.com/wp-content/uploads/2016/12/duke_long_header.jpg" style="width:230px;height:230px;margin-left:20px;margin-top:20px;border:1px solid black;"><pre style="margin-left:160px;margin-top:-160px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Duke Long
                           <a href="http://dukelong.com"  target=”_blank” style="color:grey;text-decoration: none;"> http://dukelong.com</a>
                           An abundance of information on all aspects
                           of real estate inlcuing tech and investing.</pre>
        </div>
    </form>
     <form id="buyer">
        <div class="buyer1">
             <img src="https://static1.squarespace.com/static/56f52e545559866730bb7d99/57168063859fd07cea35c212/586b965e15d5db018237272d/1483533029054/edited+capture+zillow2.jpg?format=2500w" style="width:230px;height:230px;margin-left:20px;margin-top:20px;border:1px solid black;"><pre style="margin-left:160px;margin-top:-160px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Zillow Porchlight
                           <a href="https://www.zillow.com/blog"  target=”_blank” style="color:grey;text-decoration: none;"> https://www.zillow.com/blog</a>
                            One of the leading real estate resources for
                            home owners and buyers.</pre>
        </div>
        <div class="buyer2">
             <img src="https://cdn01.vulcanpost.com/wp-uploads/2016/01/houzz.jpg" style="width:230px;height:230px;margin-left:20px;margin-top:20px;border:1px solid black;"><pre style="margin-left:160px;margin-top:-160px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Houzz
             <a href="https://www.houzz.com"  target=”_blank” style="color:grey;text-decoration: none;">              https://www.houzz.com</a>
                           Home design, decorating, renovation and
                           purchasing advice.</pre>
        </div>
         <div class="buyer3">
             <img src="https://methodhomes.net/wp-content/uploads/2014/01/Curbed_Logo_Thumbnail.jpg" style="width:230px;height:230px;margin-left:20px;margin-top:20px;border:1px solid black;"><pre style="margin-left:160px;margin-top:-160px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Curbed
                           <a href="https://www.curbed.com/"  target=”_blank” style="color:grey;text-decoration: none;"> https://www.curbed.com/</a>
                           Insights into property news, development, 
                           and design.</pre>
        </div>
        <div class="buyer4">
             <img src="https://2.gravatar.com/avatar/b84a3d328280d93866641ed3579f6637?s=400&d=mm&r=g" style="width:230px;height:230px;margin-left:20px;margin-top:20px;border:1px solid black;"><pre style="margin-left:160px;margin-top:-160px;font-family:Cooper;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Rent.com
                           <a href="https://blog.rent.com"  target=”_blank” style="color:grey;text-decoration: none;"> https://blog.rent.com</a>
                           Advice on all things rental including finding
                           a property to home improvement advice.</pre>
        </div>
    </form>
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
function openLatest()
    {
        document.getElementById("latest").style.display="block";
        document.getElementById("realtor").style.display="none";
        document.getElementById("buyer").style.display="none";
    }
function openRealtor()
    {
        document.getElementById("latest").style.display="none";
        document.getElementById("realtor").style.display="block";
        document.getElementById("buyer").style.display="none";
    }
function openBuyer()
    {
        document.getElementById("latest").style.display="none";
        document.getElementById("realtor").style.display="none";
        document.getElementById("buyer").style.display="block";
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