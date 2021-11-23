<?php
abstract class SocialNetworkPosterFactory
{

    abstract public  function getSocialNetwork(): SocialNetworkConnectorInterface;


    public function post($content): void
    {
        $network = $this->getSocialNetwork();
        $network->logIn();
        $network->createPost($content);
        $network->logOut();
    }
}
