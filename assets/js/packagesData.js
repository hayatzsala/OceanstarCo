var data={"tour":"0","flight":"0","car":"0","hotel":"0"};

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
  tourCard(objButton.id);
 //window.alert(objButton.id);
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

 function tourCard(tourID){
        data.tour=tourID;
        //window.alert(tourID);
        document.getElementById(tourID).style.backgroundColor = "red";

 }
  function flightCard(flightID){
    data.flight=flightID;
    //window.alert(flightID);
    document.getElementById(flightID).style.backgroundColor = "red";
 
 }
function hotelCard(hotelID){
  data.hotel=hotelID;
  //window.alert(hotelID);
  document.getElementById(hotelID).style.backgroundColor = "red";
  
 }
 function carCard(carID){
  data.car=carID;
  //window.alert(data.car);
  document.getElementById(carID).style.backgroundColor = "red";
  //window.alert(data.car);
 
 }
 function confirm(){
    if(data.flight==0 || data.hotel==0){
      window.alert("Please book a hotel and a flight : ");
    }
    else{
    var db_param=JSON.stringify(data);
    var xhttp = new XMLHttpRequest();
    // window.alert(obj.place);
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById('myServices').innerHTML = this.responseText;
    window.alert(this.responseText);
    data.car=0;
    data.flight=0;
    data.tour=0;
    data.hotel=0;

    } 
  };
  xhttp.open("GET", "card.php?c="+db_param, true);
  xhttp.send();
}
 }


