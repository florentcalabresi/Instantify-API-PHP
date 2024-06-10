<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Sunshinedev\InstantifyApiPhp\InstantifyClientAPI;

final class ClientSendNotify extends TestCase
{
    public function testExample()
    {
        $client = new InstantifyClientAPI(
            "https://instantify.banquisedeweils.fr",
            "",
            "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6ImFwaV9pbnRlcmZhY2UiLCJpYXQiOjE3MTc3OTU2MjZ9.7Ss4iPujH3eIwE_V5byRHvTOuLLEmGPmQXQBC7norlI"
        );
        $resp = $client->checkClient(187324731);
        echo $resp;
        $this->assertTrue(true);
    }

}
