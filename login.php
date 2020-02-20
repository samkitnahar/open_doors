<?php 
    if($_POST)
    {
        if(!(isset($_SESSION)))
    {
         session_start();
        $_SESSION['user']="Login";
    }
    $name=$_POST['username'];
    $psw=$_POST['psw'];
    $server="3.6.52.254:3306";
    $username="shashank";
    $password="root";
    $db2="realestate";
    $db1=array("buyer","seller");
    $db;
    $result=-1;
    $errors=array();
    $extract=array();
    $extract['success']=0;    
    $ping=new mysqli($server,$username,$password,$db2);
    if(mysqli_connect_error())
    {
        die("Connection Closed : ".mysqli_connect_error());
    }
    else
    {
        $flag=0;
        $pattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
        if(preg_match($pattern,$name,$match))
        {
            $flag=1;
        }
        if($flag!=1)
        {    
        for($i=0;$i<2;$i++)
        {
            $query="select user_id from ".$db1[$i]." where user_id = '".$name."' and password='".$psw."'";
            $result1=mysqli_query($ping,$query);
            if(mysqli_num_rows($result1)==1)
            {
                $result=1;
                break;
            }
        }
        }
        else
        {
            for($i=0;$i<2;$i++)
            {
            $query="select user_id from ".$db1[$i]." where email = '".$name."' and password='".$psw."'";
            $result1=mysqli_query($ping,$query);
            if(mysqli_num_rows($result1)==1)
            {
                $result=1;
                break;
            }
        }
    }
        if($result!=-1)
        {
            $row=mysqli_fetch_assoc($result1);
            $_SESSION['user']=$row['user_id'];
        }
        else
        {   
            $errors['password']="Invalid Username or Password";
        }

    }
        
   
    }
        
        
        
?>