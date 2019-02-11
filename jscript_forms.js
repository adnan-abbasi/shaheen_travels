/////////CHANGE DEFAULT OF RESET BUTTON
//********************************************************************************************************* */
var getResetId = document.getElementById("resetButton");

getResetId.addEventListener("click", function (event) {
    var value = confirm("Are You sure you  want to reset?");
    if (true == value)
        document.AgtregForm.reset();
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

var bizPhoneId = document.getElementById("bizPhoneid");
var getAgtPhoneDis = document.getElementById("agtPhoneDisc");

var emailId = document.getElementById("agtemail");
var getEmailDisc=document.getElementById("emailDisc");

var mySubmitBtn = document.getElementById("submitButton");
//var getErrorId = document.getElementById("errorId");
mySubmitBtn.addEventListener('click', function (event) {
    

    var checkEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(document.AgtregForm.agtemail.value);
    var fNameValue = document.AgtregForm.fname.value;
    var LNameValue = document.AgtregForm.lname.value;
    var bizphoneVal = document.AgtregForm.bizPhone.value;
    //var addressLine2Value = document.AgtregForm.ad_line2.value;
    //var pCodeValue = document.AgtregForm.postal_code.value;

    if (false === checkPCode) {
        event.preventDefault();
        getEmailDisc.style.display = "block";
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

    if (bizphoneVal === "")
      {
        event.preventDefault();
        getAgtPhoneDis.style.display = "block";
    }
    else
    getAgtPhoneDis.style.display="none";
    
    
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
//// For business phone

bizPhoneId.addEventListener('focus', function (event) {

    getFnameDisc.style.display = "none";
    getLnameDisc.style.display = "none";
    getAgtPhoneDis.style.display = "none";
    getAgtPhoneDis.style.display = "block";

});
//For email
emailId.addEventListener('focus', function (event) {

    getFnameDisc.style.display = "none";
    getLnameDisc.style.display = "none";
    getAgtPhoneDis.style.display = "none";
    getEmailDisc.style.display = "block";

});
