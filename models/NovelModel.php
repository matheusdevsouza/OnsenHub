<?php
class NovelModel {
    private $conn;
    private $table_name = "novels";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getTrendingNovels() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY rating DESC LIMIT 6";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getNewProjects() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY created_at DESC LIMIT 10";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getLatestReleases() {
        $query = "SELECT novels.* FROM novels 
                 JOIN chapters ON novels.id = chapters.novel_id 
                 ORDER BY chapters.published_at DESC LIMIT 9";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?> 