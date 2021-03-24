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

    public function upload($_id)
    {
        // dump($_FILES);
        logEvent('UPLOAD');
        logEvent( $_FILES['picture']['name']);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "svg" => "image/svg");
                $filename = $_FILES["picture"]["name"];
                $filetype = $_FILES["picture"]["type"];
                $filesize = $_FILES["picture"]["size"];

                // TEST : format de fichier upload
                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                if (!array_key_exists($extension, $allowed)) {
                    die('Erreur, choisir un autre format de fichier valide.');
                }

                // TEST : taille du fichier upload
                // $maxSizeFile = undefined;
                // if ($filesize > $maxSizeFile) {
                //     die('Erreur, fichier trop volumineu.');
                // }
                $privatePathFiles = './private/assets/images/hero/';
                $publicPathFiles = './public/assets/images/home/';
                if (file_exists($privatePathFiles.$filename)) {
                    logEvent($filename.' existe déjà.');
                }
                else {
                    move_uploaded_file($_FILES["picture"]["tmp_name"], $privatePathFiles.$_FILES["picture"]["name"]);
                    $this->edit($_id);
                }
            }
            else {
                logError('Error: probleme avec le fichier');
                logError($_FILES['picture']['error']);
            }
        }
    }

    
}