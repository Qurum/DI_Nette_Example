<?php

namespace DI_Example;

class BaseService
{
    protected $logger;
    protected $db;

    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    public function setDB($db)
    {
        $this->db = $db;
    }
}