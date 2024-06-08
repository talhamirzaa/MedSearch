function fieldcheck()
{
	with(document.forms.register)
	{
		if(fname.value=="" || lname.value=="" ||  mname.value=="" || email1.value=="" || phone.value=="" || pass1.value=="")
		{
			alert("Mandatory fields can't be empty");
		}
		else
		{
			document.register.action="http://localhost/Project/medical_reg.php";
		}
	}
}

function emailcheck()
{
	with(document.forms.register)
	{
		if(email1.value.search(".")==-1 || email1.value.search("@")==-1)
		{
			alert("Please enter a valid email");
		}
	}
}

function passcheck()
{
	with(document.forms.register)
	{
		if(pass1.value!=pass2.value)
		{
			alert("Incorrect Password\nCheck and enter again")
		}
	}
}

function phnocheck(evt)
{
	 {
        var charCode = (evt.which) ? evt.which : event.keyCode;
         if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
        {
            // alert("Invalid Phone Number enter only Number");
            return false;
        }
        return true;
}
}
