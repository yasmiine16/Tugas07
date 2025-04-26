<?php
require_once 'model/Film.php';

class FilmController {
    private $model;

    public function __construct($conn) {
        $this->model = new Film($conn);
    }

    public function handleRequest() {
        $action = $_GET['action'] ?? 'list';

        switch ($action) {
            case 'create':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->model->insert($_POST);
                    header("Location: index.php");
                }
                $film = null;
                include 'view/form.php';
                break;

            case 'edit':
                $id = $_GET['id'];
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->model->update($id, $_POST);
                    header("Location: index.php");
                }
                $film = $this->model->getById($id);
                include 'view/form.php';
                break;

            case 'delete':
                $id = $_GET['id'];
                $this->model->delete($id);
                header("Location: index.php");
                break;

            default:
                $films = $this->model->getAll();
                include 'view/list.php';
                break;
        }
    }
}
?>
