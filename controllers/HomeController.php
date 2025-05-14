<?php
require_once 'config/database.php';
require_once 'models/NovelModel.php';

class HomeController {
    private $db;
    private $novelModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->novelModel = new NovelModel($this->db);
    }

    public function index() {
        $trendingNovels = $this->novelModel->getTrendingNovels();
        $newProjects = $this->novelModel->getNewProjects();
        $latestReleases = $this->novelModel->getLatestReleases();

        require_once 'views/home.php';
    }
}
?> 