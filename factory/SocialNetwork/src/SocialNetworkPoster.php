<?php
namespace SocialNetwork;

use SocialNetwork\Interfaces\SocialNetworkConnectorInterface;

abstract class SocialNetworkPoster
{
    /** Абстрактный метод один для получения соединения разных соцсетей.
     *
     * @return mixed
     */
    public abstract function getSocialNetwork(): SocialNetworkConnectorInterface;

    /**
     * @param $content
     */
    public function post($content)
    {
        $network = $this->getSocialNetwork();

        $network->logIn();
        $network->createPost($content);
        $network->logOut();
    }

}