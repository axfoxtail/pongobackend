<?php

namespace App\Http\Middleware;
use App\Common\Consts\User\UserStatusConsts;
use App\Http\HttpMessage;
use App\Http\HttpResponse;
use App\Http\HttpStatus;
use Closure;
use JWTAuth;
use Namshi\JOSE\JWT;
use Tymon\JWTAuth\Exceptions\JWTException;

class VerifyJwtOauthToken
{
      protected $baerer = "Bearer ";
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try
        {
            $header = $request->header('Authorization');
            // dd("$header");
            // return 0;
            if (!$header)
            {
                return HttpResponse::unauthorized(HttpStatus::$ERR_AUTH_HEADER_NOT_PROVIDED,
                                                  HttpMessage::$AUTH_BAERER_HEADER_NOT_PROVIDED, HttpMessage::$AUTH_BAERER_HEADER_NOT_PROVIDED);
            }

            $pos = strpos($header,$this->baerer);
            if ($pos === false)
            {
                return HttpResponse::unauthorized(HttpStatus::$ERR_AUTH_BAERER_HEADER_NOT_PROVIDED,
                                                  HttpMessage::$AUTH_BAERER_HEADER_NOT_PROVIDED, HttpMessage::$AUTH_BAERER_HEADER_NOT_PROVIDED);
            }

            $baererAuth = explode(' ', $header);
            if (count($baererAuth) < 2)
            {
                return HttpResponse::unauthorized(HttpStatus::$ERR_AUTH_INVALID_TOKEN_PROVIDED,
                    HttpMessage::$AUTH_INVALID_TOKEN_PROVIDED, HttpMessage::$AUTH_INVALID_TOKEN_PROVIDED);
            }

            JWTAuth::setToken($baererAuth[1]);
            if (!$user = JWTAuth::authenticate())
            {
                return HttpResponse::unauthorized(HttpStatus::$ERR_AUTH_INVALID_TOKEN_PROVIDED,
                    HttpMessage::$AUTH_INVALID_TOKEN_PROVIDED, HttpMessage::$USER_NOT_FOUND);
            }

            
        }
        catch (JWTException $e)
        {
            if($e instanceof TokenExpiredException)
            {
                return HttpResponse::unauthorized(HttpStatus::$ERR_AUTH_TOKEN_EXPIRED, HttpMessage::$AUTH_TOKEN_EXPIRED,
                    $e->getMessage());
            }
            else if ($e instanceof TokenInvalidException)
            {
                return HttpResponse::unauthorized(HttpStatus::$ERR_AUTH_INVALID_TOKEN_PROVIDED,
                                                  HttpMessage::$AUTH_INVALID_TOKEN_PROVIDED, $e->getMessage());
            }
            else
            {
                return HttpResponse::unauthorized(HttpStatus::$ERR_AUTH_INVALID_TOKEN_PROVIDED,
                                                  HttpMessage::$AUTH_INVALID_TOKEN_PROVIDED, $e->getMessage());
            }
        }
        catch (\Exception $e)
        {
            return HttpResponse::unauthorized(HttpStatus::$ERR_AUTH_INVALID_TOKEN_PROVIDED,
                HttpMessage::$AUTH_INVALID_TOKEN_PROVIDED, $e->getMessage());
        }


        return $next($request);
    }
}
