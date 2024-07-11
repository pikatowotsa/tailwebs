<?php
namespace App\Model;

use Teacherportal\Framework\Http\Database;

class User
{
    public function fetchRecord(string $email)
    {
    try {
    $pdo = Database::getPDO();
    $query = "SELECT * FROM user_table WHERE email = :email LIMIT 1";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
  
    $stmt->execute();
    $user = $stmt->fetch(\PDO::FETCH_ASSOC);
    
    return $user;
    }

    catch(\PDOException $e) {
        // Handle database errors
        echo "Error: " . $e->getMessage();
    }
   
 }
}