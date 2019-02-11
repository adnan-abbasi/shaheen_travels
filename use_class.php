<html>
<head>
<?php
class  Person
{
    public $id;
    private $fname="kamran";
    private $lname;
    public $busPhone;
    public $email;
public function __construct($id,$fname,$lname,$busPhone,$email)
{
    $this->id=$id;
    $this->fname=$fname;
    $this->lname=$lname;
    $this->busPhone=$busPhone;
   $this->email=$email;
}

public function __toString()
{
    return $this->fname."  ". $this->lname;
}
}
class Customer extends Person
{
    public $address;
    public $city;
    public $prov;
    public $postal;
    public $country;
    public $homePhone;
    public $agentId;


public function __construct($id,$fname,$lname,$address,$city,$prov,$postal,$country,$homePhone,$agentId)
//we can put them null to avoid error later on if not call by mistake.
{
    $this->address=$address;
    $this->city=$city;
    $this->prov= $prov;
    $this->postal= $postal;
    $this->country =$country;
    $this-> $homePhone;
    $this->$agentId;
}


    // public function setFname($userinputname)
    // {
    //     $this->fname=$userinputname;
    // }

    // public function getFname()
    // {
    //     return $this->fname;
    // }
}


?>

</head>
<body>

</body>
<?php
$person_obj= new Person;
$person_obj->setFname("imran");
print("MY first name is ".$person_obj->getFname());

?>

</html>