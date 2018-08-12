<?php
namespace SocialNetwork\Facebook;

use SocialNetwork\SocialNetworkPoster;
use SocialNetwork\Interfaces\SocialNetworkConnectorInterface;
//use SocialNetwork\Facebook\FacebookConnector;

class FacebookPoster extends SocialNetworkPoster
{
    private $login;
    private $password;

    /** При создании объекта FacebookPoster (экземпляра класса) создаются переменные логин и пароль
     *
     * FacebookPoster constructor.
     * @param $login
     * @param $pass
     */
    public function __construct($login, $pass)
    {
        $this->login = $login;
        $this->password = $pass;
    }

    /** При вызове этого метода создается экземпляр класса FacebookConnector который реализуется от интерфейса
     *  SocialNetworkConnectorInterface при создании объекта в него передаются логин и пароль которые хранит
     *  объект FacebookPoster наследуемый от абстрактного класса SocialNetworkPoster. а значит у него есть доступ к методам
     *  Класса родителя. К методу post в котором вызываются методы класса FacebookConnector
     *
     * Через абстрактный класс и абстрактный метод в этом классе вызвается именно то действие которое нужно для
     * данного класса. Тоесть здесь вызывается коннектор для класса FacebookPoster
     *
     * @return SocialNetworkPoster
     *
     */
    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        // TODO: Implement getSocialNetwork() method.
        return new FacebookConnector($this->login, $this->password);
    }

}
