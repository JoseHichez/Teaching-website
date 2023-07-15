<!-- ***********************************************************************************
  Page Name  : pgm2.php
  Author     : Jose Hichez
  Your URL   : ocelot-aul.fiu/~jhich002
  Course     : CGS 4854 Online
  Program #  : Assignment 2
  Purpose    : Display program2
  Due Date   : 10/12/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jose Hichez }..........
 ******************************************************************************* -->


<!DOCTYPE html>   <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                                    <!-- Beginning of html code-->
   <head>
      <title>HichezJoseProgram4</title>          <!--The title of the page -->   
   </head>       
   <body style="margin: 0px; height: 100px;">  
   <?php include('hichez_header.php') ?>  <!-- Calling the header-->
   <tr><td> &nbsp; </td> </tr>    
   <?php  include('mainMenu.php' );  ?>   <!--Calling the mainMenu.php-->
   <tr><td> &nbsp; </td> </tr>  
   <?php    
      if( strlen(trim($found)) > 0 )
      {  
         //echo "<br>Leave it alone  it means that find.php was already executed  Found = [" . $found . "]";
         //leave it alone it means that find.php was already executed
      }
      else
      {
         $found = "";       }
   ?>
   <div>
      <form method="post" action="Controller2.php"> 
         <div align="center" style="font-size: 20px;"></b></div>
         <br>
         <table style="width: 50%; margin: 0px auto; padding-right: 10%;">
                   
            <!--  text type input  -->
            <tr>
               <td style="width: 5%; text-align: left;">Telephone &nbsp; </td> 
               <td style="width: 20%;">
                  <input type="text" name="Telephone" value="<?php echo $Telephone ?>" style="width: 100%;">
               </td>
            </tr>
           
           <tr>
               <td style="width: 5%; text-align: left;">Email &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="Email" value="<?php echo $Email ?>" style="width: 100%;">
               </td>
            </tr>

           <tr>
               <td style="width: 5%; text-align: left;">Last Name &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="LastName" value="<?php echo $LastName ?>" style="width: 100%;">
               </td>
            </tr>  

           <tr>
               <td style="width: 5%; text-align: left;">First Name &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="FirstName" value="<?php echo $FirstName ?>" style="width: 100%;">
               </td>
            </tr>  

           <tr>
               <td style="width: 5%; text-align: left;">Address &nbsp; </td>
               <td style="width: 20%;">
                  <input name="Address" value="<?php echo $Address ?>" style="width: 100%;">
               </td>
            </tr>

           <tr>
               <td style="width: 5%; text-align: left;">City &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="City" value="<?php echo $City ?>" style="width: 100%;">
               </td>
            </tr>  

           <tr>
               <td style="width: 5%; text-align: left;">State &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="State" value="<?php echo $State ?>" style="width: 100%;">
               </td>
            </tr>

           <tr>
               <td style="width: 5%; text-align: left;">Country &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="Country" value="<?php echo $Country ?>" style="width: 100%;">
               </td>
            </tr>  
 
           <tr>
               <td style="width: 5%; text-align: left;">Zip &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="Zip" value="<?php echo $Zip ?>" style="width: 100%;">
               </td>
            </tr>
            <tr><td> &nbsp; </td> </tr>   
             
            <!--  textarea box  -->
            <tr>
               <td style="width: 5%; text-align: left;">Comments &nbsp; </td>
               <td style="width: 20%;text-align: left;">
                 <textarea name="Comments" rows="5" cols="42">
                   <?php echo $Comments ;?>
                 </textarea><br><br>
               </td>
            </tr>
            <tr><td> &nbsp; </td> </tr>  


            <!-- CheckBoxes -->
            <tr>
              <td style="width: 5%; text-align: left;">Major &nbsp; </td>
              <td style="width: 20%;text-align: left;">
                <table>
                  <tr>                                    
                    <td><input type="checkbox" name="IT"
                      <?php if ($IT == "IT") echo checked;?>  value="IT" > IT&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </td>
                       
                    <td><input type="checkbox" name="CS"
                      <?php if ($CS == "CS") echo checked;?>  value="CS" > CS &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                     
                    <td><input type="checkbox" name="Robotics"
                      <?php if ($Robotics == "Robotics") echo checked;?>   value="Robotics" > Robotics &nbsp; &nbsp; </td>

                    <td><input type="checkbox" name="Cyber"
                      <?php if ($Engineering == "Cyber") echo checked;?>  value="Cyber" > Cyber  </td>
                  </tr>      
                </table>
              </td>
            </tr>
                                       
            <!--  radio buttons  -->
            <tr>
               <td style="width: 5%; text-align: left;">Phone &nbsp; </td>
               <td style="width: 20%; text-align: left;">
                  <table>
                     <tr>
                       <td text-align: left>
                         <input type="radio" <?php if ($Phone== "Apple")   echo "Apple"; ?>
                                name="Phone" value="Apple" > Apple &nbsp; 
                         <input type="radio" <?php if ($Phone== "Samsung") echo "checked"; ?>
                                name="Phone" value="Samsung" > Samsung 
                         <input type="radio" <?php if ($Phone== "Motorola")  echo "checked"; ?>
                                name="Phone" value="Motorola" > Motorola &nbsp; &nbsp;
                         <input type="radio" <?php if ($Phone== "Sony") echo "checked"; ?>
                                name="Phone" value="Sony" > Sony &nbsp; &nbsp;
                        </td>
                     </tr>
                  </table>
               </td>
            </tr>                            
            <tr><td> &nbsp; </td> </tr>  
            <!--  dropdown boxes -->
            <tr>
               <td style="width: 5%; text-align: left;">School &nbsp; </td>
               <td style="width: 20%; text-align: left;">
                   <select name="School" style="width: 100%"size="1";>
                      <option value="FIU" <?php if (School == "FIU") echo selected ?> >FIU   </option>
                      <option value="UM"    <?php if (School == "UM")    echo selected ?> >UM      </option>
                      <option value="UF"    <?php if (School== "UF")    echo selected ?> >UF      </option>
                      <option value="FSU" <?php if (School == "FSU") echo selected ?> >FSU  </option>
                   </select>
               </td>
            </tr>
           
            <tr><td> &nbsp; </td> </tr>                                                        
           
            <!--Message center-->
               
            <tr>
               <td style="width: 15%;"> </td>            
               <td style="width: 20%;" align=center>                
                   <?php echo $message ?>
               </td>
            </tr>                                    
                                               
            <!--  The submit buttons -->
            <tr>
               <td style="width: 15%;"> </td>            
               <td style="width: 20%;" align=center>
                  <input type="submit" name="Save"   value="Save">&nbsp; &nbsp;
                  <input type="submit" name="Find"   value="Find">&nbsp; &nbsp;            
                  <input type="submit" name="Modify" value="Modify">&nbsp; &nbsp;
                  <input type="submit" name="Delete" value="Delete">&nbsp; &nbsp;
                  <input type="reset"  name="ClearScreen"  value="ClearScreen">
                  <input type="hidden" name="found"  value="<?php echo $found ?>" >  
               </td>
            </tr>
            <tr><td> &nbsp; </td> </tr>
        
        

                          
         </table>
      </form> <!--closing form -->
   </div>
   <?php include('mainMenu.php') ?> 
   </body>                      <!--End of body -->
</html>                         <!--End of html code -->