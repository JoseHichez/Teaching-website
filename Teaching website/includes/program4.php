<!-- ***********************************************************************************
  Page Name  : program4.php
  Author     : Jose Hichez
  Your URL   : ocelot-aul.fiu/~jhich002
  Course     : CGS 4854 Online
  Program #  : Assignment 4
  Purpose    : Display program 4
  Due Date   : 11/17/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jose Hichez }..........
 ******************************************************************************* -->


<!DOCTYPE html>   <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                                                                         <!-- Beginning of html code-->
   <head>
      <title>HichezJoseProgram4</title>                                        <!--The title of the page -->   
   </head>       
   <body style="margin: 0px; height: 100px;">  
   <?php include('hichez_header.php') ?>                                       <!-- Calling the header-->
   <tr><td> &nbsp; </td> </tr>    
   <?php  include('mainMenu.php' );  ?>                                        <!--Calling the mainMenu.php-->
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
      <form method="post" action="Controller4.php"> 
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
             
            <!--  dropdown boxes -->
            <tr>
               <td style="width: 5%; text-align: left;">Age &nbsp; </td>
               <td style="width: 20%; text-align: left;">
                   <select name="Age" style="width: 100%"size="1";>
                      <option value=" " <?php if ($Age == " ") echo selected ?> > </option>
                      <option value="Under_20" <?php if ($Age == "Under_20") echo selected ?> >Under 20   </option>
                      <option value="20-40"    <?php if ($Age == "20-40")    echo selected ?> >20-30      </option>
                      <option value="41-60"    <?php if ($Age == "41-60")    echo selected ?> >31-40      </option>
                      <option value="Above_60" <?php if ($Age == "Above_60") echo selected ?> >Above 60   </option>
                   </select>
               </td>
            </tr>
            
            <tr><td> &nbsp; </td> </tr>              
  
               
            <!--  radio buttons  -->
            <tr>
               <td style="width: 5%; text-align: left;">Coffee &nbsp; </td>
               <td style="width: 20%; text-align: left;">
                  <table>
                     <tr>
                       <td text-align: left> 
                         <input type="radio" <?php if ($Coffee == "Light")   echo "checked"; ?> 
                                name="Coffee" value="Light" > Light &nbsp; &nbsp;
                         <input type="radio" <?php if ($Coffee == "Cuban") echo "checked"; ?> 
                                name="Coffee" value="Cuban" > Cuban &nbsp; &nbsp;
                         <input type="radio" <?php if ($Coffee == "Sweet")   echo "checked"; ?> 
                                name="Coffee" value="Sweet" > Sweet &nbsp; &nbsp; &nbsp; &nbsp;
                         <input type="radio" <?php if ($Coffee == "Decaf") echo "checked"; ?> 
                                name="Coffee" value="Decaf" > Decaf &nbsp; &nbsp;

                        </td>
                     </tr>
                  </table>
               </td>
            </tr>
                             
 
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
                      <?php if ($Cyber == "Cyber") echo checked;?>  value="Cyber" > Cyber  </td>
                  </tr>      
                </table>
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
                                                       
   
            <!-- $message -->  
            <tr>
               <td style="width: 15%;"> </td>            
               <td style="width: 20%;" align=center>                
                   <?php echo $message ?>
               </td>
            </tr>
               
            <tr><td> &nbsp; </td> </tr>                                     
                                               
            <!--  The four Submite button-->
            <tr>
               <td style="width: 15%;"> </td>            
               <td style="width: 20%;" align=center> 
                  <input type="submit" name="Save"   value="Save">&nbsp; &nbsp;
                  <input type="submit" name="Find"   value="Find">&nbsp; &nbsp;            
                  <input type="submit" name="Modify" value="Modify">&nbsp; &nbsp;
                  <input type="submit" name="Delete" value="Delete">&nbsp; &nbsp;
                  <input type="submit" name="Clear" value="Clear">
                  <input type="hidden" name="found"  value="<?php echo $found ?>" >   
               </td>
            </tr>
            <tr><td> &nbsp; </td> </tr>
           
            <!-- full name-->
            <tr>
               <td style="width: 15%;"> </td>            
               <td style="width: 20%;" align=center>Jose Hinchez</center></font><p>             
                                  </td>
            </tr
                     
         </table>
      </form>                                   <!--closing form -->
    </div>
   </body>                                    <!--End of body -->  
</html>                                      <!--End of html code -->

