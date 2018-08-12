<?php
namespace SocialNetwork\SocialNetworks\Vk;

use SocialNetwork\Interfaces\SocialNetworkConnectorInterface;

class VkConnector implements SocialNetworkConnectorInterface
{
    private $login;

    private $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn()
    {
        // TODO: Implement logIn() method.
    }

    public function logOut()
    {
        // TODO: Implement logOut() method.

    }

    public function createPost($content)
    {
        // TODO: Implement createPost() method.
        echo "Пользователь с ником " . $this->login . " написал " . $content . " в социальной сети vk ". PHP_EOL;
    }
}