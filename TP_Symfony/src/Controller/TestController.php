<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class TestController{
protected $logger;
function __construct(LoggerInterface $logger)
{
$this->logger=$logger;
}

function index(){
dd("Ca fonctionne");
}
function test(Request $request){
    $dept=$request->attributes->get('departement');
    $this->logger->error("message 1 de log");
    Return new Response("bien dans le département ".$dept);
    }

    
}
