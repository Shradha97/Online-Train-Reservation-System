$("#sub").click(function(){
//This file passes the values of the new registering user to the file userinfo, which 
//stores the data into the database

	var username: $('#username').val();
        var password: $('#password').val();
        var amount: $('#amount').val();
        var   Aadhar_number: $('#Aadhar_number').val();
        var   Bank_A/c_number: $('Bank_A/c_number').val();
	
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("User_Signup").innerHTML=this.responseText;
		}
	}
	xmlhttp.open("POST","/var/www/userInfo.php?q="+username+"&p="+password+"&r="+amount+"&s="+Aadhar_number+"&t="+Bank_A/c_number,true);
	xmlhttp.send();
	
	clearInput();
}
);

$("#User_Signup").submit(function(){
	return false;
}
);

function clearInput(){
	$("#User_Signup: input").each(function(){
		$(this).val('');
	}
	);
}

function myAjax() {
	
      $.ajax({
           type: "POST",
           url: 'Desktop/userinfo.php',
           data:
           {
           	username: $('#username').val(),
           	password: $('#password').val(),
           	amount: $('#amount').val(), 
           	Aadhar_number: $('#Aadhar_number').val(),
           	Bank_A/c_number: $('Bank_A/c_number').val()
           },
           success:function(html) {
             alert(html);
           }

      });
 }
