<?php
namespace SocialNetwork\Interfaces;

interface SocialNetworkConnectorInterface
{
    public function logIn();

    public function logOut();

    public function createPost($content);
}