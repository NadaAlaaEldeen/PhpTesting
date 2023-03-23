<?php
class User
{
    public function name($name="") 
    {
       $userName="name"; 
       if($name==null||$name=="")
       {
        return "name";
       }
       else if(is_numeric($name))
       {
        return "name";
       }
       else
       {
        $userName=$name;
        return $userName;
       }

    }
    public function email($email="") 
    {
       $userEmail="email"; 
       if($email==null||$email=="")
       {
        return "email";
       }
       else if(is_numeric($email))
       {
        return "email";
       }
       else
       {
        $userEmail=$email;
        return $userEmail;
       }

    }

}
    
    ?>