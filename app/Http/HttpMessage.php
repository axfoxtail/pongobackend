<?php

namespace App\Http;

class HttpMessage
{
    public static $OK            = 'Operation completed successfully.';
    public static $UNKNOWN_ERROR = 'Unknown error occurred.';

    // Auth messages
    public static $AUTH_HEADER_NOT_PROVIDED        = 'Authorization header not provided';
    public static $AUTH_BAERER_HEADER_NOT_PROVIDED = 'Baerer header not provided';
    public static $AUTH_INVALID_TOKEN_PROVIDED     = 'Invalid or unexisting token provided';
    public static $AUTH_TOKEN_EXPIRED              = 'Token expired';
    public static $AUTH_ADMIN_ACCESS               = 'Only admin user is allowed to access this content';
    public static $AUTH_USER_BLOCKED               = 'User is blocked';
    public static $AUTH_INVALID_LOCATION           = 'Invalid coordinates specified';
    public static $AUTH_FORBIDDEN_LOCATION         = 'Not allowed to perform action from your location';

    // UsersController messages
    public static $USER_CREATED_SUCCESSFULLY = 'User created successfully';
    public static $USER_GO_NEXT_STEP = 'Go to second step for register.';
    public static $USER_TOKEN_CREATED        = 'Successfully created user token';
    public static $USER_FOUND                = 'User found in database';
    public static $USER_BLOCKED              = 'User successfully blocked';
    public static $USER_DELETED              = 'User successfully deleted';
    public static $USER_ACTIVATED            = 'User successfully activated';
    public static $USER_FUNDS_ADDED          = 'User successfully added funds to the account';
    public static $USER_FUNDS_WITHDRAWED     = 'User successfully withdrawed funds from account';
    public static $USER_MAIL_PASSWORD_SENT   = 'Reset password link successfully sent to specified email';
    public static $USER_NOT_UPLOAD_AVATAR    = 'Upload was failed. Please try again.';
    public static $USER_MAIL_SUPPORT_SENT    = 'Email successfully sent to support';
    public static $USER_TRANSACTIONS_RECEIVED= 'Successfully received user transactions';

    public static $USER_ERROR_CREATING       = 'Error creating user';
    public static $USER_EMAIL_EXISTS         = 'User with specified phonenumber already exists';
    public static $USER_VERIFY_CODE_INVALID    = 'Verification code is invalid.';
    public static $USER_USERNAME_EXISTS      = 'User with specified username already exists';
    public static $USER_INVALID_CREDENTIALS  = 'Invalid email or password provided';
    public static $USER_ERR_CREATING_TOKEN   = 'Error creating token';
    public static $USER_NOT_FOUND            = 'User not found';
    public static $USER_BLOCKED_OPERATION    = 'Operation not allowed because user is blocked';
    public static $USER_ERROR_ADDING_FUNDS   = 'Error occurred while trying to add funds to user account';
    public static $USER_ERROR_CHECK_FUNDS   = 'Error occurred while trying to add funds from checkbook.io';
    public static $USER_ERROR_WITHDRAW_FUNDS = 'Error occurred while trying to withdraw funds from user account';
    public static $USER_NOT_ENOUGH_FUNDS     = 'Not enough funds';
    public static $USER_INVALID_EMAIL_FORMAT = 'Invalid email format specified';
    public static $USER_NO_USER_WITH_EMAIL   = 'User with specified email does not exist';
    public static $USER_ERR_SENDING_EMAIL    = 'Error while sending reset password to your email';
    public static $USER_ERR_RESET_PASSWORD   = 'Error while sending reset password to your email';
    public static $USER_ERR_CONTACT_SUPPORT  = 'Error occurred while trying to send email to support';

    public static $USER_ERR_SMS_SUPPORT  = 'Error occurred while trying to send SMS for verification code. Try again later.';


    
}