<html>
<head>
    <title>Registration page </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="main">
        <div class="inner">
            <div class="welcome">
                <h1>Registration Form </h1
            </div>
            <div class="registration_options">
                <form action="" method="POST">
                    <table class="table">
                        <tr>
                            <td>
                                Enter your First name 
                            </td>
                            <td>
                                <input type="text" name="name" id="1">
                            </td>
                        </tr>
                        <tr>
						
                            <td>
                                Enter your Last name
                            </td>
                            <td>
                                <input type="txt" name="name1" id="2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Enter your password here
                            </td>
                            <td>
                                <input type="password" name="pass" id="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Enter your Age
                            </td>
                            <td>
                                <input type="text" name="age" id="3">
                            </td>
                        </tr>
						<tr>
                            <td>
                                Enter your Address
                            </td>
                            <td>
                                <input type="text" name="addr" id="4">
                            </td>
                        </tr>
						<tr>
						    <td> 
						        Enter your Gender
							</td>
                            <td>
                                <input type="radio" name="gender"  value="male" id="male" >Male
    
                            </td>
                            <td>
                                <input type="radio" name="gender" value="female" id="female" > Female 
                            </td>
                        </tr>
						     <td> 
							      Enter your Lnguages
						     </td>
							       <td> 
									     <input type="checkbox" name="lang[]"  value="php" id="php" >php
									</td>
                               <td>
	                              <input type="checkbox" name="lang[]" value="C" id="C"> C
								</td>
                                     <td>
									      <input type="checkbox" name="lang[]" value="Cpp" id="Cpp"> Cpp
									</td>
						
                    </table>
                    <div class="btn">
                        <input type="submit" value="Submit"  name="submit" id="save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php
if(isset( $_POST["name"])){


    $firstName = $_POST["name"];
    $lastName = $_POST["name1"];
    $age = $_POST["age"];
    $address = $_POST["addr"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : 'Not specified';
    $languages = isset($_POST["lang"]) ? implode(", ",  $_POST["lang"]) : 'None';


    echo "<h2><u>Registration Successful</u></h2><br>";
    echo "<p>First Name: $firstName</p>";
    echo "<p>Last Name: $lastName</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Address: $address</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Languages Known: $languages</p>";
} 
?>