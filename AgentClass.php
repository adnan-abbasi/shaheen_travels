<?php
/*********************************************************
 * Aouther : Adnan Abbasi
 * Date: Feb 10 ,2019
 * Purpose: This is the Home page.
 * Requrire: function.php and AgetClass.php
 **************************************************************/

class  Agent
{
    // $data["AgentId"] = "Freden";
    // $data["AgtFirstName"] = "Fred";
	// $data["AgtMiddleInitial"] = "J";
	// $data["AgtLastName"] = "Jones";
	// $data["AgtBusPhone"] = "403-555-5556";
	// $data["AgtEmail"] = "sam@travelexperts.com";
	// $data["AgtPosition"] = "Agent";
    // $data["AgencyId"] = 1;
    
    private $AgentId;
    private $AgtFirstName;
    private $AgtMiddleInitial;
    private $AgtLastName;
    private $AgtBusPhone;
    private $AgtEmail;
    private $AgtPosition;
    private $AgencyId;

    // public $AgentId;
    // public $AgtFirstName;
    // public $AgtMiddleInitial;
    // public $AgtLastName;
    // public $AgtBusPhone;
    // public $AgtEmail;
    // public $AgtPosition;
    // public $AgencyId;
public function __construct($id,$fname,$mname,$lname,$busPhone,$email,$agtposition,$agencyid)
{
    $this->AgentId=$id;
    $this->AgtFirstName=$fname;
    $this->AgtMiddleInitial=$mname;
    $this->AgtLastName=$lname;
    $this->AgtBusPhone=$busPhone;
    $this->AgtEmail=$email;
    $this->AgtPosition=$agtposition;
    $this->AgencyId=$agencyid;
}

public function convertOBjtoArray()//get_object_vars ( object $object ) : array  we also use this function.
{
   $dataInArray=array();
    
foreach($this as $key=> $value )
{
    $dataInArray[$key]=$value;
}

return $dataInArray;
}

}
?>

