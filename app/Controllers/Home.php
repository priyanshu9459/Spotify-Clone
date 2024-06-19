<?php

namespace App\Controllers;
use App\Models\HomeModel;

// Helper Integration

helper('test'); 


error_reporting(E_ALL);
ini_set('display_errors', 1);
class Home extends BaseController
{
    public function index(): string
    {

        // Custom Made Helper 
        $data = array('text');
        clean($data);  exit;


        // Models

        $home = new HomeModel();
        $data['home_model'] = $home ->sum();
        
        // Connection 
        $db = db_connect();
      
        $sql = 'SELECT * FROM users'; 
        $query = $db->query($sql);

        // Check if the query was successful
        if (!$query) {
            echo 'Query execution failed: ' . $db->error();
            exit;
        }
        $results = $query->getResult();  // this one is for class
        $data['result'] = $results;
       
         
       $data['query'] = $home->queries();

       helper('form');

       // Load view
       return view('homepage');
       
        // controllers  
        // data sharing using associated array
        return view('homepage', $data);
    }

    public function sendEmail()
    {

        $pager = service('pager');
        $page    = (int) ($this->request->getGet('page') ?? 1);
        $perPage = 20;
        $total   = 200;

        // Call makeLinks() to make pagination links.
        $pager_links = $pager->makeLinks($page, $perPage, $total);

        $email = \Config\Services::email();
        $email->setFrom('your-email@gmail.com', 'Your Name'); 
        $email->setTo('recipient-email@example.com');        
        $email->setSubject('Email Test from CodeIgniter 4');
        $email->setMessage('<p>This is a test email sent from CodeIgniter 4.</p>');
        $data = [
            'pager_links' => $pager_links,
            'email' => $email,
        ];
        echo "<pre>";
        return view('email_page', $data);
    }

    
}
