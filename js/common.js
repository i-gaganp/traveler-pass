var EmailP;
var NameP;
var SrcP;
var DesP;
var PassExp;
var CMail;

function pLogin(){
    var PLmail=$("#PLmail").val();
    var PLPass=$("#PLPass").val();

    $.ajax({
        type:"POST",
        url: "passLogin.php",
        data: {'PLmail': PLmail,
               'PLPass': PLPass},
               success:function(dataString){
                   console.log(dataString);
                   if(dataString=="Login success")
                   {
                       alert("Welcome traveler!")
                    window.location.replace("passeneger.php");
                   }
                   else
                   {
                       alert("Invalid Usersname/Password");
                   }
               },error:function(i){
                   console.log(i);
               }
           })
  }


function conducLogIn(){
    var InputCEmail=$("#InputCEmail").val();
    var InputCPassword=$("#InputCPassword").val();

    $.ajax({
        type:"POST",
        url:"conducLogin.php",
        data: {'InputCEmail': InputCEmail,
               'InputCPassword':InputCPassword},
               success:function(dataString){
                   if(dataString=="Login success")
                   {
                       alert("Welcome!")
                    window.location.replace("./conNewJourney.php")
                   }
                   else
                   {
                       alert("Invalid Username/Password");
                   }
               
              },error:function(d){
                  console.log(d);
              }
          })
    

}



function conductorSignUp(){
    var Cfirstname=$("#CFirstName").val();
    var Clastname=$("#CLastName").val();
    var Cemail=$("#CEmail").val();
    var Cpassword=$("#CPassword").val();
    var Caddress=$("#CAddress").val();
    var Cmobileno=$("#CMobileNo").val();
    var CCity=$("#CCity").val();
    var CState=$("#CState").val();
    var CZip=$("#CZip").val();
    
    
    $.ajax({  
        type: "POST",  
        url: "conducSignup.php",  
        data: {'CFirstName': Cfirstname,
        'CLastName': Clastname,
        'CEmail': Cemail,
        'CPassword':Cpassword,
        'CAddress':Caddress,
        'CMobileNo': Cmobileno,
        'CCity':CCity,
        'CState':CState,
        'CZip':CZip},  
        success: function(dataString) {
            window.location.replace("conductorlogin.php");
        },
        error:function(g){
            console.log(g);
        }
    }); 
}

function passengerSignUp(){
    var firstname=$("#inputFirstName").val();
    var lastname=$("#inputLastName").val();
    var email=$("#inputEmail").val();
    var password=$("#inputPassword").val();
    var address=$("#inputAddress").val();
    var mobile=$("#inputMobileNo").val();
    var Pcity=$("#inputPcity").val();
    var state=$("#inputState").val();
    var zip=$("#inputZip").val();
    


    
    $.ajax({  
        type: "POST",  
        url: "passsignup.php",  
        data: {'firstName': firstname,
        'lastname': lastname,
        'email': email,
        'password':password,
        'address':address,
        'mobile': mobile,
        'city':Pcity,
        'state':state,
        'zip':zip},  
        success: function(dataString) {
            window.location.replace("newPass.php");
        },
        error: function(e){
            console.log(e);
        }  
    }); 
}

function loadQRCode(){
    var PassMail=$('#user').val();
    $.ajax({  
        type: "POST",  
        url: "getUserdata.php",  
        data: {
        'PassMail':PassMail},  
        success: function(dataString) {  
            var obj= (dataString);
                var gg=JSON.parse(obj);
                console.log(gg);
            getQRImage(dataString);
           
        },
        error: function(e){
            console.log(e);
        }  
    });
}

function getQRImage(data){
    
    console.log(data);
    $('#user_qr').attr("src","https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl="+data);
}

function conSignupRed()
       {

       }       
       
