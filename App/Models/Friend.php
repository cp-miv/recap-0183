<?php

declare(strict_types=1);

namespace App\Models;

use PDO;

class Friend
{
    public static function getAll(): array
    {
        $friends = self::getDB()->query('SELECT * FROM Friend')->fetchAll();

        return $friends;
    }

    public static function find(int $id): array
    {
        $friend = self::getDB()->query("SELECT * FROM Friend WHERE id = {$id}")->fetch();

        return $friend;
    }

    public static function add(array $friend): void
    {
        self::getDB()->query("INSERT INTO `Friend` (`firstname`, `lastname`) VALUES ('{$friend['firstname']}', '{$friend['lastname']}')");
    }

    protected static function getDB(): PDO
    {
        $pdo = new PDO('mysql:host=db;port=3306;dbname=reactivations;charset=utf8', 'root', '123456', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        return $pdo;
    }
}
