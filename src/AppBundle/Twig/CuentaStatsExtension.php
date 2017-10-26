<?php

namespace AppBundle\Twig;

use Symfony\Bridge\Doctrine\RegistryInterface;

class CuentaStatsExtension extends \Twig_Extension {

    protected $doctrine;

    public function __construct(RegistryInterface $doctrine) {
        $this->doctrine = $doctrine;
    }

    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('cuenta_stats', array($this, 'cuentaStatsFilter'))
        );
    }

    public function cuentaStatsFilter($user) {
        $following_repo = $this->doctrine->getRepository('BackendBundle:Following');
        $publication_repo = $this->doctrine->getRepository('BackendBundle:Publication');
        $liked_repo = $this->doctrine->getRepository('BackendBundle:Like');

        $users_following = $following_repo->findBy(array('user' => $user));
        $users_followers = $following_repo->findBy(array('followed' => $user));
        $users_liked = $liked_repo->findBy(array('user' => $user));
        $user_publications = $publication_repo->findBy(array('user' => $user));
        $result = array(
            'following' => count($users_following), 
            'followers' => count($users_followers),
            'publications' => count($user_publications),
            'likes' => count($users_liked)
        );
        return $result;
    }

    public function getName() {
        return 'user_stats_extension';
    }

}
