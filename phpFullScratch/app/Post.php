<?php

class Post {
  private $DB_HOST = "192.168.33.10";
  private $DB_NAME = "php_hacks";
  private $DB_USER = "root";
  private $DB_PASSWORD = "phpHacks2019@";

  protected function db_access() {
    // PHPがエラーを表示するように判定
    error_reporting(E_ALL & ~E_NOTICE);

    // データベースへの接続
    try {
      $dbh = new PDO('mysql:host='.$this->DB_HOST.';dbname='.$this->DB_NAME, $this->DB_USER, $this->DB_PASSWORD);
      return $dbh;
    } catch (PDOException $e) {
      echo "エラー!: " . $e->getMessage() . "<br/>";
      die();
    }
  }

  public function index() {
    $dbh = $this->db_access();

    $sql = 'SELECT * FROM posts';
    $stmt = $dbh->prepare($sql);
    
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
  }
}