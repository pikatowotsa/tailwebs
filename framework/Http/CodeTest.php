<?php
namespace Teacherportal\Framework\Http;

use Teacherportal\Framework\Http\Controller;
use Teacherportal\Framework\Http\Database;


class CodeTest
{
    public static function insertIntoDB()
    {
        $pdo = Database::getPDO();
        // User data
        $name = 'admin';
        $email = 'admin@test.com';
        $password = 'admin123';

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert into user_table
        $sql = "INSERT INTO user_table (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute(['name' => $name, 'email' => $email, 'password' => $hashedPassword]);
            echo "User inserted successfully.";
        } catch (\PDOException $e) {
            echo "Error inserting user: " . $e->getMessage();
        }
            }

}