<!-- ***********************************************************************************
  Page Name  : Modify.php
  Author     : Jose Hichez
  Your URL   : ocelot-aul.fiu/~jhich002
  Course     : CGS 4854 Online
  Program #  : Assignment 4
  Purpose    : Modifies found information
  Due Date   : 11/17/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jose Hichez }..........
 ******************************************************************************* -->

<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>

  <body>
    
    <!--h3>this is Modify.php</h3-->
        
    <?php
        
       $found = $_POST['found']; 
               
/*     
       echo "modify  found = [" . $found . "]<br>";
        
       echo $Telephone."<br>"; 
       echo $Email."<br>";
       echo $LastName."<br>";
       echo $FirstName."<br>";  
       echo $Address."<br>"; 
       echo $City."<br>";
       echo $State."<br>";
       echo $Country."<br>"; 
       echo $Zip."<br>"; 
       echo $Age."<br>";
       echo $Coffee."<br>";
       echo $IT."<br>";
       echo $CS."<br>"; 
       echo $Robotics."<br>"; 
       echo $Cyber."<br>";
       echo $Comments."<br>";  
              
       echo "<br>modify found = [" . $found . "]";
*/            
           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       {               
                  
          $query = "UPDATE TableCus 
                    SET FirstName     =  '$FirstName',  
                        LastName      =  '$LastName',
                        Email         =  '$Email',
                        Address       =  '$Email',
                        City          =  '$Email',
                        State         =  '$Email',
                        Country       =  '$Email',
                        Zip           =  '$Email',
                        Age           =  '$Age',
                        Coffee        =  '$Coffee',
                        IT            =  '$IT',
                        CS            =  '$CS',
                        Robotics      =  '$Robotics',
                        Cyber         =  '$Cyber',
                        Comments      =  '$Comments'  
                                 
                   WHERE Telephone = '$Telephone'";
                       
          $sql = mysqli_query( $connection,$query );
                                              
          if ($sql)
          {
             $message ="<span style=\"color: blue;\">RECORD $Telephone MODIFIED</span><br\>";
          }   
          else
          {
             //echo "Problem updating record. MySQL Error: " . mysqli_error($connection);
             $message ="<span style=\"color: red;\">RECORD $Telephone CAN NOT BE MODIFIED, FIND IT FIRST</span><br\>";
          }
             
       }   
       else
       {
          $message ="<span style=\"color: red;\">FIND THE RECORD BEFORE MODIFYING IT</span><br\>";
       }
           
    ?>
            
  </body>
                
</html>