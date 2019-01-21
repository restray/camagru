<?php

namespace Core;

/**
 * Model abstract class
 */

use PDO;
use PDOException;
use Exceptions\SqlException;

abstract class Model {
    private $_conn;

    public function db_conn() {
        require_once 'config/database.php';
        if ($this->_conn) return $this->_conn;
        try {
            $this->_conn = new PDO($db_dsn, $db_user, $db_password);
        } catch (PDOException $e) {
            throw new SqlException("Erreur lors de la conncetion à la base de données.");
        }
    }
}
