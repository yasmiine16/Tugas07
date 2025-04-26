<?php
require_once 'db.php';

class Film {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM film ORDER BY id DESC");
    }

    public function getById($id) {
        return $this->conn->query("SELECT * FROM film WHERE id=$id")->fetch_assoc();
    }

    public function insert($data) {
        extract($data);
        return $this->conn->query("INSERT INTO film (judul, genre, tahun_rilis, rating) VALUES ('$judul', '$genre', '$tahun_rilis', '$rating')");
    }

    public function update($id, $data) {
        extract($data);
        return $this->conn->query("UPDATE film SET judul='$judul', genre='$genre', tahun_rilis='$tahun_rilis', rating='$rating' WHERE id=$id");
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM film WHERE id=$id");
    }
}
?>
