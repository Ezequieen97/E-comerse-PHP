<?php
class Conexion
{
    public function conectar()
    {
        $host = 'localhost';
        $dbname = 'Libreria';
        $userName = 'Admin';
        $password = '12345678';
        $puerto = '1433';

        try {
            $conn = new PDO("sqlsrv:Server=$host,$puerto;Database=$dbname", $userName, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ]);
            return $conn;
        } 
        catch (PDOException $e) 
        {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}

