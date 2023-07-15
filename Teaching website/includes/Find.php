<!-- ***********************************************************************************
  Page Name  : Find.php
  Author     : Jose Hichez
  Your URL   : ocelot-aul.fiu/~jhich002
  Course     : CGS 4854 Online
  Program #  : Assignment 4
  Purpose    : Finds information
  Due Date   : 11/17/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jose Hichez }..........
 ******************************************************************************* -->

<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>
                     
  <body>
                       
    <!--h3>this is Find.php</h3-->
                        
    <?php
         
/*      
       echo "Find.php Telephone = [".$Telephone."]<br>";       
       echo  $Email;
       echo  $LastName;
       echo  $FirstName;  
       echo  $Address; 
       echo  $City;
       echo  $State;
       echo  $Country; 
       echo  $Zip; 
       echo  $Comments;  
       echo  $IT 
       echo  $CS
       echo  $Robotics 
       echo  $Cyber;
       echo  $Coffee; 
       echo  $Age;            

       echo "find.php table : ".$tableName."<br>";

       echo "<br>find.php  found = [" . $found . "]";
       $found = $Telephone;
          
       echo "<br>find.php Found = Telephone = [" . $found . "]";               
*/           
                  
       //$sql="SELECT * FROM TableCus ORDER BY Telephone";
           
       $sql="SELECT * FROM TableCus where Telephone = '$Telephone'";
             
       if ($result=mysqli_query($connection,$sql))
       {
          //printf("Result of mysqli_query(connection,sql) = %d<br>", $result);
          
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
                   
          //printf("Result set has %d rows.\n",$rowcount);
             
                        
          while( $row = mysqli_fetch_array( $result ) )
          {
             $Telephone    = $row['Telephone'];     //primary key
             $Email        = $row['Email'];         //type="text"
             $LastName     = $row['LastName'];      //type="text"
             $FirstName    = $row['FirstName'];     //type="text"
             $Address      = $row['Address'];       //type="text"
             $City         = $row['City'];          //type="text"
             $State        = $row['State'];         //type="text"
             $Country      = $row['Country'];       //type="text"
             $Zip          = $row['Zip'];           //type="text"
             $Age          = $row['Age'];           //type="dropdown" 
             $Coffee       = $row['Coffee'];        //type="radio"
             $IT           = $row['IT'];            //type="checkbox"
             $CS           = $row['CS'];            //type="checkbox" 
             $Robotics     = $row['Robotics'];      //type="checkbox"
             $Cyber        = $row['Cyber'];         //type="checkbox"
             $Comments     = $row['Comments'];      //type="textarea"          
          }


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
       echo $Comments."<br>";  
       echo $IT."<br>";
       echo $CS."<br>"; 
       echo $Robotics."<br>"; 
       echo $Cyber"."<br>";
       echo $Coffee."<br>"; 
       echo $Age."<br>";
          
*/



          //printf("\ni am here in find.php\n [%s] [%s]", $Telephone, $FirstName );
          //echo "(".$Telephone." ".$FirstName.")";


          $Telephone=trim($Telephone); //take all front and back spaces out

                
          //if (mysqli_query($connection, $sql)) 
          if ( $rowcount )
          {
             $found = $Telephone;
             $message ="<span style=\"color: blue;\">RECORD $Telephone FOUND</span><br\>";
          } 
          else if( strlen($Telephone) ==0 )           
          {
             $message ="<span style=\"color: red;\">Telephone CAN NOT BE EMPTY</span><br>";
             //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
                  
             //clear data in variables       
             //$Telephone    = "";
             $Email        = "";
             $LastName     = "";
             $FirstName    = "";
             $Address      = "";
             $City         = "";
             $State        = "";
             $Country      = "";
             $Zip          = "";
             $Age          = "";
             $Coffee       = "";
             $IT           = "";
             $CS           = "";
             $Robotics     = "";
             $Cyber        = "";
             $Comments     = "";            
                      
             $found        = "";  
          }
          else 
          {
             $message ="<span style=\"color: red;\">RECORD $Telephone NOT FOUND</span><br>";
             //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
                  
             //clear data in variables       
             //$Telephone  = "";
             $Email        = "";
             $LastName     = "";
             $FirstName    = "";
             $Address      = "";
             $City         = "";
             $State        = "";
             $Country      = "";
             $Zip          = "";
             $Age          = "";
             $Coffee       = "";
             $IT           = "";
             $CS           = "";
             $Robotics     = "";
             $Cyber        = "";
             $Comments     = "";            
                      
             $found        = "";           
  
          }
             
      }
                 
   ?>

  </body>

</html> 
