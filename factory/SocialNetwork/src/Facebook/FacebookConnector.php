<?php
namespace SocialNetwork\Facebook;
use SocialNetwork\Interfaces\SocialNetworkConnectorInterface;

class FacebookConnector implements SocialNetworkConnectorInterface
{
    private $login;

    private $password;

    public function __construct($login, $pass)
    {
        $this->login = $login;
        $this->password = $pass;
    }

    public function logIn()
    {
        echo "Connecting user " . $this->login . PHP_EOL;
    }

    public function logOut()
    {
        echo "Diconnecting user - " . $this->login . PHP_EOL;
    }

    public function createPost($content)
    {
        // TODO: Implement createPost() method.
        echo $content . PHP_EOL;
    }
}
