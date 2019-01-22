<?php

namespace Core;

/**
 * Model abstract class
 */

use PDO;
use PDOException;
use Exceptions\SqlException;

abstract class Model {
    protected static $_conn;

    protected function init() {
        require_once 'Config/Database.php';
        if (self::$_conn) return self::$_conn;
        try {
            self::$_conn = new PDO($db_dsn, $db_user, $db_password);
        } catch (PDOException $e) {
            throw new SqlException("Erreur lors de la conncetion à la base de données.");
        }
    }
}
