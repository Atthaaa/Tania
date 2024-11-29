<?php
class Konsultasi {
    private $conn;
    private $table = 'konsultasi';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function fetchMessages($id_pengguna, $id_konsultan) {
        $query = "SELECT * FROM " . $this->table . " 
                  WHERE id_pengguna = :id_pengguna AND id_konsultan = :id_konsultan
                  ORDER BY Tanggal_konsultasi DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pengguna', $id_pengguna);
        $stmt->bindParam(':id_konsultan', $id_konsultan);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function sendMessage($id_pengguna, $id_konsultan, $topik) {
        $query = "INSERT INTO " . $this->table . " 
                  (id_pengguna, id_konsultan, Tanggal_konsultasi, Topik_konsultasi)
                  VALUES (:id_pengguna, :id_konsultan, NOW(), :topik)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pengguna', $id_pengguna);
        $stmt->bindParam(':id_konsultan', $id_konsultan);
        $stmt->bindParam(':topik', $topik);

        return $stmt->execute();
    }
}
