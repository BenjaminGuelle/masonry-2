<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Hero;

class HeroController extends CoreController
{
    public function list() 
    {
        $datas = [];
        $datas['user'] = Users::findById($_SESSION['userId']);
        $datas['breadcrumper'] = get_fill_ariane();
        $datas['heros'] = Hero::findAll();
    
        $this->showAdmin( 'pages/hero', $datas );
    }
    
    public function edit($_id)
    {
        $hero = Hero::findById($_id);

        if (isset($_FILES['picture'])) {
            $hero->setPicture($_FILES['picture']['name']);
        }
        if (isset($_POST['title_a']))
        {
            $hero->setTitleA($_POST['title_a']);
        }
        if (isset($_POST['subtitle_a'])) {
            $hero->setSubtitleA($_POST['subtitle_a']);
        }
        if (isset($_POST['description_a'])) {
            $hero->setDescriptionA($_POST['description_a']);
        }
        if (isset($_POST['title_b']))
        {
            $hero->setTitleB($_POST['title_b']);
        }
        if (isset($_POST['subtitle_b'])) {
            $hero->setSubtitleB($_POST['subtitle_b']);
        }
        if (isset($_POST['description_b'])) {
            $hero->setDescriptionB($_POST['description_b']);
        }
        
        if ($hero->update()) 
        {
            exit(redirectTo('admin-hero', ['status' => 'succes']));
        }
        else
        {
            exit(redirectTo('admin-hero', ['status' => 'errors']));
        }
    }
}