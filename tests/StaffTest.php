<?php

use PHPUnit\Framework\TestCase;

class StaffTest extends TestCase
{
    public function testReturnFullName()
    {
        require("./src/Staff.php"); 

        $staff = new Staff;

        $staff->firstName = "Nguyen";

        $staff->lastName = "Do";
    
        $this->assertEquals("Nguyen Do", $staff->getFullName());    
    }

    public function testReturnLastName()
    {
        require("./src/Staff.php"); 

        $staff = new Staff;

        $staff->firstName = "Nguyen";

        $staff->lastName = "Do";
    
        $this->assertEquals("Do", $staff->getLastName());    
    }
}

?>