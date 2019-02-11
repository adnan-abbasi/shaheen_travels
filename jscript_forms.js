/////////CHANGE DEFAULT OF RESET BUTTON
//********************************************************************************************************* */
var getResetId = document.getElementById("resetButton");

getResetId.addEventListener("click", function (event) {
    var value = confirm("Are You sure you  want to reset?");
    if (true == value)
        document.regForm.reset();
    else
        event.preventDefault();

});




////////////////******************************************************************************************** */
//// ADDING VALIDATION ON THE FORM FIELDS

//STEP 1  = REMOVE THE DEFAULT BEHAVIOUR OF SUBMIT BUTTON
var myFirstNameId = document.getElementById("fnameid");
var getFnameDisc = document.getElementById("FirstNameDisc");

var myLastNameId = document.getElementById("lnameid");
var getLnameDisc = document.getElementById("lastNameDisc");

var myAddressL1Id = document.getElementById("ad_line1");
var getAddressL1Disc = document.getElementById("adressL1Disc");

var myPCode = document.getElementById("postal_codeId");
var getPCodeDisc=document.getElementById("pCodevalid");

var mySubmitBtn = document.getElementById("submitButton");
//var getErrorId = document.getElementById("errorId");
mySubmitBtn.addEventListener('click', function (event) {
    

    var checkPCode = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/.test(document.regForm.postal_code.value);
    var fNameValue = document.regForm.fname.value;
    var LNameValue = document.regForm.lname.value;
    var addressLine1Value = document.regForm.ad_line1.value;
    //var addressLine2Value = document.regForm.ad_line2.value;
    //var pCodeValue = document.regForm.postal_code.value;

    if (false === checkPCode) {
        event.preventDefault();
        getPCodeDisc.style.display = "block";
    }
     if (fNameValue === "")
      {
        event.preventDefault();
        getFnameDisc.style.display = "block";
    }
    else
    getFnameDisc.style.display="none";

    if (LNameValue === "")
      {
        event.preventDefault();
        getLnameDisc.style.display = "block";
    }
    else
    getLnameDisc.style.display="none";

    if (addressLine1Value === "")
      {
        event.preventDefault();
        getAddressL1Disc.style.display = "block";
    }
    else
    getAddressL1Disc.style.display="none";
    
    
});

// STEP 2= DIPALY  TEXT HOW TO ENTER FIRST NAME


myFirstNameId.addEventListener('focus', function (event) {
    
    getFnameDisc.style.display = "none";
    getFnameDisc.style.display = "block";


});
//// For 2nd name

myLastNameId.addEventListener('focus', function (event) {

    getFnameDisc.style.display = "none";
    getLnameDisc.style.display = "none";
    getLnameDisc.style.display = "block";

});
//// For Address Line 1

myAddressL1Id.addEventListener('focus', function (event) {

    getFnameDisc.style.display = "none";
    getLnameDisc.style.display = "none";
    getAddressL1Disc.style.display = "none";
    getAddressL1Disc.style.display = "block";

});
//For postal code
myPCode.addEventListener('focus', function (event) {

    getFnameDisc.style.display = "none";
    getLnameDisc.style.display = "none";
    getAddressL1Disc.style.display = "none";
    getPCodeDisc.style.display = "block";

});