function passInfo()
       {
           var passInfo=$('#user').val();

           $.ajax({
               type: "POST",
               url: "getUserdata.php",
               data: {'PassMail':passInfo},
               success: function(dataString){
                    var obj=JSON.parse(dataString);
                   var udata=obj.data[0];
                   console.log(dataString);
                    EmailP=udata.PassMail;
                    NameP=udata.PassengerName;
                    SrcP=udata.Source;
                    DesP=udata.Destination;
                    PassExp=udata.PassExp;
                    $('#promail').html("Email : "+EmailP);
                    $('#proname').html("Paseenger Name : "+NameP);
                    $('#prosrc').html("Source : "+SrcP);
                    $('#prodes').html("Destination : "+DesP);
                    $('#PassExp').html("Pass Expiry : "+PassExp);
                    

               }
               ,
               error:function(r){
                   console.log(r);
                   
               }
           })
       }

       function recentJour()
       {
           var CMail=$('#user').val();

           $.ajax({
               type: "POST",
               url: "getconducData.php",
               data: {'CMail':CMail},
               success: function(dataString){
                    var obj=JSON.parse(dataString);
                   var udata=obj.data[0];
                   console.log(dataString);
                    NameP=udata.PassengerName;
                    SrcP=udata.Source;
                    DesP=udata.Destination;
                    Btime=udata.BoardingTime;
                    $('#pname').html("Paseenger Name : "+NameP);
                    $('#psrc').html("Source : "+SrcP);
                    $('#pdes').html("Destination : "+DesP);
                    $('#Btime').html("Boarding Time : "+Btime);
                    

               }
               ,
               error:function(l){
                   console.log(l);
                   
               }
           })
       }
       
function passPayment()
{
    var PassMail=$("#PassMail").val();
    var PassengerName=$("#PassengerName").val();
    var Psrc=$("#Psource").val();
    var Pdes=$("#Pdestination").val();
    var CardNo=$("#CardNo").val();

    $.ajax({
        type: "POST",
        url: "Passback.php",
        data: {'PassMail':PassMail,
               'PassengerName':PassengerName,
               'Psource':Psrc,
               'Pdestination':Pdes,
               'CardNo':CardNo},
               success: function(dataString){
                   alert("Paid Successfully");
                   window.location.replace("passenegerlogin.php");
               },
               error:function(x){
                   console.log(x);
               }
    })
}       

function OwnPass()
{
    var PassMail=$("#PassMail").val();
    var PassengerName=$("#PassengerName").val();
    var Psrc=$("#Psource").val();
    var Pdes=$("#Pdestination").val();
    var CardNo=$("#CardNo").val();

    $.ajax({
        type: "POST",
        url: "Passback.php",
        data: {'PassMail':PassMail,
               'PassengerName':PassengerName,
               'Psource':Psrc,
               'Pdestination':Pdes,
               'CardNo':CardNo},
               success: function(dataString){
                   alert("Paid Successfully");
               },
               error:function(j){
                   console.log(j);
               }
    })
}

function OtherPass()
{
    var PassMail=$("#PassMail").val();
    var PassengerName=$("#PassengerName").val();
    var Psrc=$("#Psource").val();
    var Pdes=$("#Pdestination").val();
    var CardNo=$("#CardNo").val();

    $.ajax({
        type: "POST",
        url: "Passback.php",
        data: {'PassMail':PassMail,
               'PassengerName':PassengerName,
               'Psource':Psrc,
               'Pdestination':Pdes,
               'CardNo':CardNo},
               success: function(dataString){
                   alert("Paid Successfully");
               },
               error:function(k){
                   console.log(k);
               }
    })
}

function ADLogin(){
    var ADmail=$("#ADmail").val();
    var ADPass=$("#ADPass").val();

    $.ajax({
        type:"POST",
        url: "ADbLogin.php",
        data: {'ADmail': ADmail,
               'ADPass': ADPass},
               success:function(dataString){
                   console.log(dataString);
                   alert(dataString);
                   window.location.replace("ConductorSignup.php");
               },error:function(i){
                   console.log(i);
               }
           })
  }

function adminPop()
{
    alert("New Conductor SignUp needs Admin Login.");
}  


