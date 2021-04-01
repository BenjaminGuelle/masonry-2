<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Contact;

class ContactController extends CoreController
{
    public function list() 
    {
        $datas = [];
        $datas['user'] = Users::findById($_SESSION['userId']);
        $datas['breadcrumper'] = get_fill_ariane();
        $datas['contact'] = Contact::findAll();
    
        $this->showAdmin( 'pages/contact', $datas );
    }

    public function list_public() 
    {
        $this->show( 'pages/contact');
    }
    
    public function edit($_id)
    {
        $contact = Contact::findById($_id);

        if (isset($_POST['title']))
        {
            $contact->setTitle($_POST['title']);
        }
        if (isset($_POST['description'])) 
        {
            $contact->setDescription($_POST['description']);
        }
        if (isset($_POST['mobile'])) 
        {
            $contact->setMobile($_POST['mobile']);
        }
        if (isset($_POST['mail'])) 
        {
            $contact->setMail($_POST['mail']);
        }
        if (isset($_POST['adress'])) 
        {
            $contact->setAdress($_POST['adress']);
        }
        
        if ($contact->update()) 
        {
            exit(redirectTo('admin-contact', ['status' => 'succes']));
        }
        else
        {
            exit(redirectTo('admin-contact', ['status' => 'errors']));
        }
    }

    public function mangageMailContact()
    {
        $mailPro = 'sarl.michel.stephane@gmail.com';
        // $mailPro = 'benjamin.guelle@gmail.com';
        $mailClient = $_POST['email'];
        // mail to customer =>
        tryMail($mailClient, 'to-client');
        // mail to society =>
        tryMail($mailPro, 'to-pro');
        unset($_POST);
        redirectTo('homepage');

    }
}