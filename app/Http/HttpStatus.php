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

    // SlatesController errors
    public static $ERR_SLATES_RETRIEVE             = 50;
    public static $ERR_SLATE_CREATE                = 51;

    // FantasyPlayersController errors
    public static $ERR_FANTASY_PLAYERS_RETRIEVE    = 60;

    // ContestsController errors
    public static $ERR_CREATE_CONTEST      = 70;
    public static $ERR_CREATE_USER_ENTRY   = 71;
    public static $ERR_CREATE_OPP_ENTRY    = 73;
    public static $ERR_REGISTER_CONTEST    = 74;
    public static $ERR_RETRIEVE_CONTEST    = 75;
    public static $ERR_NOT_ENOUGH_FUNDS    = 76;
    public static $ERR_CANCELING_CONTEST   = 77;
    public static $ERR_EDIT_ENTRY          = 78;


    // GamesController errors
    public static $ERR_GAMES_RETRIEVE      = 90;

    // MailController erros
    public static $ERROR_EMAIL_NOT_PROVIDED =  101;
    public static $ERROR_PROMOCODE_INVALID  = 102;

    // PostsController errors
    public static $ERR_CREATE_POST               = 40;
    public static $ERR_USER_DISABLED_BLOG_ACCESS = 41;
    public static $ERR_RETRIVE_POST              = 42;
    public static $ERR_UPDATE_POST               = 43;
    public static $ERR_DELETE_POST               = 44;
    public static $ERR_ADD_COMMENT               = 45;
    public static $ERR_BLOG_NOT_FOUND            = 46;

}