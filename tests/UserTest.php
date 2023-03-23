<?php
use PHPUnit\Framework\TestCase;
require './src/User.php';

class UserTest extends TestCase
{
    public function testname()
    {
        $user=new User;
        $name1= $user->name();
        $name2= $user->name(1);
        $name3= $user->name("Samy");

        $this->assertEquals("name", $name1);
        $this->assertEquals("name", $name2);
        $this->assertEquals("Samy", $name3);

    }
    public function testemail()
    {
        $user=new User;
        $email1= $user->email();
        $email2= $user->email(1);
        $email3= $user->email("Samy@gmail.com");

        $this->assertEquals("email", $email1);
        $this->assertEquals("email", $email2);
        $this->assertEquals("Samy@gmail.com", $email3);

    }

}
    
    ?>