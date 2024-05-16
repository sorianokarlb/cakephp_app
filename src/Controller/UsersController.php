<?php
namespace App\Controller;

class UsersController extends AppController
{
    public function login()
    {
        $this->set('title', 'Welcome');
        $this->render('login');
    }

    public function registration()
    {
        $this->set('title', 'User Registration');
    }

}