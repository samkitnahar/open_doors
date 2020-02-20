<html>
    <head>
        <title>OPEN DOORS</title>
        <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="777735311199-78khcv16jei9h5n1uf483grir8cmh7aq.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>   
     <link rel="stylesheet" href="seller.css" title="Home Style">
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
      <label id="st1"><?php if(isset($errors['password'])) echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$errors['password']."  " ?> </label>
    <br><button type="submit" class="btn">Login</button>
      <br><pre class="new">New User?</pre>
      <br><pre class="register"><a href="register.php">Register Now!</a></pre>
      <br><pre class="or">OR</pre>
      <br><pre class="login_with">Login With...</pre>
      <br><input type="image" src="https://i.pinimg.com/originals/0d/3b/7a/0d3b7af79ad2b163f759eed5937cd764.png" alt="Facebook" style="height:60px;width:60px;margin-left:130px;margin-top:-15px;">
      <div class="g-signin2" data-onsuccess="onSignIn"></div>
      <input type="image" src="https://cdn2.iconfinder.com/data/icons/social-icons-circular-color/512/gmail-512.png" alt="Gmail" style="height:60px;width:60px;margin-left:210px;margin-top:-60px;">
  </form>
</div>   
<div class="class1"></div>
<div class="tabordion">
  <section id="section1">
    <input type="radio" name="sections" id="option1" checked>
      <label for="option1"><i class="fa fa-newspaper-o"></i>&ensp;Basic Details</label>
    <article>
        <h5>You are&nbsp;:<br><button style="background-color:white;border-radius:32px;margin-top:10px;margin-left:10px;"><i class="fa fa-user-circle-o" style="font-size:60px;color:	
            #2F4F4F" onclick="openDetails1()"></i></button></h5><p style="margin-left:19px;color:">Owner</p>
        <button style="background-color:white;border-radius:45px;margin-top:-95px;margin-left:150px;"><image src="https://nicholasfinancial.com/wp-content/uploads/2017/10/Hand_Shake_Icon_02.png" width="60px" height="60px" style="border-radius:50px;" onclick="openDetails1()"></image></button><p style="margin-left:159px;margin-top:-22px;">Dealer</p>
        <br><br>
        <div class="wrap" id="showdetails">
        <h4>List property for&nbsp;:</h4><br>
         <select name="list" required style="margin-top:-23px;width:150px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
        <option>Sell Property</option>
        <option>Rent Property</option>
        </select>
        <div style="height:100px;width:100%;">
        <div style="transform: translateY(20vh); background: transparent; width: 50vw; padding: 2vh; margin: 0 auto;">
        <div class="hm" style="margin-top:-80px;margin-left:-30px; width: 100%;">
        <button class="btn2" id="b1" onclick="openForm1()">Residential</button>
        <button class="btn2" onclick="openForm2()" id="b2">Commercial</button>
        </div>
        </div>
        </div>
        <form id="myForm1">
            <div class="build">
                <button class="btn3" id="but1" onclick="opentype();return false;"><img src="http://cdn.onlinewebfonts.com/svg/img_125566.png" height="70px" width="60px" style="margin-top:10px;margin-left:10px;"></button>
                <button class="btn3" id="but2"><img src="https://equalrightscenter.org/wp-content/uploads/house-icon.png" height="70px" width="60px" style="margin-left:50px;margin-top:10px;"></button>
                <button class="btn3" id="but3"><img src="https://cdn3.iconfinder.com/data/icons/real-estate-1-18/66/26-512.png" height="70px" width="60px" style="margin-top:10px;margin-left:50px;"></button>
                <button class="btn3" id="but4"><img src="http://cdn.onlinewebfonts.com/svg/img_66233.png" height="70px" width="60px" style="margin-top:10px;margin-left:50px;"></button>
                <button class="btn3" id="but5"><img src="http://www.free-icons-download.net/images/residential-buildings-icons-68726.png" height="70px" width="60px" style="margin-top:10px;margin-left:50px;"></button><br>
                <p style="margin-top:10px;margin-left:10px;font-size:12px;">Apartment/<br>Flat</p>
                <p style="margin-top:-36px;margin-left:135px;font-size:12px;">House/<br>Villa</p>
                <p style="margin-top:-36px;margin-left:235px;font-size:12px;">Farm House
                <p style="margin-top:-17px;margin-left:360px;font-size:12px;">Cottage
                <p style="margin-top:-17px;margin-left:480px;font-size:12px;">Others
            </div>
        </form>
         <form id="myForm2">
            <div class="build">
                <button class="btn3" onclick="opentype2();return false;"><img src="https://www.freeiconspng.com/uploads/retail-store-icon-18.png" height="80px" width="70px" style="margin-top:10px;margin-left:10px;"></button>
                <button class="btn3"><img src="https://simpleicon.com/wp-content/uploads/factory-2.png" height="70px" width="60px" style="margin-left:50px;margin-top:10px;"></button>
                <button class="btn3" onclick="opentype1();return false;"><img src="https://image.flaticon.com/icons/png/512/63/63611.png" height="70px" width="60px" style="margin-top:10px;margin-left:50px;"></button>
                <button class="btn3" onclick="opentype3();return false;"><img src="https://www.nicepng.com/png/full/130-1306531_restaurant-building-icon-restaurant-icon-white-png.png" height="70px" width="60px" style="margin-top:10px;margin-left:50px;"></button>
                <button class="btn3"><img src="http://www.free-icons-download.net/images/residential-buildings-icons-68726.png" height="70px" width="60px" style="margin-top:10px;margin-left:50px;"></button><br>
                <p style="margin-top:7px;margin-left:25px;font-size:12px;">Retail</p>
                <p style="margin-top:-18px;margin-left:138px;font-size:12px;">Industry</p>
                <p style="margin-top:-18px;margin-left:255px;font-size:12px;">Office
                <p style="margin-top:-17px;margin-left:363px;font-size:12px;">Hospitality
                <p style="margin-top:-17px;margin-left:485px;font-size:12px;">Others
            </div>
        </form>
        <form id="typeshow">
        <p id="p1" style="margin-top:40px;">Type of Apartment/Flat&nbsp;:</p>
         <select name="type" required style="margin-top:10px;width:200px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
        <option id="o1">Residential Apartment</option>
        <option id="o2">Studio Apartment</option>
        <option id="o3">Serviced Apartment</option>
        </select>
            </form>
        <form id="typeshow1">
        <p id="p1" style="margin-top:40px;">Type of Office&nbsp;:</p>
         <select name="type" required style="margin-top:10px;width:200px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
        <option id="o1">Office in Business Park</option>
        <option id="o2">Office in IT Park</option>
        <option id="o3">Business Office</option>
        </select>
            </form>
            <form id="typeshow2">
        <p id="p1" style="margin-top:40px;">Type of Retail&nbsp;:</p>
         <select name="type" required style="margin-top:10px;width:200px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
        <option id="o1">Retail Mall</option>
        <option id="o2">Commercial Showroom</option>
        </select>
            </form>
            <form id="typeshow3">
        <p id="p1" style="margin-top:40px;">Type of Hospitality&nbsp;:</p>
         <select name="type" required style="margin-top:10px;width:200px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
        <option id="o1">Hotel/Resort</option>
        <option id="o2">Restaurant/Banquet Hall</option>
        </select>
            </form>
        </div>
        </article>
      </section>
  <section id="section2">
    <input type="radio" name="sections" id="option2">
    <label for="option2"><i class="fa fa-map-marker"></i>&ensp;Location</label>
    <article>
      <h4>Location of the property&nbsp;:</h4>
        <input type="text" placeholder="Type the property location..." required name="prop_location" style="margin-top:5px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:600px;">
        <button class="loc"><i class="material-icons">add_location</i></button><button style="margin-top:-25px;margin-left:640px;width:200px;font-size:15px;">Detect my location</button><br>
        <button class="detail" onclick="openDetailLocation();return true;">Add-on Details</button>
        <form id="formdetail">
            <p style="margin-top:40px;">State&nbsp;:</p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
             <input type="text" required name="state" style="margin-top:5px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:200px;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
             <p style="margin-top:-55px;margin-left:360px;">City&nbsp;:</p>
             <input type="text" required name="city" style="margin-top:5px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:250px;"><br>
             <p style="margin-top:80px;">Locality&nbsp;:</p>
             <input type="text" required name="locality" style="margin-top:5px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:400px;">
             <p style="margin-top:80px;">House Number/Street Name&nbsp;:</p>
             <input type="text" required name="street" style="margin-top:5px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:400px;">
            <button style="width:130px;margin-left:650px;margin-top:40px;height:40px;border:1px solid #3458DB;color:#3458DB;background-color:white;" onclick="option1_c()">&laquo;&nbsp;Previous</button>
        <button style="width:130px;margin-left:790px;margin-top:-40px;height:42px;color:white;background-color:#3458DB;border:none;" onclick="option3_c()">Next&nbsp;&raquo;</button>
        </form>
    </article>
  </section>
  <section id="section3">
    <input type="radio" name="sections" id="option3">
    <label for="option3"><i class="fa fa-pencil-square"></i>&ensp;Property Details</label>
    <article>
      <h4>Details of the property&nbsp;:</h4>
      <p style="margin-top:20px;">Built Up Area&nbsp;:&nbsp; <div class="popup" onclick="myFunction()">
        <i class="fa fa-exclamation-circle" style="color:grey;margin-top:-18px;margin-left:100px;"></i>
        <span class="popuptext" id="myPopup"><img src="https://www.princefoundations.com/landing-pages/highlands/images/plan/highlands/2bhk/3d-popup/1145.jpg" width="130px" height="120px;" style="margin-left:-120px;margin-top:15px;"><p style="margin-left:150px;margin-top:-120px;">Built Up Area</p>
        <p style="margin-left:150px;margin-top:15px;">75% of it is <br>carpet area and<br> 10% of the area is<br> walls and columns</p></span>
