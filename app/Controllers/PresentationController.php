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
        
        if ($presentation->update()) 
        {
            exit(redirectTo('admin-presentation', ['status' => 'succes']));
        }
        else
        {
            exit(redirectTo('admin-presentation', ['status' => 'errors']));
        }
    }

    public function upload()
    {
        dump($_FILES);
    }
}