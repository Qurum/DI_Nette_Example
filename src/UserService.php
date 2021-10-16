<?php

namespace DI_Example;

class UserService extends BaseService
{
    public function getUser($email)
    {
        $this->logger->debug("User $email has been found in database");
        return ['email' => $email, 'hash' => '...'];
    }
}