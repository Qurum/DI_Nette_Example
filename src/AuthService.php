<?php

namespace DI_Example;

class AuthService extends BaseService
{
    public function __construct(protected $token_ttl)
    {
        ;
    }

    public function authenticate($user, $password)
    {
        if (empty($password)) throw new \Exception('Empty password');
        $this->logger->debug("User {$user['email']} has been successfully authenticated");
    }
}