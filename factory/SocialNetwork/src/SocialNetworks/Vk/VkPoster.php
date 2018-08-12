<?php
namespace SocialNetwork\SocialNetworks\Vk;

use SocialNetwork\SocialNetworkPoster;
use SocialNetwork\Interfaces\SocialNetworkConnectorInterface;

class VkPoster extends SocialNetworkPoster
{
    private $login;

    private $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        // TODO: Implement getSocialNetwork() method.
        return new VkConnector($this->login, $this->password);
    }

}