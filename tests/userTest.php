<?php

class userTest extends \PHPUnit\Framework\TestCase{
    protected $user;
    public function testSignUpandLogin(){
        $this->user = new \App\user;

        $this->user->signUp(251,251,"Bruce","Wayne","Unmarried","1980-06-11","male","",796544123,"luciferbarny@gmail.com");

        $this->assertEquals($this->user->login(251,251),True);
}
}
?>