</div>
</p>
      <p style="margin-top:-22px;margin-left:180px;">Area Unit</p><br>
      <input type="text" required name="area" style="margin-top:-55px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:150px;">
      <select name="areaunit" required style="margin-top:-43px;width:80px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;margin-left:20px;">
        <option>sq.ft.</option>
        <option>sq.yards</option>
        <option>acres</option>
        <option>hectares</option>
      </select>
      <p style="margin-top:35px;">Bedrooms&nbsp;:</p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <select name="bedroom" style="width:150px;">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>More than 3</option>
      </select>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <p style="margin-top:-44px;margin-left:200px;">Bathrooms&nbsp;:</p>
       <select name="bathroom" style="width:150px;">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>More than 3</option>
      </select>
       <p style="margin-top:30px;">Balconies&nbsp;:</p>
      <select name="balcony" style="width:100px;">
          <option>1</option>
          <option>2</option>
          <option>More than 2</option>
      </select>
      <p style="margin-top:25px;">Other Rooms&nbsp;:</p>
      <input type="checkbox">&nbsp;Dining Room&emsp;&emsp;
       <input type="checkbox">&nbsp;Study Room&emsp;&emsp;
       <input type="checkbox">&nbsp;Servant Quarters&emsp;&emsp;
       <input type="checkbox">&nbsp;Verandah<br>
      <p style="margin-top:30px;">Furnishing&nbsp;:</p>
      <select name="furnish" required style="margin-top:10px;width:200px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
        <option>Furnished</option>
        <option>Semifurnished</option>
        <option>Unfurnished</option>
      </select>
      <p style="margin-top:20px;">Total Floors&nbsp;:</p>
      <select name="floor" required style="margin-top:5px;width:200px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>More than 5</option>
      </select>
      <p style="margin-top:20px;">Availability&nbsp;:</p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
      <select name="available" required style="margin-top:5px;width:200px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
        <option>1-5 years</option>
        <option>5-15 years</option>
        <option>More than 15 years</option>
        </select>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
       <p style="margin-top:-52px;margin-left:270px;">Property Age&nbsp;:</p>
      <select name="prop_age" required style="margin-top:5px;width:200px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
        <option>Under Construction</option>
        <option>Ready to move</option>
        <option>Others</option>
        </select>
      <button style="width:130px;margin-left:650px;margin-top:40px;height:40px;border:1px solid #3458DB;color:#3458DB;background-color:white;"  onclick="option2_c()">&laquo;&nbsp;Previous</button>
        <button style="width:130px;margin-left:790px;margin-top:-40px;height:42px;color:white;background-color:#3458DB;border:none;" onclick="option4_c()">Next&nbsp;&raquo;</button>
  </article>
  </section>
  <section id="section4">
    <input type="radio" name="sections" id="option4">
    <label for="option4"><i class="fa fa-ticket"></i>&ensp;Pricing</label>
    <article>
        <h4>Property Pricing&nbsp;:</h4>
      <p style="margin-top:20px">Expected Price&nbsp;:</p>
      <input type="text" required name="price_expected" style="margin-top:5px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:150px;"><i class="fa fa-inr" style="margin-left:-150px;"></i><br>
      <input type="checkbox" style="margin-top:20px;">&ensp;All Inclusive Charges&emsp;&emsp;
      <input type="checkbox">&ensp;Tax and Goverment Charges excluded<br>
        <p style="margin-top:20px;" onclick="openFormPrice()"><u>More details about the pricing&nbsp;:</u></p>
        <form id="openprice">
            <br>
            &emsp;Price per sq.ft.&nbsp;:<br>
             &emsp;<input type="text" required name="price" style="margin-top:3px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:130px;"><i class="fa fa-inr" style="margin-left:-130px;"></i><br><br>
            &emsp;Maintenance&nbsp;:
            &emsp;&emsp;&emsp;&emsp;&emsp;Duration&nbsp;:<br>
            &emsp;<input type="text" required name="price" style="margin-top:5px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:130px;">&emsp;&emsp;&ensp;
            <select name="duration" required style="margin-top:5px;width:150px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
        <option>Monthly</option>
        <option>Annually</option>
        <option>One Time</option>
        </select>
          </form>
        <p style="margin-top:20px;" onclick="openFormRent()"><u>For Renting Property&nbsp;:</u></p>
        <form id="openrent">
        <br>&emsp;Rent&nbsp;: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;Duration&nbsp;:<br>
            &emsp;<input type="text" required name="rent" style="margin-top:3px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:130px;"><i class="fa fa-inr" style="margin-left:-130px;"></i>&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <select name="duration" required style="margin-top:5px;width:150px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;">
        <option>Monthly</option>
        <option>Annually</option>
        </select><br><br>
        &emsp;Booking Amount&nbsp;:<br>
            &emsp;<input type="text" required name="book_amount" style="margin-top:3px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:130px;">
            <button style="width:130px;margin-left:650px;margin-top:40px;height:40px;border:1px solid #3458DB;color:#3458DB;background-color:white;" onclick="option3_c()">&laquo;&nbsp;Previous</button>
        <button style="width:130px;margin-left:790px;margin-top:-40px;height:42px;color:white;background-color:#3458DB;border:none;" onclick="option5_c()">Next&nbsp;&raquo;</button>
        </form>
    </article>
  </section>
   <section id="section5">
    <input type="radio" name="sections" id="option5">
    <label for="option5"><i class="fa fa-gift"></i>&ensp;Features</label>
    <article>
      <h4>Feautes of the property&nbsp;:</h4>
     <form id="myForm" method="post" enctype="multipart/form-data">
      <input type="file" id="files" name="files" multiple accept="image/*" style="margin-top:170px;margin-left:190px;"><br/>
      <p style="margin-top:40px;">Amenities&nbsp;:</p>
      <div class="amenities">                                         <img src="https://cdn4.iconfinder.com/data/icons/travel-and-hotel/512/elevator_lift-512.png" height="80px" width="70px" style="margin-left:20px;margin-top:-75px;"><input type="checkbox" style="margin-top:90px;margin-left:3px;height:15px;width:15px;">
      <img src="https://lh4.googleusercontent.com/proxy/CxWzQXl3O5Ko2Rlt6I6Of7wF8lh6S6MlJSJpcaV_gy7Cb_dj8owec8NY5sQt_Qz5Z5c7mJedwsTHmkZrNK_KZRIGgQ" height="80px" width="70px" style="margin-left:50px;margin-top:-75px;"><input type="checkbox" style="margin-top:90px;margin-left:3px;height:15px;width:15px;">
      <img src="https://lh6.googleusercontent.com/proxy/ZeWoNjni3MTKVVZ3wed16uar3BB22rgwM4EE16i48HuyrI6GjRV-aBLcK5TnkFmR8E1-SNVoVGI3wYK-1yYH_ckbv32b9QSveGN1qaSqdCM7aKD5Q6sqzqcVqHCm__HlEICq_fXBoQ" height="80px" width="70px" style="margin-left:50px;margin-top:-75px;"><input type="checkbox" style="margin-top:90px;margin-left:3px;height:15px;width:15px;">
      <img src="https://static.thenounproject.com/png/14543-200.png" height="80px" width="70px" style="margin-left:50px;margin-top:-75px;"><input type="checkbox" style="margin-top:90px;margin-left:3px;height:15px;width:15px;">
      <img src="https://cdn3.iconfinder.com/data/icons/smart-home-33/100/11_IntercomDoor_Phone_video_intercom_system_FacetimeReal_Estate-512.png" height="80px" width="70px" style="margin-left:50px;margin-top:-75px;"><input type="checkbox" style="margin-top:90px;margin-left:3px;height:15px;width:15px;"><br>
      <p style="margin-top:3px;margin-left:30px;">Lift(s)</p>
      <p style="margin-left:160px;margin-top:-20px;">Garden/Park</p>
      <p style="margin-left:310px;margin-top:-23px;">Parking</p>
      <p style="margin-left:435px;margin-top:-22px;">Security Alarm</p>
      <p style="margin-left:590px;margin-top:-24px;">Intercom</p>
      </div>
      <p style="margin-top:20px">Description&nbsp;:</p>
      <textarea style="height:100px;width:700px;"></textarea>
     <button style="width:130px;margin-left:650px;margin-top:40px;height:40px;border:1px solid #3458DB;color:#3458DB;background-color:white;"  onclick="option4_c()">&laquo;&nbsp;Previous</button>
        <button style="width:130px;margin-left:790px;margin-top:-40px;height:42px;color:white;background-color:#3458DB;border:none;" onclick="option6_c()">Next&nbsp;&raquo;</button>
     </form>
    </article>
  </section>
     <section id="section6">
    <input type="radio" name="sections" id="option6">
    <label for="option6"><i class="fa fa-user-circle"></i>&ensp;Contact Details</label>
    <article>
      <h4>Contact Details&nbsp;:</h4>
        <form>
            <p style="margin-top:20px;">Contact Number&nbsp;:</p>
            <input type="tel" required name="tel_no" placeholder="9876543210" style="margin-top:3px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:200px;"><br>
            <p style="margin-top:20px;">Email ID&nbsp;:</p>
            <input type="email" required placeholder="abc@gmail.com" name="contact_email" style="margin-top:3px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:250px;">
            <p style="margin-top:30px;">Preferred Timings to contact&nbsp;:</p>
            <button onclick="openFormContact()" style="border-radius:10px;width:130px;height:30px;">Anytime</button>
            <button onclick="openFormContact()" style="border-radius:10px;width:130px;height:30px;margin-left:20px;">8AM - 12PM</button>
            <button onclick="openFormContact()" style="border-radius:10px;width:130px;height:30px;margin-left:20px;">12PM - 3PM</button>
            <button onclick="openFormContact()" style="border-radius:10px;width:130px;height:30px;margin-left:20px;">5PM - 8PM</button>
            <button onclick="openFormContact()" style="border-radius:10px;width:130px;height:30px;margin-left:620px;margin-top:-30px;">9PM - 11PM</button>
        </form>
        <form id="formcontact">
            <p style="margin-top:40px;">Preferred Mode of contact&nbsp;:</p>
            <input type="checkbox">&ensp;Contact Number&emsp;
            <input type="checkbox">&ensp;Email ID<br>
            <p style="margin-top:20px;">Reference&nbsp;:</p>
            <p style="margin-top:10px;">Name&nbsp;:</p>
             <input type="text" required name="ref_name" placeholder="ABC" style="margin-top:3px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:200px;"><br>
            <p style="margin-top:20px;">Contact&nbsp;:</p>
             <input type="tel" required name="ref_contact" placeholder="9876543210" style="margin-top:3px;background-color: transparent;color:black ;outline: none;outline-style: none;border-top: none;border-left: none;border-right: none;border-bottom: solid black 1px;padding: 3px 10px;width:200px;"><br>
             <button style="width:130px;margin-left:650px;margin-top:40px;height:40px;border:1px solid #3458DB;color:#3458DB;background-color:white;" onclick="option5_c()">&laquo;&nbsp;Previous</button>
        <button style="width:130px;margin-left:790px;margin-top:-40px;height:42px;color:white;background-color:#3458DB;border:none;">Submit</button>
        </form>
    </article>
  </section>
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
    if(data.search("login")!=-1)
        {
            document.getElementById("myForm").style.display = "block";
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
function openForm1()
    {
        document.getElementById("b1").style.borderBottom="3px solid #59CDB5";
        document.getElementById("b2").style.borderBottom="none";
        document.getElementById("myForm1").style.display="block";
        document.getElementById("myForm2").style.display="none";
    }
function openForm2()
    {
        document.getElementById("b2").style.borderBottom="3px solid #59CDB5";
        document.getElementById("b1").style.borderBottom="none";
        document.getElementById("myForm1").style.display="none";
        document.getElementById("myForm2").style.display="block";
        
    }
function openDetails1()
    {
        document.getElementById("showdetails").style.display="block";
    }
function opentype()
    {
        document.getElementById("typeshow").style.display="block";
       document.getElementById("typeshow1").style.display="none";
       document.getElementById("typeshow3").style.display="none";
        document.getElementById("typeshow2").style.display="none"; document.getElementById("showdetails").style.display="block";
    }
 function opentype1()
    {
        document.getElementById("typeshow1").style.display="block";
       document.getElementById("typeshow").style.display="none"; document.getElementById("typeshow2").style.display="none";
         document.getElementById("typeshow3").style.display="none";
    document.getElementById("showdetails").style.display="block";
    }
 function opentype2()
    {
       document.getElementById("typeshow2").style.display="block";
       document.getElementById("typeshow1").style.display="none";
       document.getElementById("typeshow").style.display="none";
        document.getElementById("typeshow3").style.display="none"; document.getElementById("showdetails").style.display="block";
    }
function opentype3()
    {
        document.getElementById("typeshow3").style.display="block";
       document.getElementById("typeshow2").style.display="none";
       document.getElementById("typeshow1").style.display="none";
       document.getElementById("typeshow").style.display="none"; document.getElementById("showdetails").style.display="block";
    }
function openDetailLocation()
    {
       document.getElementById("formdetail").style.display="block";
    }
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
function openFormPrice() {
  document.getElementById("openprice").style.display="block";
}
function openFormRent()
    {
        document.getElementById("openrent").style.display="block";
    }
function openFormContact()
    {
        document.getElementById("formcontact").style.display="block";
    }
    
    function option1_c()
    {
        document.getElementById('option1').checked=true;
    }
     function option2_c()
    {
        document.getElementById('option2').checked=true;
    }
    function option3_c()
    {
        document.getElementById('option3').checked=true;
    }
    function option4_c()
    {
        document.getElementById('option4').checked=true;
    }
    function option5_c()
    {
        document.getElementById('option5').checked=true;
    }
    function option6_c()
    {
        document.getElementById('option6').checked=true;
    }
</script>

</body>
</html>
