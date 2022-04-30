<?php
namespace app;
class User{
    public $icPatient;
    public $password;

    public $patientFirstName;
    public $patientLastName;
    public $patientMartialStatus;
    public $patientDOB;
    public $patientGender;
    public $patientAddress;
    public $patientPhone;
    public $patientEmail;
     public function signUp($ic,$pass,$pfn,$pln,$pms,$pDOB,$pGender,$pAdd,$pPhone,$pEmail){
         
         $this->icPatient = $ic;
         $this->password = $pass;
         $this->patientFirstName=$pfn;
         $this->patientLastName=$pln;
         $this->patientMartialStatus=$pms;
         $this->patientDOB=$pDOB;
         $this->patientGender=$pGender;
         $this->patientAddress=$pAdd;
         $this->patientPhone=$pPhone;
         $this->patientEmail=$pEmail;

     }

     public function login($ic,$pass)
     {
         if ($this->icPatient==$ic and $this->password==$pass)
         {
             return True;
         }
         else{
             return False;
         }
     }
}

?>