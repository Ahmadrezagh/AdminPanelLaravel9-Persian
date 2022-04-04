<?php
namespace App\Interfaces;

interface SmsInterface
{
    public function send($receiver,$message);
    function log($success,$receiver,$message,$result);
}