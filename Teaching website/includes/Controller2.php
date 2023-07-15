<!-- ***********************************************************************************
  Page Name  : Controller2.php
  Author     : Jose Hichez
  Your URL   : ocelot-aul.fiu/~jhich002
  Course     : CGS 4854 Online
  Program #  : Assignment 2
  Purpose    : Display the input
  Due Date   : 10/12/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jose Hichez }..........
 ******************************************************************************* -->


<!DOCTYPE html>   <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->
<html>
  <head>
    <title>HichezJController2</title> <!-- The title of the page -->
  </head>  
       
  <body>
    <?php   
       //Extract data                         
       $Telephone = $_POST['Telephone'];
       $Email = $_POST['Email'];
       $LastName = $_POST['LastName'];
       $FirstName = $_POST['FirstName'];
       $Address = $_POST['Address'];
       $City = $_POST['City'];
       $State = $_POST['State'];
       $Country = $_POST['Country'];
       $Zip = $_POST['Zip'];
       $Comments = $_POST['Comments'];
       $IT = $_POST['IT'];
       $CS = $_POST['CS'];
       $Robotics = $_POST['Robotics'];
       $Cyber = $_POST['Cyber'];
       $Phone = $_POST['Phone'];
       $School = $_POST['School'];         
       $found = $_POST['found'];

       //Print output of extracted data
       echo "This is controller2.php"."<br>";
       echo "Called from Program 2"."<br>";
       echo "Telephone- $Telephone"."<br>";
       echo "Email- $Email"."<br>";
       echo "Last Name- $LastName"."<br>";
       echo "First Name- $FirstName"."<br>";  
       echo "Address- $Address"."<br>";
       echo "City- $City"."<br>";
       echo "State- $State"."<br>";
       echo "Country- $Country"."<br>";
       echo "Zip- $Zip"."<br>";
       echo "Comments- $Comments"."<br>";  
       echo "Major- $IT $CS $Robotics $Cyber"."<br>";
       echo "Phone- $Phone"."<br>";
       echo "School- $School"."<br>";

       //If Else statment to determine what submit button has been pressed   
       if ( $_POST['Save'] )
       {
          echo "You pressed the Save Button";
       }
       else if ( $_POST['Find'] )
       {
          echo "You pressed the Find Button";
       }
       else if ( $_POST['Modify'] )
       {  
          echo "You pressed the Modify Button";
       }
       else if ( $_POST['Delete'] )
       {
          echo "You pressed the Delete Button";
       }
       
    ?>

  </body>

</html>