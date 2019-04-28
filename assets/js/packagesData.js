
function getPackages(){
  // window.alert('hello');
  var obj={"table":"tours"};
  var db_param=JSON.stringify(obj);
  
  var xhttp = new XMLHttpRequest();
   // var txt=document.createElement("button");
   // document.getElementById('content').appendChild(txt);
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //var myObj=JSON.parse(this.responseText);
      //window.alert(myObj[0].Lname);
      document.getElementById('myCarousel').innerHTML = this.responseText;
    
    } 
  };
  xhttp.open("GET", "test.php?x="+db_param, true);
  xhttp.send();
 }
 function checkreg(objButton){

  var xhttp = new XMLHttpRequest();
   var object=objButton.value;
   var obj={"table1":"hotels","place":objButton.value,"table2":"flights","table3":"cars"};
  var db_param=JSON.stringify(obj);
  // window.alert(obj.place);
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('myServices').innerHTML = this.responseText;
    
    } 
  };
  xhttp.open("GET", "others.php?y="+db_param, true);
  xhttp.send();
 }