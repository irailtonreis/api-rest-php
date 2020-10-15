<?php

namespace Source\App;

class Web {
    public function Home($data){
        echo "teste";
    }

    public function Error($data){
        echo "{$data["errcode"]}";
        var_dump($data);
    }
}