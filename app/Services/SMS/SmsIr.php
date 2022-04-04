<?php
namespace App\Services\SMS;
use App\Interfaces\SmsInterface;

class SmsIr implements SmsInterface {
    public function send($receiver, $message)
    {
        // TODO: Implement send() method.
    }

    function log($success, $receiver, $message, $result)
    {
        // TODO: Implement log() method.
    }
}