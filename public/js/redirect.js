var seconds =6;
var url="/to_do";

function redirect(){
 if (seconds <=0){
 // redirect to new url after counter  down.
  window.location = url;
 }else{
  seconds--;
  document.getElementById("counter").innerHTML = "<p>welcome! you will be redirected in "+seconds+" seconds...</p>";
  setTimeout("redirect()", 1000)
 }
}
window.onload=redirect;