
var psize_out= document.getElementById('out_size');
var fname_out= document.getElementById('out_lname');
var adrs_out= document.getElementById('out_adrs');
var dist_out= document.getElementById('out_dist');

var outpsize=document.form1.psize;
var outfname=document.form1.FName;
var outadrs=document.form1.Adrs;
var outdist=document.form1.dist;

//first name validation
function psizecheck()
  {
    if(outpsize.value.match(/[0-9]/)) 
    {
      psize_out.innerHTML="";
    } else
    {
      psize_out.innerHTML=" Please Enter a valid Size";
      document.form1.psize.focus();
    }
  }

  //last name validation
function fnamecheck()
{
  if(outfname.value.match(/[a-zA-Z]{1,}/)) 
  {
    fname_out.innerHTML="";
  } else
  {
    fname_out.innerHTML="Invalid Name";
    document.form1.FName.focus();
  }
}

  //email validation
function adrscheck()
{
  if(outadrs.value.match(/[a-zA-Z]{1,}/)) 
  {
    adrs_out.innerHTML="";
  } else
  {
    adrs_out.innerHTML="Please enter Valid Address";
    document.form1.Adrs.focus();
  }
}
//phone number validation
  function distcheck()
  {
    if(outdist.value.match(/[a-zA-Z]{1,}/)) 
    {
      dist_out.innerHTML="";
    } else
    {
      dist_out.innerHTML="Please enter Valid district";
      document.form1.dist.focus();
    }
  }
  
//password validation
  
//confirm password
  