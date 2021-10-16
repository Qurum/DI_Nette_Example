<?php

namespace DI_Example;

class AuthService extends BaseService
{
    protected $token_ttl;

    public function setTokenTtl($token_ttl)
    {
        $this->token_ttl = $token_ttl;
    }

    public function authenticate($user, $password)
    {
        if (empty($password)) throw new \Exception('Empty password');
        $this->logger->debug("User {$user['email']} has been successfully authenticated");
    }
}