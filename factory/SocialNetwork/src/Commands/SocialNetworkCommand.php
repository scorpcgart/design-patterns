<?php
namespace SocialNetwork\Commands;

use SocialNetwork\Exceptions\NetworkException;
use SocialNetwork\DbModel\DbConnect;
use SocialNetwork\Facebook\FacebookPoster;
use SocialNetwork\Vk\VkPoster;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SocialNetworkCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:start')
            ->setDescription('Factory Method, ')
            ->addArgument('socialnetwork', InputArgument::REQUIRED, 'Enter Social Network')
            ->addArgument('login', InputArgument::REQUIRED, 'Enter login')
            ->addArgument('password', InputArgument::REQUIRED, 'Enter password')
            ->addArgument('content', InputArgument::REQUIRED, 'Enter content');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $socialNetwork = $input->getArgument('socialnetwork');
            $login = $input->getArgument('login');
            $pass = $input->getArgument('password');
            $content = $input->getArgument('content');
            $users = new DbConnect('twig_test_db', 'root', 'admin');
            if($users->authorization($login, $pass)){
                if ($socialNetwork == 'facebook') {
                    $facebook = new FacebookPoster($login,$pass);
                    $output->writeln($facebook->post($content));
                } elseif ($socialNetwork == 'vk') {
                  $vk = new  VkPoster($login, $pass);
                  $output->writeln($vk->post($content));
                }

            }
        } catch (NetworkException $e) {
            $output->writeln( 'error=========>' . $e->getMessage());
        }
    }
}