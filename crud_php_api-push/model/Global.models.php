<?php

interface IGlobal {
    public function responsePayload();
}

class GlobalMethods {
    public function responsePayload($payLoad, $remarks, $message, $code) {
        $status = array("remarks" => $remarks, "message" => $message);
        http_response_code($code);
        return array("status" => $status, "payload" => $payLoad, "timestamp" => date_create() , "prepared_by" => "Jonas D. Altares");  
    }
}