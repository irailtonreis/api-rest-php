<?php

namespace Source\App;

class Web {
    public function Home($data) :void
    {
        echo "home";
    }

    public function contato($data):void
    {
        echo "teste";
    }

    public function Error($data){
        echo "{$data["errcode"]}";
        var_dump($data);
    }
}