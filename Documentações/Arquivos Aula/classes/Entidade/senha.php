<?php

class senha {

    private $us_cod;
    private $se_senha;

    public function getUs_cod() {
        return $this->us_cod;
    }

    public function getSe_senha() {
        return $this->se_senha;
    }

    public function setUs_cod($us_cod) {
        $this->us_cod = $us_cod;
    }

    public function setSe_senha($se_senha) {
        $this->se_senha = $se_senha;
    }

}

?>