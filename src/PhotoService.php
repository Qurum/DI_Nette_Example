<?php

namespace DI_Example;

class PhotoService extends BaseService
{
    protected $client;

    public function setClient($client)
    {
        $this->client = $client;
    }

    public function uploadPhoto($user, $path)
    {
        $this->logger->debug("Photo $path has been successfully uploaded by {$user['email']}");
    }
}