<!-- ***********************************************************************************
  Page Name  : Save.php
  Author     : Jose Hichez
  Your URL   : ocelot-aul.fiu/~jhich002
  Course     : CGS 4854 Online
  Program #  : Assignment 4
  Purpose    : Saves information
  Due Date   : 11/17/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jose Hichez }..........
 ******************************************************************************* -->

<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>
    
  <body>
     
    <!--br><h3>this is Save.php</h3><br-->     
     
    <?php

   /*
       echo $Telephone."<br>"; 
       echo $Email."<br>";
       echo $LastName."<br>";
       echo $FirstName."<br>";  
       echo $Address."<br>"; 
       echo $City."<br>";
       echo $State."<br>";
       echo $Country."<br>"; 
       echo $Zip."<br>"; 
       echo $Coffee."<br>";
       echo $Age."<br>";
       echo $IT."<br>";
       echo $CS."<br>"; 
       echo $Robotics."<br>"; 
       echo $Cyber"."<br>";
       echo $Comments."<br>"; 
      
       echo "inserting record into table ".$tableName."<br>";
    */         
                          
       $Telephone=trim($Telephone);
       if(strlen($Telephone)>0)           
       {   
          $sql="INSERT INTO TableCus (
                  Telephone,
                  Email,
                  LastName,
                  FirstName,
                  Address,
                  City,
                  State,
                  Country,
                  Zip,
                  Coffee,
                  Age,
                  IT,
                  CS,
                  Robotics,
                  Cyber,
                  Comments
                  
               )
               VALUES
               (       
                  '$Telephone',
                  '$Email',
                  '$LastName',
                  '$FirstName',
                  '$Address',
                  '$City',
                  '$State',
                  '$Country',
                  '$Zip',
                  '$Coffee',
                  '$Age',
                  '$IT',
                  '$CS',
                  '$Robotics',
                  '$Cyber',
                  '$Comments'
                        
               )";
                
                  
          if (mysqli_query($connection, $sql)) 
          {
             //echo "<br>New record created successfully";
             $message ="<span style=\"color: blue;\">RECORD $Telephone ADDED</span><br\>";
          } 
          else
          {
             //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
             $message ="<span style=\"color: red;\">RECORD $Telephone ALREADY EXISTS</span><br\>";
          }
           
       }//end if(strlen($Telephone)>0)                      
       else
       {
          $message ="<span style=\"color: red;\">RECORD NOT ADDED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
       } 
      ?>       
  </body>

</html>
