<?php

namespace app\Domain\CreationalPatterns\FactoryPattern\SocialNetWorkLogin;

interface SocialNetworkConnectorInterface
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}
