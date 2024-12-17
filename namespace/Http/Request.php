<?php
//filename : Http/Request.php
// namespace API
// Use RequestInterface;
namespace Http;
use RequestInterface;
class Request implements RequestInterface{
    public function handle()
    {
        echo 'Handle Api Request';
    }

}