
<html>
<head>
   <title>OPEN DOORS</title>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="777735311199-78khcv16jei9h5n1uf483grir8cmh7aq.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="stylehome.css" title="Home Style">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">

   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <script type="text/javascript" src="script.js"></script>
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
            <button class="dropdownbtn" onclick="openForm()" id="f1"><?php if(isset($_SESSION))
                                              { 
                                            echo  $_SESSION['user'];    
                                                    }
                                                    else
                                                    {
                                                        echo "Login";
                                                    }
                                                    ?>&nbsp;<i class="fa fa-user"></i></button>
                    <button class="dropdownbtn" href="contact.php">Contact Us&nbsp;<i class="fa fa-fw fa-envelope"></i></button>
            <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdownbtn" >What's Trending?&nbsp;&nbsp;<i class="fa fa-thumbs-o-up"></i></a>
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
             <a href=index.php><img src="https://i.ibb.co/tHb1k2f/logo.png"></a>
        </div>
        <div class="search">
            <input type="text" placeholder="Search..." id="search">
            <div id="display"></div>
            <button type="submit"><i class="fa fa-search"></i></button>
               
        </div>
    </div>
    </div>
<div class="slideshow">
    <div class="mySlides">
            <h2>Majestic. Indra Colony,Mussoorie</h2>
            <a href="">
            <img class="w3-animate-fading" src="https://i.ibb.co/j8K7TnY/kitchen-2486092.jpg">
            </a>
    </div>
<div class="slideshow">
    <div class="mySlides">
            <h2>Mystic Serenity. Horavamu,Bangalore</h2>
            <a href="">
            <img class="w3-animate-fading" src="https://i.ibb.co/gwyJPn6/architecture-1867187.jpg">
            </a>
</div>
<div class="slideshow">
    <div class="mySlides">
            <h2>Experion Windchants. Gurgaon,Delhi</h2>
            <a href="">
            <img class="w3-animate-fading" src="https://i.ibb.co/VL3TSyg/living-room-3539587.jpg">
            </a>
</div>
<div class="slideshow">
    <div class="mySlides">
             <h2>Shibpur,Kolkata</h2>
             <a href="">
            <img class="w3-animate-fading" src="https://i.ibb.co/k0bcDnJ/skyscraper-4016229.jpg">
            </a>
</div>
<div class="slideshow">
    <div class="mySlides">
            <h2>Ruparel Zion. Sion,Mumbai</h2>
            <a href="">
            <img class="w3-animate-fading" src="https://i.ibb.co/CBj8TkV/architecture-1477041.jpg">
            </a>
</div>
</div>
<div id="mySidenav" class="sidenav">
    <a href="#auction_up" id="auction">Upcoming<br> Events</a>
    <a href="" id="deals">Deals</a>
</div>
<div class="holder">
  <ul id="ticker01">
        <li><a href="#">The properties to watch out for in 2020!</a></li><br><br>
        <li><a href="blog.php">What are the basic necessities to sell a property?</a></li><br><br>
        <li><a href="#">Exciting Deals coming your way soon...</a></li><br><br>
        <li><a href="#">Bangalore-3BHK Apartments at affordable prices</a></li><br><br>
        <li><a href="#">The best office properties in Gurgaon!</a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
    </ul>
</div>

<div class="glass" style="display: none"></div>
<div class="form-popup" id="myForm">
  <form method="post"  target="" class="form-container">
      <?php include 'login.php' ?>
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
      <br><input type="image" src="https://www.iconninja.com/files/245/45/195/facebook-media-social-like-network-fb-icon.svg" alt="Facebook" style="height:60px;width:60px;margin-left:130px;margin-top:-15px;">
      <input type="image" src="https://cdn2.iconfinder.com/data/icons/social-icons-circular-color/512/gmail-512.png" alt="Gmail" style="height:60px;width:60px;margin-left:210px;margin-top:-60px;">
  </form>
</div>

<a name="events">
    <h1><center>UPCOMING EVENTS</center></h1>
</a>
    
    
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
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 6000); 
}

    $(document).ready(function()
    {
        $("icon").click(function()
        {
            $("#myLinks").animate({right: '250px'});
        });
    });
    jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({
		travelocity: 0.03
		}, settings);		
		return this.each(function(){
				var $strip = jQuery(this);
				$strip.addClass("newsticker")
				var stripHeight = 1;
				$strip.find("li").each(function(i){
					stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
				});
				var $mask = $strip.wrap("<div class='mask'></div>");
				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
				var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
				$strip.height(stripHeight);			
				var totalTravel = stripHeight;
				var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
				function scrollnews(spazio, tempo){
				$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
				}
				scrollnews(totalTravel, defTiming);				
				$strip.hover(function(){
				  jQuery(this).stop();
				},
				function(){
				  var offset = jQuery(this).offset();
				  var residualSpace = offset.top + stripHeight;
				  var residualTime = residualSpace/settings.travelocity;
				  scrollnews(residualSpace, residualTime);
				});			
		});	
};

$(function(){
    $("ul#ticker01").liScroll();
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