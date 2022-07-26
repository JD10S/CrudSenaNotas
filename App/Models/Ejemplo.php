<?php
namespace App\Models;

use PDO; 

class Ejemplo extends \Core\Model{
    public static function getAll() {
        try {
            $db = static::getDB();
            $sql = 'SELECT * FROM estudiantes';
            $consulta = $db->query($sql);
            $consulta = $consulta->fetchAll(PDO::FETCH_ASSOC);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(\PDOException $exception) {
           $consulta = ['error' => 'Se ha capturado el siguente error: '.$exception->getMessage()];
          }
          return $consulta;
    }
    public static function getStudent($data) {
        try {
            $db = static::getDB();
            $documento = $data['Documento'];
            $sql = "SELECT * FROM estudiantes WHERE `doc`= '$documento'";
            $consulta = $db->query($sql);
            $consulta = $consulta->fetchAll(PDO::FETCH_ASSOC);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(\PDOException $exception) {
           $consulta = ['error' => 'Se ha capturado el siguente error: '.$exception->getMessage()];
          }
          return $consulta;
    }
    public static function InsertData($data){
        try {
            $db = static::getDB();
            $nombre = $data['Nombre'];
            $apellido = $data['Apellidos'];
            $documento = $data['Documento'];
            $not1 = $data['PrimeraNota'];
            $not2 = $data['SegundaNota'];
            $not3 = $data['TerceraNota'];
            $prom = ($not1+$not2+$not3)/3;
            $sql = "INSERT INTO `estudiantes` (`nom`, `ape`, `not1`, `not2`, `not3`, `prom`, `doc`) VALUES ('$nombre', '$apellido', '$not1', '$not2', '$not3', '$prom', '$documento'); ";
            $db->exec($sql);
        } catch (\PDOExceotion $th) {
            echo $th->getMessage();
        }        
    }
}