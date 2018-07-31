<?php

namespace App\Http;


class HttpResponse
{

    public static function ok($message, $objects, $userInfo = null)
    {
        return self::createSuccessfulResponse($message, $objects, $userInfo, 200);
    }

    public static function serverError($errorCode, $errorMessage, $debugMessages)
    {
        return self::createFailedResponse($errorCode, $errorMessage, $debugMessages, 500);
    }

    public static function unauthorized($errorCode, $errorMessage, $debugMessages)
    {
        return self::createFailedResponse($errorCode, $errorMessage, $debugMessages,  401);
    }

    public static function forbidden($errorCode, $errorMessage, $debugMessages)
    {
        return self::createFailedResponse($errorCode, $errorMessage, $debugMessages,  403);
    }

    public static function badRequest($errorCode, $errorMessage, $debugMessages)
    {
        return self::createFailedResponse($errorCode, $errorMessage, $debugMessages, 400);
    }

    private static function createSuccessfulResponse($message, $objects, $userInfo, $status)
    {
        if ($userInfo === null) {
            return response()->json(["status" => HttpStatus::$OK, "message" => $message, "debug" => array(), "response" => $objects], $status);
        }
        else {
            return response()->json(["status" => HttpStatus::$OK, "message" => $message, "debug" => array(),
                "userInfo" => $userInfo, "response" => $objects], $status);
        }
    }
    
    private static function createFailedResponse($errorCode, $errorMessage, $debugMessages, $status)
    {
        $entities = array();
        $debugMessagesVal = array();
        if ($debugMessages && !is_array($debugMessages)) {
            array_push($debugMessagesVal, $debugMessages);
        }
        else if ($debugMessages) {
            $debugMessagesVal = $debugMessages;
        }

        \Log::info($debugMessages);

        return response()->json(["status" => $errorCode, "message" => $errorMessage, "debug" => $debugMessagesVal], $status);
    }
}