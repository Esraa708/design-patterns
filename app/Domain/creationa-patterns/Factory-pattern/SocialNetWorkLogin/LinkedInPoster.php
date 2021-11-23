<?php
class LinkedInPoster extends SocialNetworkPosterFactory
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}
