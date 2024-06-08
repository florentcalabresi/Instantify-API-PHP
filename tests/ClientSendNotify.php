<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Sunshinedev\InstantifyApiPhp\InstantifyClientAPI;

final class ClientSendNotify extends TestCase
{
    public function testExample()
    {
        $client = new InstantifyClientAPI();
        $resp = $client->send("187324731", "friends_demand", [
            "title" => "From Client API PHP"
        ]);
        echo $resp;
        $this->assertTrue(true);
    }

}
