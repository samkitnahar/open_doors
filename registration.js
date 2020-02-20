function Mobile_Validation()
{
    var mob=document.getElementById("a").value;
    var mob_val=/^[1-9]{1}[0-9]{9}$/;
    var pattern=new RegExp(mob_val);
    if(pattern.test(mob)==false)
        {
            document.getElementById("a1").innerHTML="Invalid Mobile Number!";
        }
    else
        {
            document.getElementById("a1").innerHTML="";
        }
}

function Email_Validation()
{
    var email=document.getElementById("b").value;
    var email_val=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var pattern=new RegExp(email_val);
    if(pattern.test(email)==false)
        {
            document.getElementById("a2").innerHTML="Invalid Email ID!";
        }
    else
        {
            document.getElementById("a2").innerHTML="";
        }
}

function Password_Check()
{
    var pass=document.getElementById("c").value;
    if(pass.length<8)
        {
            document.getElementById("a3").innerHTML="Weak";
            document.getElementById("a3").style.color = "red";
        }
   else
        {
            if(pass.search(/\W/i)==-1)
                {
                    document.getElementById("a3").innerHTML="Average";
                    document.getElementById("a3").style.color = "gold";
                }
            else
                {
                    document.getElementById("a3").innerHTML="Strong";
                    document.getElementById("a3").style.color = "green";
                }
        }
}

function ConfirmPassword_Check()
{
    var confirmpass=document.getElementById("d").value;
    var password=document.getElementById("c").value;
    if(password.localeCompare(confirmpass)!=0)
        {
            document.getElementById("a4").innerHTML="Password doesn't match!";
        }
    else
        {
            document.getElementById("a4").innerHTML="";
        }
}

function Aadhar_Validation()
{
    var aadhar=document.getElementById("e").value;
    var aadhar_val=/^\d{4}\-\d{4}\-\d{4}$/;
    var pattern1=new RegExp(aadhar_val);
    if(pattern1.test(aadhar)==false)
        {
            document.getElementById("a5").innerHTML="Invalid Aadhar Card Number!";
        }
    else
        {
            document.getElementById("a5").innerHTML="";
        }
}

function Pan_Validation()
{
    var pan=document.getElementById("f").value;
    var pan_val=/^[A-Z]{4}[0-9]{5}[A-Z]{1}$/;
    var pattern2=new RegExp(pan_val);
    if(pattern2.test(pan)==false)
        {
            document.getElementById("a6").innerHTML="Invalid Pan Card Number!";
        }
    else
        {
            document.getElementById("a6").innerHTML="";
        }
}

function DOB_Validation() 
{
        var lblError = document.getElementById("a7");
        var date = document.getElementById("g").value;
        var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;
        if (regex.test(date)) {
            var parts = date.split("/");
            var dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
            var dtCurrent = new Date();
            lblError.innerHTML = "Minimum Age is 18!";
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
                return false;
            }
 
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {
 
                if (dtCurrent.getMonth() < dtDOB.getMonth()) {
                    return false;
                }
                if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                    if (dtCurrent.getDate() < dtDOB.getDate()) {
                        return false;
                    }
                }
            }
            lblError.innerHTML = "";
            return true;
        } else {
            lblError.innerHTML = "Invalid Date(DD/MM/YYYY)";
            return false;
        }
    }

function FirstName_Validation()
{
    var f_name=document.getElementById("h").value;
    var fname_val=/^[A-Za-z]+$/;
    var pattern4=new RegExp(fname_val);
    if(pattern4.test(f_name)==false)
        {
            document.getElementById("a8").innerHTML="Invalid Input!";
        }
    else
        {
            document.getElementById("a8").innerHTML="";
        }
}

function LastName_Validation()
{
    var l_name=document.getElementById("i").value;
    var lname_val=/^[A-Za-z]+$/;
    var pattern5=new RegExp(lname_val);
    if(pattern5.test(l_name)==false)
        {
            document.getElementById("a9").innerHTML="Invalid Input!";
        }
    else
        {
            document.getElementById("a9").innerHTML="";
        }
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.querySelector(".glass").style.display = "block";  
}


