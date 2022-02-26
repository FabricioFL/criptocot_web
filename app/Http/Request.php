<?php

namespace App\Http;

class Request
{


    /**
     * 
     * @var string
     */
    private $httpMethod;


    /**
     * 
     * @var string
     */
    private string $uri;


    /**
     * 
     * @var array
     */
    private array $queryParams = [];


    /**
     * 
     * @var array
     */
    private array $postVars = [];


    /**
     * 
     * @var array
     */
    private array $headers = [];

    public function __construct()
    {
        $this->httpMethod = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->queryParams = $_GET;
        $this->postVars = $_POST;
        $this->headers = getallheaders();
    }
}