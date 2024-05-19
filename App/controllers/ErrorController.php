<?php 

namespace App\Controllers;


class ErrorController {


    /**
     * 404 not found error
     *
     * @return void
     */
    public static function notFound($message = 'Resource not found')
    {
        $status = '404';
        http_response_code($status);
        loadView('error', [
            'status' => $status,
            'message' => $message
        ]);
    }

    /**
     * 403 unauthorized error
     *
     * @return void
     */
    public static function unauthorized($message = 'You are not authorized')
    {
        http_response_code(403);
        loadView('error', [
            'status' => '403',
            'message' => $message
        ]);
    }

}