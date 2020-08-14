<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('i@rimorsoft.com');
        $this->assertTrue($email);

        $email = Validate::email('i@@rimorsoft.com');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $url = Validate::url('https://rimorsoft.com');
        $this->assertTrue($url);

        $url = Validate::url('rimorsoft.com');
        $this->assertFalse($url);
    }

    public function test_password()
    {
        $password = Validate::password('123456');
        $this->assertTrue($password);

        $password = Validate::password('123');
        $this->assertFalse($password);

        $password = Validate::password('1234567890');
        $this->assertFalse($password);
    }
}