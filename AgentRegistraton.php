
<?php
include_once("AgentClass.php");
include_once("functions.php");
session_start();

   

    if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {//this will check if user has not alrady loggedin or if he tried false.
        header("Location: http://localhost/shaheen_travels/login.php");
    }    ?>
<!doctype html>
<html>

<head>
<meta   charset="utf-8">  <!-- used to handle differnt characters traslation for browser.--> 
<title> Customer Registration </title>
<link rel="stylesheet" href="style.css">

</head>
<body>
    <header >
            
              <?php
              
include_once("header.php");
include("menu.php");

?>
    </header>
    
    <main>
<p> Please Fill in  the required information before requesitng for a trip fare. <BR> 
    Once your information will be submitted and approved we will send you a confirmation email.  Thanks </p>
    </main>
    <?php
        //inserting the from values to Agent Class
        if(isset($_GET["submitBtn"]))
        {
        $id=null;
        $fname=$_GET["fname"];
        $mname=$_GET["midIni"];
        $lname=$_GET["lname"];
        $busPhone=$_GET["bizPhone"];
        $email=$_GET["agtemail"];
        $agtposition=$_GET["agtPostion"];
        $agencyid=$_GET["agencyid"];

        
        $agentInsertObj=new Agent($id,$fname,$mname,$lname,$busPhone,$email,$agtposition,$agencyid);
        $insert_result=AgentCreate($agentInsertObj);
        
        if($insert_result==true)
        print("<h3>Your information has been saved</h3>");
        else
        print("Agent data NOT inserted");
        }
        ?>
     
     <div class="box" ><!--Form Container starts from here -->
            <div class=" F_discr_box " >

                    <p id="FirstNameDisc" class="fieldFormat" style="display:none;"> Please Enter  First Name</p><br>
                    <p id="lastNameDisc" class="fieldFormat" style="display:none;"> Please Enter  Last  Name </p><br>
                    <p id="agtPhoneDisc" class="fieldFormat" style="display:none;"> Please Enter Business Phone Number</p>
                    <br><br><br><br><br><p id="emailDisc" class="fieldFormat" style="display:none;"> Please Enter valid Email  </p>
                    <br><p  id="errorId" class="fieldFormat" style="display:none;"> Fields with * must be filled.  </p>
                </div>

    <form method="get"  action=" " name="AgtregForm" class="marg_box" >
            
            
            <lable for="fname">*First  Name: &nbsp;&nbsp; &nbsp;&nbsp;  </lable>
             <input id= "fnameid" type="text" name="fname"; required ><br><br>

             <lable for="midIni">Middle Initial:  &nbsp;&nbsp;  </lable>
             <input id= "midInid" type="text" name="midIni"; required ><br><br>
             
             <lable for="lname"> *Last  Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </lable>
             <input id= "lnameid" type="text" name="lname"><br><br>

             <lable for="bizphone"> *Busines Phone:    </lable>
             <input id= "bizPhoneid" type="text" name="bizPhone"><br><br>

             <lable for="agtemail"> *Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </lable>
             <input id= "agtemail" type="text" name="agtemail"><br><br>
             

                        
             <!--  LIST BOX drop down -->
       <lable>Agent Position:</lable> 
       <select name="agtPostion">
                <option value="Senior Agent">Senior</option>
                <option value=" Intermediate Agent"> Intermediate</option>
                <option value="Jounior Agent"> Jounior </option>
            </select><br>

            <lable>Select Agency ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</lable> 
            <select name="agencyid">
                    <option value="1"> AGT-1</option>
                    <option value="2"> AGT-2</option>
                    <option value="3"> AGT-3 </option>
                    <option value="4"> AGT-4 </option>
                </select><br><br><br>
                
                        
        <input id= "submitButton" type="submit" name="submitBtn"  value="Save" >
        <input id= "resetButton"  type="reset" ><br
        </form>
        </div>
        <!--Form Container End-->

           
                                    <footer> 
                    <P>
                     Copy Right &copy 2019 
                 </P>
             </footer>
             <script src="jscript_forms.js">
        
            </script>
</body>


        </html>