<?php
class FacebookPoster extends SocialNetworkPosterFactory
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        return new FacebookConnector($this->login, $this->password);
    }
}
