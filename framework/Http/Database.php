<?php
namespace Teacherportal\Framework\Http;

class Database
{
    public static \PDO $pdo;

    public function __construct(array $config)
    {

            $dsn = $config['dsn'] ?? '';
            $user = $config['user'] ?? '';
            $password = $config['password'] ?? '';
            self::$pdo =  new \PDO($dsn, $user, $password);
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public static function getPDO()
    {
        return self::$pdo;
    }
}