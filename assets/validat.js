function Focus()
	{
		document.getElementById("fname").focus();
	}
	/*function genderCheck()
	{
		if(document.getElementById("male").checked)
		{
			document.getElementById("female").checked=false;
			document.getElementById("others").checked=false;
			return false;
		}
		else if(document.getElementById("female").checked)
		{
			document.getElementById("male").checked=false;
			document.getElementById("others").checked=false;
			return false;
		}
		else if(document.getElementById("others").checked)
		{
			document.getElementById("male").checked=false;
			document.getElementById("female").checked=false;
			return false;
		}
	}*/
	function isNumber(evt) 
	{
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)) 
		{
			alert("Please enter only Numbers.");
			return false;
		}

	return true;
	}
	
	function formValidate()
	{
		var Fname = document.getElementById("fname").value;
		var Lname = document.getElementById("lname").value;
		var DOB = document.getElementById("dob").value;
		var mobile = document.getElementById("mobileNo").value;
		var gmail = document.getElementById("email").value;
		var mFormat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		///^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		var i = document.forms["form1"]["gender"].value;
		// var j = document.forms["form1"]["Edu"].value;
		
		if(Fname == "")
		{  
			document.getElementById("alert1").innerHTML="Firstname should not be empty";
			document.getElementById('fname').focus();
			return false;
		} 
		else 
		{
			document.getElementById("alert1").innerHTML="";
		}
		var nFormate = /^[a-zA-Z]+ [a-zA-Z]+$/;
		if(!nFormate.test(Fname))
		{
			document.getElementById("alert1").innerHTML="Invalid Formate.Ex :'M Sreenath'";
			document.getElementById('fname').focus();
			return false;
		}
		if(Lname == "")
		{
			document.getElementById("alert2").innerHTML="Lastname should not be empty";
			document.getElementById('lname').focus();
			return false;
		}
		else 
		{
			document.getElementById("alert2").innerHTML="";
		}
		var lFormate = /^[a-zA-Z]+$/;
		if(!lFormate.test(Lname))
		{
			document.getElementById("alert2").innerHTML="Invalid Formate.Ex :'Reddy'";
			document.getElementById('lname').focus();
			return false;
		}
		
		if(DOB == "")
		{
			document.getElementById("alert3").innerHTML="DoB should not be empty";
			document.getElementById('dob').focus();
			return false;
		}
		else 
		{
			document.getElementById("alert3").innerHTML="";
		}
		if(mobile == "")
		{
			document.getElementById("alert4").innerHTML="Mobile No. should not be empty";
			document.getElementById('mobileNo').focus();
			return false;
		}
		else 
		{
			document.getElementById("alert4").innerHTML="";
		}
			if(mobile.length != 10)
			{
				document.getElementById("alert4").innerHTML="Mobile No. should be 10 digits";
				document.getElementById('mobileNo').focus();
				return false;
			}
		if(gmail == "")
		{
			document.getElementById("alert5").innerHTML="Email should not be empty";
			document.getElementById('email').focus();
			return false;
		}
		else 
		{
			document.getElementById("alert5").innerHTML="";
		}
		if(gmail.match(mFormat))
		{
			
			//document.getElementById('email').focus();
			//return true;
		}
		else 
		{
			document.getElementById("alert5").innerHTML="Invalid Formate.Ex :'xyz@gmail.com'";
			return false;
		}
		if(!document.getElementById("ten").checked )
		{
			//alert("Gender Should not be empty");
			document.getElementById("alert7").innerHTML="Education should not be empty";
			return false;
		}
		else 
		{
			document.getElementById("alert7").innerHTML="";
		}
		if(i == "")
		{
			//alert("Gender Should not be empty");
			document.getElementById("alert6").innerHTML="Gender should not be empty";
			return false;
		}
		else 
		{
			document.getElementById("alert6").innerHTML="";
		}
		if(!document.getElementById("terms").checked)
		{
			document.getElementById("alert8").innerHTML="Accept Terms & Conditions";
		}
		else
		{
			document.getElementById("alert8").innerHTML="";
		}
	}

	function formValidate1()
	{
		var Fname = document.getElementById("fname").value;
		var Lname = document.getElementById("lname").value;
		var DOB = document.getElementById("dob").value;
		var mobile = document.getElementById("mobileNo").value;
		var gmail = document.getElementById("email").value;
		var mFormat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var i = document.forms["form1"]["gender"].value;
		var j = document.forms["form1"]["gender"].value;
		
		if(Fname == "")
		{  
			document.getElementById("alert1").innerHTML="Firstname should not be empty";
			document.getElementById('fname').focus();
			//return false;
		} 
		else 
		{
			document.getElementById("alert1").innerHTML="";
		}
		var nFormate = /^[a-zA-Z]+ [a-zA-Z]+$/;
		if(!nFormate.test(Fname))
		{
			document.getElementById("alert1").innerHTML="Invalid Formate.Ex :'M Sreenath'";
			document.getElementById('fname').focus();
			//return false;
		}
		if(Lname == "")
		{
			document.getElementById("alert2").innerHTML="Lastname should not be empty";
			document.getElementById('lname').focus();
			//return false;
		}
		else 
		{
			document.getElementById("alert2").innerHTML="";
		}
		var lFormate = /^[a-zA-Z]+$/;
		if(!lFormate.test(Lname))
		{
			document.getElementById("alert2").innerHTML="Invalid Formate.Ex :'Reddy'";
			document.getElementById('lname').focus();
			//return false;
		}
		
		if(DOB == "")
		{
			document.getElementById("alert3").innerHTML="DoB should not be empty";
			document.getElementById('dob').focus();
			//return false;
		}
		else 
		{
			document.getElementById("alert3").innerHTML="";
		}
		if(mobile == "")
		{
			document.getElementById("alert4").innerHTML="Mobile No. should not be empty";
			document.getElementById('mobileNo').focus();
			//return false;
		}
		else 
		{
			document.getElementById("alert4").innerHTML="";
		}
			if(mobile.length != 10)
			{
				document.getElementById("alert4").innerHTML="Mobile No. should be 10 digits";
				document.getElementById('mobileNo').focus();
				//return false;
			}
		if(gmail == "")
		{
			document.getElementById("alert5").innerHTML="Email should not be empty";
			document.getElementById('email').focus();
			//return false;
		}
		else 
		{
			document.getElementById("alert5").innerHTML="";
		}
		if(gmail.match(mFormat))
		{
			
			//document.getElementById('email').focus();
			//return true;
		}
		else 
		{
			document.getElementById("alert5").innerHTML="Invalid Formate.Ex :'xyz@gmail.com'";
			//return false;
		}
		if(i == "")
		{
			//alert("Gender Should not be empty");
			document.getElementById("alert6").innerHTML="Gender should not be empty";
			//return false;
		}
		else 
		{
			document.getElementById("alert6").innerHTML="";
		}
		if(j == "")
		{
			//alert("Gender Should not be empty");
			document.getElementById("alert7").innerHTML="Education should not be empty";
			//return false;
		}
		else 
		{
			document.getElementById("alert7").innerHTML="";
		}
		return true;
	}
	function check()
	{
		var edu = document.getElementByName("Edu");
		var count=0;
		for(var k=0;k<count(edu);k++)
		{
			if(edu[k])
			{
				count += 1;
			}
		}
		if (count>1)
		{
			document.getElementById("alert7").innerHTML="Education should not be empty ";
			return false;
		}
		else
		{
			document.getElementById("alert7").innerHTML="";
		}
	}
	function myThemeOpen()
	{
		document.getElementById("themes").style.display="inline";
	}
	function myThemeClose()
	{
		document.getElementById("themes").style.display="none";
	}
	function myThemeRed()
	{
		
		document.getElementById("left").style.backgroundColor="#936c6c";
		document.getElementById("right").style.backgroundColor="#ff0000";
		document.getElementById("top").style.backgroundColor="#808080";
	}
	function myThemeLightBlue()
	{
		
		document.getElementById("left").style.backgroundColor="pink";
		document.getElementById("right").style.backgroundColor="lightblue";
		document.getElementById("top").style.backgroundColor="#146";
	}
	function myThemeTomato()
	{
		
		document.getElementById("left").style.backgroundColor="#123";
		document.getElementById("right").style.backgroundColor="tomato";
		document.getElementById("top").style.backgroundColor="#112";
	}
	function myThemeMerunRed()
	{
		
		document.getElementById("left").style.backgroundColor="#1a0000";
		document.getElementById("right").style.backgroundColor="#660000";
		document.getElementById("top").style.backgroundColor="##330000";
	}
	function overDraw()
	{
		document.getElementById("od").style.display="inline";
	}
	function overDrawClose()
	{
		document.getElementById("od").style.display="none";
	}