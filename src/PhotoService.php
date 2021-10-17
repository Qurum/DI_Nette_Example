<?php

namespace DI_Example;

class PhotoService extends BaseService
{
    public function __construct(protected $client)
    {
        ;
    }

    public function uploadPhoto($user, $path)
    {
        $this->logger->debug("Photo $path has been successfully uploaded by {$user['email']}");
    }
}