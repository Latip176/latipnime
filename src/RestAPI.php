<?php

namespace Request\Latip176;

class Data {
    public $data;
    public $action;
    public $urlapi;
    
    public function __construct($data = null) {
        $this->data = $data;
        $this->urlapi = "https://latipharkat-api.my.id/api/otakudesu";
    }
}

class RestAPI extends Data {
    public function getData($next) {
        $url = $this->urlapi . $next;
        $req = curl_init();
        curl_setopt($req, CURLOPT_URL, $url);
        curl_setopt($req, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($req);
        curl_close($req);
 
        return $output;
    }
    
    public function request($action) {
        switch($action) {
            case "home":
                $this->action = "/home";
                break;
            case "view":
                $this->action = "/view/?data={$this->data}";
                break;
            case "info":
                $this->action = "/info/?data={$this->data}";
                break;
            case "search":
                $this->action = "/search/?keyword={$this->data}";
                break;
        }
        return $this->getData($this->action);
    }
}

?>