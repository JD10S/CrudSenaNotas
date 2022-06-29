<?php
namespace App\Models;

use PDO; 

class Post extends \Core\Model{
    public static function getAll() {
        try {
            $db = static::getDB();
            $sql = 'SELECT id, nombre, pais FROM pasiones';
            $consulta = $db->query($sql);
            $consulta = $consulta->fetchAll(PDO::FETCH_ASSOC);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(\PDOException $exception) {
           $consulta = ['error' => 'Se ha capturado el siguente error: '.$exception->getMessage()];
          }
          return $consulta;
    }
}