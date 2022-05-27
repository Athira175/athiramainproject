
var fname_out= document.getElementById('out_fname');
var lname_out= document.getElementById('out_lname');
var phone_out= document.getElementById('out_mobile');
var email_out= document.getElementById('out_email');
var pass_out= document.getElementById('out_pass1');
var pass1_out= document.getElementById('out_pass2');


var outfname=document.login.fna;
var outlname=document.login.lna;
var outemail=document.login.email;
var outphone=document.login.phone;
var outpass1=document.login.u_password;
var outpass2=document.login.cpassword;
//first name validation
function fnamecheck()
  {
    if(outfname.value.match(/^[A-Za-z]+$/)) 
    {
      fname_out.innerHTML="";
    } else
    {
      fname_out.innerHTML=" Please Enter a valid Name";
      document.login.fna.focus();
    }
  }

  //last name validation
function lnamecheck()
{
  if(outlname.value.match(/[a-zA-Z]{1,}/)) 
  {
    lname_out.innerHTML="";
  } else
  {
    lname_out.innerHTML="Invalid Name";
    document.login.lna.focus();
  }
}

  //email validation
function mailcheck()
{
  if(outemail.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) 
  {
    email_out.innerHTML="";
  } else
  {
    email_out.innerHTML="Please enter Valid email";
    document.login.email.focus();
  }
}
//phone number validation
  function mobilecheck()
  {
    if(outphone.value.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)) 
    {
      phone_out.innerHTML="";
    } else
    {
      phone_out.innerHTML="Please enter Valid Mobile no:";
      document.login.mobile.focus();
    }
  }
//password validation
  function pass1check()
  {
    if(outpass1.value.match(/^[A-Za-z]\w{7,14}$/)) 
    {
      pass_out.innerHTML="";
    } else
    {
      pass_out.innerHTML="6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter";
      document.login.u_password.focus();
    }
  }
//confirm password
  function pass2check()
  {
    if(outpass2.value==outpass1.value) 
    {
      pass1_out.innerHTML="";
    } else
    {
      pass1_out.innerHTML="Password doesn't Match";
      document.login.cpassword.focus();
    }
  }