function validation(){
	if(username()){
		if(userpass()){
			if(rPassword()){
				return true;

			}

		}

	}
	return false;

}
function username(){

  var name=document.getElementById("u_name").value;
  if(name.length <3){
  	document.getElementById("mname").style.color="red";
  		document.getElementById("mname").innerHTML="Inavalid!!!";
  		return false;
	}
	else{
		document.getElementById("mname").style.color="green";
  		document.getElementById("mname").innerHTML="Correct.";
  		return true;

	}
}
function userpass()
{
	var flag;
	var pass = document.getElementById("pass").value;


	if(pass.length>=0 && pass.length<=5)
	{
		flag=0;
		document.getElementById("mpass").style.color="red";
		document.getElementById("mpass").innerHTML ="Invalid!!!";
		return false;
	}
	else if(pass.length>=6 && pass.length<=10)
	{

		//document.getElementById("mpass").innerHTML ="Weak";
		var i=0;
		var count1=0;
		var count2=0;
		var temp;
		while(i<=pass.length){
			temp=pass.charAt(i);
			if(temp==temp.toUpperCase()){
				count1 =count1+1;
			}
			if(temp==temp.toLowerCase()){
				count2=count2+1;
			}
			i++;

		}
		if(count1>1 ){
			if(count2>1){

				flag=1;

			document.getElementById("mpass").style.color="yellow";
		    document.getElementById("mpass").innerHTML ="Medium";
		    return true;
		}

		}
		else{
			flag=0;
			document.getElementById("mpass").style.color="red";
			document.getElementById("mpass").innerHTML ="Weak";
			return false;
		}
		


		//document.getElementById("mfname").style.color="yellow";
		//document.getElementById("mpass").innerHTML ="<img src=yellow.jpg/>";
	}

	else if(pass.length>10)
	{
		
		var i=0;
		var count1=0;
		var count2=0;
		var temp;
		while(i<=pass.length){
			temp=pass.charAt(i);
			if(temp==temp.toUpperCase()){
				count1 =count1+1;
			}
			if(temp==temp.toLowerCase()){
				count2=count2+1;
			}
			i++;

		}
		if(count1>1 ){
			if(count2>1){
				flag=1;
			document.getElementById("mpass").style.color="green";
		    document.getElementById("mpass").innerHTML ="Strong";
		    return true;
		}

		}
		else{
			flag=1;
			document.getElementById("mpass").style.color="yellow";
		    document.getElementById("mpass").innerHTML ="Medium";
		    return true;
		}
	}
}
function rPassword(){
	var flag1;
	var pass = document.getElementById("pass").value;
	var pass1=document.getElementById("rpass").value;
	if(pass == pass1 && pass1.length !=0){
		document.getElementById("mRpass").style.color="green";
		document.getElementById("mRpass").innerHTML ="Password Matched.";
		flag1=1;
		return true;

		

	}
	else{

		document.getElementById("mRpass").style.color="red";
		document.getElementById("mRpass").innerHTML ="Password missmatched.";
		flag1=0;
		return false;
		
		
	}





}
