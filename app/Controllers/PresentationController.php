<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Presentation;

class PresentationController extends CoreController
{
    public function list() 
    {
        $datas = [];
        $datas['user'] = Users::findById($_SESSION['userId']);
        $datas['breadcrumper'] = get_fill_ariane();
        $datas['presentation'] = Presentation::findAll();
    
        $this->showAdmin( 'pages/presentation', $datas );
    }
    
    public function edit($_id) 
    {
        $presentation = Presentation::findById($_id);

        if (isset($_POST['title']))
        {
            $presentation->setTitle($_POST['title']);
        }
        if (isset($_POST['subtitle'])) {
            $presentation->setSubtitle($_POST['subtitle']);
        }
        if (isset($_POST['description'])) {
            $presentation->setDescription($_POST['description']);
        }
        if (isset($_POST['case_a'])) {
            $presentation->setCaseA($_POST['case_a']);
        }
        if (isset($_POST['case_a_txt'])) {
            $presentation->setCaseATxt($_POST['case_a_txt']);
        }
        if (isset($_POST['case_b'])) {
            $presentation->setCaseB($_POST['case_b']);
        }
        if (isset($_POST['case_b_txt'])) {
            $presentation->setCaseBTxt($_POST['case_b_txt']);
        }
        if (isset($_POST['case_c'])) {
            $presentation->setCaseC($_POST['case_c']);
        }
        if (isset($_POST['case_c_txt'])) {
            $presentation->setCaseCTxt($_POST['case_c_txt']);
        }
        if (isset($_FILES['picture'])) {
            $presentation->setPicture($_FILES['picture']['name']);
        }
        
        if ($presentation->update()) 
        {
            exit(redirectTo('admin-presentation', ['status' => 'succes']));
        }
        else
        {
            exit(redirectTo('admin-presentation', ['status' => 'errors']));
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
                $privatePathFiles = './private/assets/images/presentation/';
                $publicPathFiles = './public/assets/images/presentation/';
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