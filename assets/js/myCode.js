  $(document).ready(function(){
        $("#home-tapped").click(function(){
        $("#home").css("display", "block");
        $("#email").css("display","none");
        $("#Users").css("display","none");
        $("#Admins").css("display","none");
        $("#Tours").css("display","none");
        $("#Hotels").css("display","none");
        $("#Flights").css("display","none");
        $("#Cars").css("display","none");
        $("#Profile").css("display","none");

            });
        $("#Email-tapped").click(function(){
        $("#home").css("display", "none");
        $("#email").css("display","block");
        $("#Users").css("display","none");
        $("#Admins").css("display","none");
        $("#Tours").css("display","none");
        $("#Hotels").css("display","none");
        $("#Flights").css("display","none");
        $("#Cars").css("display","none");
        $("#Profile").css("display","none");
            });

         $("#Users-tapped").click(function(){
        $("#home").css("display", "none");
        $("#email").css("display","none");
        $("#Users").css("display","block");
        $("#Admins").css("display","none");
        $("#Tours").css("display","none");
        $("#Hotels").css("display","none");
        $("#Flights").css("display","none");
        $("#Cars").css("display","none");
        $("#Profile").css("display","none");
            });

          $("#Admins-tapped").click(function(){
        $("#home").css("display", "none");
        $("#email").css("display","none");
        $("#Users").css("display","none");
        $("#Admins").css("display","block");
        $("#Tours").css("display","none");
        $("#Hotels").css("display","none");
        $("#Flights").css("display","none");
        $("#Cars").css("display","none");
        $("#Profile").css("display","none");
            });

           $("#Tours-tapped").click(function(){
        $("#home").css("display", "none");
        $("#email").css("display","none");
        $("#Users").css("display","none");
        $("#Admins").css("display","none");
        $("#Tours").css("display","block");
        $("#Hotels").css("display","none");
        $("#Flights").css("display","none");
        $("#Cars").css("display","none");
        $("#Profile").css("display","none");
            });

            $("#Hotels-tapped").click(function(){
        $("#home").css("display", "none");
        $("#email").css("display","none");
        $("#Users").css("display","none");
        $("#Admins").css("display","none");
        $("#Tours").css("display","none");
        $("#Hotels").css("display","block");
        $("#Flights").css("display","none");
        $("#Cars").css("display","none");
        $("#Profile").css("display","none");
            });

             $("#Flights-tapped").click(function(){
        $("#home").css("display", "none");
        $("#email").css("display","none");
        $("#Users").css("display","none");
        $("#Admins").css("display","none");
        $("#Tours").css("display","none");
        $("#Hotels").css("display","none");
        $("#Flights").css("display","block");
        $("#Cars").css("display","none");
        $("#Profile").css("display","none");
            });

         $("#Cars-tapped").click(function(){
        $("#home").css("display", "none");
        $("#email").css("display","none");
        $("#Users").css("display","none");
        $("#Admins").css("display","none");
        $("#Tours").css("display","none");
        $("#Hotels").css("display","none");
        $("#Flights").css("display","none");
        $("#Cars").css("display","block");
        $("#Profile").css("display","none");
            });

         $("#profile-tapped").click(function(){
        $("#home").css("display", "none");
        $("#email").css("display","none");
        $("#Users").css("display","none");
        $("#Admins").css("display","none");
        $("#Tours").css("display","none");
        $("#Hotels").css("display","none");
        $("#Flights").css("display","none");
        $("#Cars").css("display","none");
        $("#Profile").css("display","block");
            });

        
         $("#edit-button").click(function(){
        $("#home").css("display", "none");
        $("#email").css("display","none");
        $("#Users").css("display","none");
        $("#Admins").css("display","none");
        $("#Tours").css("display","none");
        $("#Hotels").css("display","none");
        $("#Flights").css("display","none");
        $("#Cars").css("display","none");
        $("#Profile").css("display","block");
            });
         $('#Reset').click(function(){
            $('#password-section').css("display","block");
            $('#data-section').css("display","none");
         });

         $('#Save').click(function(){
            $('#password-section').css("display","none");
            $('#data-section').css("display","block");
         })
     });

  // function deleteBook(tourId){
  //   <?php 
  //       $conn=mysqli_connect("localhost","root","","oceanstars");
  //                if($conn->connect_error){
  //              die("Connection Failed:".$conn->connect_error);
  //                    }
                                   
  //        $result = mysqli_query($conn, "DELETE FROM `booked` WHERE `tourID`='".tourID."'");

         

  //   ?>
  // }

  function resetpass(){
    var old=document.getElementById('oldpassword').value;
    var newp=document.getElementById('password').value;
    var newp2=document.getElementById('password2').value;
    var email=document.getElementById('emaill'),value;
    var Fname=document.getElementById('Fname').value;
    if(newp==newp2){
            var obj ={"oldPassword":old,"newPassword":newp,"Fname":Fname};
            window.alert(old);
            var db_param=JSON.stringify(obj);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
      //var myObj=JSON.parse(this.responseText);
      //window.alert(myObj[0].Lname);
       // document.getElementById('myCarousel').innerHTML = this.responseText;
    window.alert(this.responseText);
             } 
             };
            xhttp.open("GET", "editInfo.php? n ="+db_param, true);
            xhttp.send();

    }




}

function updateinfo(){
    var Fname=document.getElementById('Fname').value;
    var Lname=document.getElementById('Lname').value;
    var birthdate=document.getElementById('birthdate').value;
    var phone=document.getElementById('phone-no').value;
    var email=document.getElementById("email").value;
  
            var obj ={"Fname":Fname,"Lname":Lname,"birthdate":birthdate,"phone":phone,"email":email};
            //window.alert(old);
            var db_param=JSON.stringify(obj);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
      //var myObj=JSON.parse(this.responseText);
      //window.alert(myObj[0].Lname);
       // document.getElementById('myCarousel').innerHTML = this.responseText;
    window.alert(this.responseText);
             } 
             };
            xhttp.open("GET", "editInfo.php?y="+db_param, true);
            xhttp.send();

    }




