// console.log("Window Location : ",window.location);
const myKeysValues=window.location.search;
const urlParam = new URLSearchParams(myKeysValues);
const param1 = urlParam.get('message');
// console.log("Message is : ",param1);
if(param1=='existD'){
    alert("Given username, email or moblie number already exist.\nTry with another username,email or mobile number.");
    window.location="_signup_page.html";
}else if(param1=='accS'){
    alert("Account Created Successfully");
    window.location="_login_page.html";
}else if(param1=='sometW'){
    alert("Something is wrong , Please try again.");
    window.location="_signup_page.html";
}else if(param1=='passNM'){
    alert("Password Not Match.");
    window.location="_signup_page.html";
}else if(param1=='userNE'){
    alert("User not exist.");
    window.location="_signup_page.html";
}else if(param1=='passW'){
    alert("Wrong Password.")
    window.location="_login_page.html";
}else if(param1=='chS'){
    alert("Password Changed.")
    window.location="_login_page.html";
}else if(param1=='delS'){
    alert("Your Account Deleted.")
    window.location="_login_page.html";
}else if(param1=='LsW'){
    alert("Something is wrong.")
    window.location="_logout.php";
}else if(param1=='LpnM'){
    alert("Wrong Password.")
    window.location="_logout.php";
}else if(param1=='WUD'){
    alert("Wrong Details!")
    window.location="_logout.php";
}