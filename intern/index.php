<?php
include("register.php");
?>

<!DOCTYPE HTML>
<html>

<head>
        <title>
            APPLICATION FORM
        </title>
        <link rel="stylesheet" href="style.css">
        
</head>

    <body>
        <h1>APPLICATION FORM</h1>
        <div class="container">
        <form action="register.php" method="POST"> 
            <table>
                <tr>
                    <td>
                        <label for="name">Name</label>
                    </td>
                    <td>
                        <input type="text" name="name"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mail">Email</label>
                    </td>
                    <td>
                        <input type="text" name="mail"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address</label>
                    </td>
                    <td>
                        <input type="text" name="address"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="number">Phone Number</label>
                    </td>
                    <td>
                        <input type="number" name="number" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="event">Event Selection</label>
                    </td>
                    <td>
                        <input type="radio" value="b" name="event"/>Birthday party<br>
                                            <input type="radio" value="w" name="event"/>Wedding<br>
                                            <input type="radio" value="g" name="event"/>Gender reveal<br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pwd">Enter your password</label>
                    </td>
                    <td>
                        <input type="password" name="pwd" placeholder="Enter 8 length pass with *"/>
                    </td>
                </tr>
                
                <!-- <tr>
                    <td>
                        <label for="check"> Select your subjects</label>
                    </td>
                    <td>
                        <input type="checkbox" value="1" name="check"/>CSE<br/>
                        <input type="checkbox" value="2" name="check"/>ECE<br/>
                        <input type="checkbox" value="3" name="check"/>EEE<br/>
                        <input type="checkbox" value="4" name="check"/>MECH<br/>
                    </td>
                </tr> -->
                
            </table>
            <input type="submit" value="submit"/>
         </form></div>
    </body>
</html>