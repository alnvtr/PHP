<?php
//conecta o PDO ao SQLite
namespace MyProjects\PDO_SQLite\src\Infrastructure\Persistence;
 use PDO;

 class ConnectionCreator
{
    public static function createconnection(): PDO //informa que o retorno é uma instância em PDO
    {
        $databasePath = __DIR__ . '/../../../banco.sqlite';

        $connection =  new PDO('sqlite:' . $databasePath);
        //define o modo de tratamento de erros
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connection;
    }
}