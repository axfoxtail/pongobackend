<?php

namespace App\Http;

/*
 * Internal http status codes
 */
class HttpStatus
{
    public static $OK               = 0;
    public static $ERR_UNKNOWN      = 10;
    public static $ERR_VALIDATION   = 11;
    public static $SQL_ERROR        = 12;
    public static $ENTITY_NOT_FOUND = 13;

    // Auth errors
    public static $ERR_AUTH_HEADER_NOT_PROVIDED        = 21;
    public static $ERR_AUTH_BAERER_HEADER_NOT_PROVIDED = 22;
    public static $ERR_AUTH_INVALID_TOKEN_PROVIDED     = 23;
    public static $ERR_AUTH_TOKEN_EXPIRED              = 24;
    public static $ERR_AUTH_ADMIN_ACCESS               = 25;
    public static $ERR_AUTH_USER_BLOCKED               = 26;
    public static $ERR_AUTH_USER_NOT_ALLOWED           = 27;
    public static $ERR_AUTH_TWILIO                     = 28;

    // UsersController errors
    public static $ERR_USER_EXISTS              = 30;
    public static $ERR_USER_INVALID_CREDENTIALS = 31;
    public static $ERR_USER_CREATE_TOKEN        = 32;
    public static $ERR_USER_NOT_FOUND           = 33;
    public static $ERR_BLOCK_ADMIN_USER         = 34;
    public static $ERR_USER_BLOCKED_OPERATION   = 35;
    public static $ERR_USER_ADD_FUNDS           = 36;
    public static $ERR_USER_WITHDRAW_FUNDS      = 37;
    public static $ERR_USER_NOT_ENOUGH_FUNDS    = 38;

    

}