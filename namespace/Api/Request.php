<?php
//filename : Api/Request.php
// namespace API
// Use RequestInterface;
namespace Api;
use RequestInterface;
class Request implements RequestInterface{
    public function handle()
    {
        echo 'Handle Api Request';
    }

}