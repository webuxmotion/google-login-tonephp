<?php

namespace app\controllers;

use core\Tone;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           Tone::$app->getProperty('site_name'),
           'Modure Store',
           'Modure Store'
       );
    }
}