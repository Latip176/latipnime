<?php

namespace Latip176;

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
    private function getData($next) {
        $url = str_replace(" ", "+", $this->urlapi . $next);
        $req = curl_init();
        curl_setopt($req, CURLOPT_URL, $url);
        curl_setopt($req, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($req, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($req, CURLOPT_FOLLOWLOCATION, TRUE);
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
            case "ongoing":
                if($this->data != null) {
                    $this->action = "/ongoing/?next=page-{$this->data}";
                } else {
                    $this->action = "/ongoing/";
                }
                break;
        }
        return $this->getData($this->action);
    }
}

?>