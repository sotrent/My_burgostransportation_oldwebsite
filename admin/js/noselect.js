document.onselectstart=new Function ("return false");
if (window.sidebar){
document.onmousedown=function(e){
var obj=e.target;
if (obj.tagName.toUpperCase() == "INPUT" || obj.tagName.toUpperCase() == "TEXTAREA" || obj.tagName.toUpperCase() == "PASSWORD")
return true;
else
return false;
}}