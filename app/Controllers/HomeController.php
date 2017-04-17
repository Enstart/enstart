<?php namespace App\Controllers;

use Enstart\Controller\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return $this->views->render('home', [
            'name' => 'Enstart'
        ]);
    }
}
