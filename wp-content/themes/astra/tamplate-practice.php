<?php

/*
Template Name: Practice page
*/
// echo " hello";
get_header();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #heading{
            /* text-align: center; */
        }
        #mainform{
            border: 2px solid red;
            margin: 100px 400px;
            padding: 50px 200px;
            border-radius: 5px;
            columns: 300px;    
        }
        #first{
            
            width: 500px;
        } 
        #second{
            
            width: 500px;
        } 


        /* PASSWORD */
        
        input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
 
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 10px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}  
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type=number] {
  -moz-appearance: textfield;
}
    </style>
   
</head>
<body>
    <?php 
    //include 'dbcon.php';
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
    if(isset($_POST['submit'])){
       // $id=1;
        $uname=$_POST['uname'];
        $lname= $_POST['lname'];
        $email= $_POST['email']; 
         $num= $_POST['num'];
        $gender= $_POST['gender'];
        $filename = $_FILES['bb']['name'];
        $passwrd1= $_POST['passwrd1'];
        $cpassword1= $_POST['cpassword'];
        $pass=password_hash( $passwrd1, PASSWORD_BCRYPT);
        $cpass=password_hash( $cpassword1, PASSWORD_BCRYPT);

        
       //  $add= $_POST['add'];
        // $email=mysqli_real_escape_string($con, $_POST['email']);
        // $num=mysqli_real_escape_string($con, $_POST['num']);
        // $gender=mysqli_real_escape_string($con, $_POST['gender']);
        // $address=mysqli_real_escape_string($con, $_POST['address']);
        

        $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
        // valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif","pdf","php");
       
        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
       
        // Upload files and store in database
        if(move_uploaded_file($_FILES["bb"]["tmp_name"],'upload/'.$filename)){
          // Image db insert sql
        
        //  echo "dasdasdasdad";
        }
          else{
            echo 'Error in uploading file - '.$_FILES['bb']['name'].'<br/>';
          }
        }

        $emailquery="select * from formdetail where email='$email'";
        $query= mysqli_query($conn, $emailquery);
        $emailcount=mysqli_num_rows($query);
       // print_r($emailcount);
        if($emailcount>0 ){
            echo"email already exist";
        }

        else { 
       // $sql = "INSERT INTO formdetail(uname, lname, email, num, gender,passwor,cpassword)VALUES ('$uname','$lname','$email','$num','$gender','$passwrd1','$cpassword1')";
        $sql= "INSERT INTO `formdetail`(`uname`, `lname`, `email`, `num`, `gender`,`fname`, `passwor`, `cpassword`) VALUES ('$uname','$lname','$email','$num','$gender','$filename','$pass','$cpass')";
           
        if ($conn->query($sql) === TRUE) { 
            //echo "New record created successfully";
       }
       else {
        //echo "Error..: " . $sql . "<br>" . $conn->error;
        //echo "password are not matching";
      }   
     
    
    
    }
          
        }
    

    ?>

    <div id="mainform">
    <h2 id="heading">Login Form</h2>
    <br>
        <form action="" method="POST"  enctype='multipart/form-data'>
            <div id="first"> 
                <label for="">Name</label>
                <input type="text" class="js-name" name="uname">
            </div>
            <div>
            <label for="">Last Name</label>
            <input type="text" class="js-name" name="lname">
            </div> 
            <div> <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <div> <label for="">Phone</label>
                <input type="tel" maxlength="10" name="num">
            </div>
            <div> <label for="">Gender</label>
                M<input type="radio" value="m" name="gender">
                F<input type="radio" value="g" name="gender">
            </div>
            <div>
            <label for="">Upload File</label>
            <input type="file" name="bb" id="file" multiple>
               
            </div>
            <div> <label for="">Password</label>
                <input type="password"  id="psw" name="passwrd1" onkeyup='check();' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
            </div>
            <div><label for="">CPassword</label>
                <input type="password" type="password"   id="confirm_password"   name="cpassword" onkeyup='check();' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                <span id='message1'></span>
              </div>
              
            

            <div>
                <button type="submit" onclick="formalert()" name="submit">submit</button>
                
            </div>
           
        </form>


        <div id="message">
        
  <h6>Password must contain the following:</h6>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
		


<!-- name have only character -->

        <script>

    function alphaOnly() {
    let nameInput = document.querySelectorAll('.js-name');
      nameInput.forEach((input) => {
  
        input.addEventListener('keydown', (e) => {
          let charCode = e.keyCode;
  
          if ((charCode >= 65 && charCode <= 90) || charCode == 8 || charCode == 32) {
            null;
          } else {
            e.preventDefault();
          }
        });
      });
    }



// password validation




 var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

var check = function() {
  // if (document.getElementById('confirm_password').value ==
  //   document.getElementById('psw').value) {
  //   document.getElementById('message').style.color = 'green';
  //   document.getElementById('message').innerHTML = 'matching';
  // } else {
  //   document.getElementById('message').style.color = 'red';
  //   document.getElementById('message').innerHTML = 'not matching';
  // }
        var password = document.getElementById('confirm_password').value;
        var confirmPassword = document.getElementById('psw').value;
        if (password == confirmPassword) {
          document.getElementById('message1').style.color = 'blue';
          document.getElementById('message1').innerHTML = 'Match';
           // alert("Passwords do not match.");
           // return false;
        }
        else{
        //return true;
          document.getElementById('message1').style.color = 'red';
          document.getElementById('message1').innerHTML = 'Not Match';
        }
}

function formalert(){
  alert("form succesfully submited");
}
Validate();




        </script>
</body>
</html>
<?php
get_footer();
?>