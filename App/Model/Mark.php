<?php
namespace App\Model;

use Teacherportal\Framework\Http\Database;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\ArrayAdapter;

class Mark
{
    public function fetchRecords()
    {
    $pdo = Database::getPDO();
    $query = "SELECT * from marks_table";
    $stmt = $pdo->query($query);
  
    // Fetch all rows from the result set
    $markRecords = $stmt->fetchAll();
    
    return $markRecords; 
    }

    public function getPaginatedMarks($currentPage, $maxPerPage) 
    {
        $pdo = Database::getPDO();
        $query = "SELECT * FROM marks_table";
        $stmt = $pdo->query($query);
        $markRecords = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        // Create a Pagerfanta adapter with the result set
        $adapter = new ArrayAdapter($markRecords);

        // Create the Pagerfanta object
        $pagerfanta = new Pagerfanta($adapter);

        // Set the current page
        $pagerfanta->setCurrentPage($currentPage);

        // Set the max per page
        $pagerfanta->setMaxPerPage($maxPerPage);

        return $pagerfanta;$pdo = Database::getPDO();
        $query = "SELECT * FROM marks_table";
        $stmt = $pdo->query($query);
        $markRecords = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        // Create a Pagerfanta adapter with the result set
        $adapter = new ArrayAdapter($markRecords);

        // Create the Pagerfanta object
        $pagerfanta = new Pagerfanta($adapter);

        // Set the current page
        $pagerfanta->setCurrentPage($currentPage);

        // Set the max per page
        $pagerfanta->setMaxPerPage($maxPerPage);

        return $pagerfanta;
    }

}