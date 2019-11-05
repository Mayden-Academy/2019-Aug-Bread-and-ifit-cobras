<?php


namespace BreadAndIfit\Interfaces;


interface GatewayInterface
{
    static public function sendDataReturnResponse(array $array): string;
}