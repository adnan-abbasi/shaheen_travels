
<?php
include_once("AgentClass.php");
include_once("functions.php");
session_start();

    // if (!isset($_SESSION["start_time"])) {
    //     $_SESSION["start_time"] = time();
    // }

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

     <div class="box" ><!--Form Container starts from here -->
            <div class=" F_discr_box " >

                    <p id="FirstNameDisc" class="fieldFormat" style="display:none;"> Please Enter  First Name</p><br>
                    <p id="lastNameDisc" class="fieldFormat" style="display:none;"> Please Enter  Last  Name </p><br>
                    <p id="adressL1Disc" class="fieldFormat" style="display:none;"> Please Enter the current address</p>
                    <br><br><br><br><br><p id="pCodevalid" class="fieldFormat" style="display:none;"> Please Enter valid postal Code </p>
                    <br><p  id="errorId" class="fieldFormat" style="display:none;"> Fields with * must be filled.  </p>
                </div>

    <form method="get"  action=" " name="regForm" class="marg_box" >
            
            
            <lable for="fname">*First  Name: &nbsp;&nbsp; &nbsp;&nbsp;  </lable>
             <input id= "fnameid" type="text" name="fname"; required ><br><br>
             
             <lable for="lname"> *Last  Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </lable>
             <input id= "lnameid" type="text" name="lname"><br><br>

             <!-- another way of display  EVERY ID MUST BE UNIQUE  -->
              
              <lable for="ad_line1">*Address Line1: </lable>
             <input id= "ad_line1" type="text" name="ad_line1"><br><br>

             
             <lable for="ad_line2" > Address Line2: </lable>
             <input id= "ad_line2" type="text" name="ad_line2"><br><br>

             
             <!--  LIST BOX drop down -->
       <lable>Select Country:</lable> <select name="country">
                <option value="val_canada"> Canada</option>
                <option value=" val_usa"> Usa</option>
                <option value="val-mexico"> Maxico </option>
            </select><br>
            <lable>Select State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</lable> <select name="state">
                    <option value="val_"> Alberta</option>
                    <option value=" val_usa"> Brithish colombia</option>
                    <option value="val-mexico"> Ontario </option>
                </select><br>
                
                <lable for="postal_code">*Postal Code: &nbsp;&nbsp;</lable>
             <input id= "postal_codeId" type="text" name="postal_code"><br><br>
                

            <lable> Gender : </lable>
             <input type="radio" name=" rd_gender" value="val_male"><lable> Male</lable>
             <input type="radio" name=" rd_gender" value="val_female"> <lable>Female </lable><br>

           
        <lable> Choose which class  you like to travel : </lable>
        <input type="checkbox" name=" eco" value="val_eco"> <lable>Ecomomey</lable>
        <input type="checkbox" name=" biz" value="val_biz"><lable> Business</lable>
        <input type="checkbox" name=" exet" value="val_exet"><lable> Exective</lable>  <br>

               <label> Special Requests: </label> <textarea  name=" details">  </textarea>
        
        <input id= "submitButton" type="submit" name="submitBtn">
        <input id= "resetButton"  type="reset" ><br
        </form>
        </div>
        <!--Form Container End-->

            <?php
        //inserting the from values to Agent Class
        if(isset($_GET["submitBtn"]))
        {
        $id=null;
        $fname=$_GET["fname"];
        $mname=null;//$_POST[];
        $lname=$_GET["lname"];
        $busPhone=null;//$_POST[];
        $email=null;//$_POST[];
        $agtposition=null;//$_POST[];
        $agencyid=2;//$_POST[];

        
        $agentInsertObj=new Agent($id,$fname,$mname,$lname,$busPhone,$email,$agtposition,$agencyid);
        $insert_result=AgentCreate($agentInsertObj);
        
        if($insert_result==true)
        print("Agent data inserted");
        else
        print("Agent data NOT inserted");
        }
        ?>

            
           
                                    <footer> 
                    <P>
                     Copy Right &copy 2019 
                 </P>
             </footer>
             <script src="jscript_forms.js">
        
            </script>
</body>

<!-- INSERT INTO `customers`(`CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, `CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`) 
VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],
[value-8],[value-9],[value-10],[value-11],[value-12]) -->
        </html>