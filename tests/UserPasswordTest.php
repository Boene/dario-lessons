<?php
require_once(/../src/User.php); 

class PasswordTest extends PHPUnit_Framework_TestCase {
    public function testCanUsePassword() {
        $horstPass = new Password('peter');
        
        $this->assertEquals('peter', $horstPass->value());
    }
}
?>