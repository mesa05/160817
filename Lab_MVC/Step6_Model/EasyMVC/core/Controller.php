<?php

class Controller {
    public function model($model) {
        require_once "../EasyMVC/models/$model.php";
        return new $model ();
    }
}

?>