<?php

namespace Tests\Unit\Services;

use App\Services\EmailService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmailServiceTest extends TestCase
{

    protected $emailService;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->emailService=new EmailService();
    }

    public function testSendEmail(){
        $this->assertEquals(true,$this->emailService->sendMail());
    }
}
