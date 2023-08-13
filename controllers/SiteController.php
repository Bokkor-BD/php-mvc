<?php
namespace app\controllers;

use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'Abu Bokkor Siddik',
            'email' => 'absiddik46@gmail.com',
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        echo '<pre>';
        print_r($body);
        exit();
    }
}
