<?php
namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    public function sum(){
       $a = 10;
       $b = 10;
       $sum = $a+ $b;
       return $sum;
    }
    public function queries(){
        $db = db_connect();
        $sql = 'Select * from user';
        $query = $db->query($sql);
        if (!$query) {
            echo 'Query execution failed: ' . $db->error();
            exit;
        }
        $results = $query->getResultArray();

       return $results;
    }
}

?>