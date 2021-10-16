<?php

namespace DI_Example;

class Application
{
    public function __construct(
        private UserService  $user_service,
        private AuthService  $auth_service,
        private PhotoService $photo_service,
    )
    {
        ;
    }

    public function run($email, $password, $photo)
    {
        $user = $this->user_service->getUser($email);
        $this->auth_service->authenticate($user, $password);
        $this->photo_service->uploadPhoto($user, $photo);
    }
}