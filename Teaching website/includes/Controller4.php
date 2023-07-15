<!-- ***********************************************************************************
  Page Name  : Controller4.php
  Author     : Jose Hichez
  Your URL   : ocelot-aul.fiu/~jhich002
  Course     : CGS 4854 Online
  Program #  : Assignment 4
  Purpose    : Gets infomation and helps to save, delete, modify, find or clear info
  Due Date   : 11/17/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jose Hichez }..........
 ******************************************************************************* -->

<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>
  <head>
    <title>Controller4.php</title>
  </head>
          
  <body>
      
    <?php
                     
       //connecting to mysql 
       //echo "<h3>I am going to connect to mySql";
 
       //                                server               user          password  database     
       $connection = mysqli_connect("ocelot.aul.fiu.edu","fall20_jhich002","6186740","fall20_jhich002");
       if (mysqli_connect_errno())
       {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
       else
       {  
          //echo "<br>I have connected to mySql<br>";            
             
          // Change database to another name if needed
             
          $dbName="fall20_jhich002"; 
          $db_selected = mysqli_select_db( $connection, $dbName );
                      
          if (!$db_selected)
          {
             die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
          }
          else
          {
             //echo "I selected database : " . $db_selected . " " . $dbName . "<br></h3>" ;
                   
             //access to a table                    
             $tableName = "TableCus";
                      
             $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                     
             //if table does not exist, create it 
             if(!$query)
             {
                echo "The ".$tableName." does not exists<br>";
                        
                echo "<br>Creating table : ".$tableName."<br>";
                       
                $sql = "CREATE TABLE ".$tableName."(
                        Telephone VARCHAR(20) NOT NULL,
                        PRIMARY KEY(Telephone),
                        Email VARCHAR(30),
                        LastName VARCHAR(30),
                        FirstName VARCHAR(30),
                        Address VARCHAR(50),
                        City VARCHAR(10),
                        State VARCHAR (20),
                        Country VARCHAR(20),
                        Zip VARCHAR(10),
                        Age VARCHAR(8),
                        Coffee VARCHAR(10),
                        IT VARCHAR(2), 
                        CS  VARCHAR(2),
                        Robotics  VARCHAR(8),
                        Cyber  VARCHAR(11),
                        Comments VARCHAR(200)
                        )";
                                
                $result = mysqli_query( $connection, $sql );
                         
                //confirm table creation
                if ($result)
                {
                   echo "table ". $tableName." created<br>";
                }
                else
                {
                   die ("Can\'t create ". $tableName." ". mysqli_error() );
                }
                     
             }//if(!$query) if table does not exist, create it 
                        
          }//end if (!$db_selected) connecting to db
                
       }//end if (mysqli_connect_errno()) connecting to mysql

                    
       //extract the data inputed by the user creating global php fields 
       $Telephone    = $_POST['Telephone'];
       $Email        = $_POST['Email'];
       $LastName     = $_POST['LastName'];
       $FirstName    = $_POST['FirstName'];
       $Address      = $_POST['Address'];
       $City         = $_POST['City'];
       $State        = $_POST['State'];
       $Country      = $_POST['Country'];
       $Zip          = $_POST['Zip'];
       $Age          = $_POST['Age'];
       $Coffee       = $_POST['Coffee'];
       $IT           = $_POST['IT'];
       $CS           = $_POST['CS'];
       $Robotics     = $_POST['Robotics'];
       $Cyber        = $_POST['Cyber'];
       $Comments     = $_POST['Comments'];
           
                 
       $found = $_POST['found']; 
                      
/*      
       //verify that the data entered by the user is being received
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
*/                  
               
                        
       if ( $_POST['Find'] )
       { 
          include('Find.php');
       }
       else if ( $_POST['Save'] )
       { 
          include('Save.php');
       }
       else if ( $_POST['Modify'] )
       {  
          include('Modify.php');
       }
       else if ( $_POST['Delete'] )
       { 
          include('Delete.php');
       }
       else if ( $_POST['Clear'] )
       {
          include('Clear.php');
       }
       else
       { 
          echo "<br><h1> you pressed UNKOWN button</h1>";   
       }

       mysqli_close($connection); 

       include( "program4.php" );
        
    ?>
                 
  </body>

</html>