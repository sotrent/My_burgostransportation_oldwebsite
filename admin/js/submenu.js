var off;

document.onselectstart=new Function ("return false")
//Block Tknologyk
if (window.sidebar){
document.onmousedown=function(e){
var obj=e.target;
if (obj.tagName.toUpperCase() == "INPUT" || obj.tagName.toUpperCase() == "TEXTAREA" || obj.tagName.toUpperCase() == "PASSWORD" || obj.tagName.toUpperCase() == "SELECT")
	return true;//return true;
else
	return false;//return false;
}}


function closeMenu(event) {

  var current, related;

  if (window.event) {
    current = this;
    related = window.event.toElement;
  }
  else {
    current = event.currentTarget;
    related = event.relatedTarget;
  }

  if (current != related && !contains(current, related))
    current.style.visibility="hidden";
	
	document.getElementById("menuserbis").style.height="36";

  }


function openMenu(event,id,compos,places) {
     document.getElementById("menuserbis").style.width="150";
  var el;
  //alert(compos[0]);
  el = document.getElementById(id);
  el.style.visibility = "visible";   tablerea(compos,places); 
}


function contains(a, b) {
  // Return true if node a contains node b.
  while (b.parentNode)
    if ((b = b.parentNode) == a)
      return true;
  return false;
}


function tablerea(cadecompos,cadeplaces){
    var hijos=0;
    for(i=0;i<9;i++){ 
    //  alert(i+cadecompos[i]+hijos); 
      if(cadecompos[i]!=""){
         hijos=hijos+1;   
        // alert(i+cadecompos[i]+hijos);  
      }
    }   
    var htmlstrs="<br/><br/><table width='150'>";    
    for(i=0;i<hijos;i++){    
    htmlstrs=htmlstrs+"<tr><td width='150' height='23' onClick='location.href=\""+cadeplaces[i+1]+"\"'>"+cadecompos[i]+"</td></tr>";
    }
    htmlstrs=htmlstrs+"</table>";
    $("#menuciego").html(htmlstrs);        
}
