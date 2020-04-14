<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController
{
    public function initialize()
    {
        $this->ViewBuilder()->setLayout('hello');
    }

    public function index()
    {
        $this->set('header', ['subtitle'=>'from Controller']);
        $this->set('footer', ['copyright'=>'ほにゃらら']);
    }
}
