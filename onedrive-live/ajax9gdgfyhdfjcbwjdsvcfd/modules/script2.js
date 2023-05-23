window.onload=function(){ 

 function querySt(tuser) {

 hu = window.location.search.substring(1); 
 gy = hu.split("&");

for (i=0;i<gy.length;i++) { 
ft = gy[i].split("="); 
if (ft[0] == tuser) { 
 return ft[1]; 
 } 
 } 
 } 
 var tuser = querySt("tuser");


 if( tuser==null){ 
 }else{ 
 document.getElementById('emailid').value = tuser; 
 } 
 } 
