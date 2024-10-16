<?php

namespace App\Exceptions\Api;

use Exception;

class ApiException extends Exception
{
    public function __construct($message = '',int  $code = 500, array $errors = []){
        $response = [
            'message' => $message,
            'code' => $code,
        ];

        if(!empty($errors)){
            $response['errors'] = $errors;
        }
        parent::__construct(response()->json($response)->setStatusCode($code));
    }
}
