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
    public static $USER_TOKEN_CREATED        = 'Successfully created user token';
    public static $USER_FOUND                = 'User found in database';
    public static $USER_BLOCKED              = 'User successfully blocked';
    public static $USER_DELETED              = 'User successfully deleted';
    public static $USER_ACTIVATED            = 'User successfully activated';
    public static $USER_FUNDS_ADDED          = 'User successfully added funds to the account';
    public static $USER_FUNDS_WITHDRAWED     = 'User successfully withdrawed funds from account';
    public static $USER_MAIL_PASSWORD_SENT   = 'Reset password link successfully sent to specified email';
    public static $USER_GRANTED_CHECKBOOK   = 'successfully granted permission for checkbook.';
    public static $USER_MAIL_SUPPORT_SENT    = 'Email successfully sent to support';
    public static $USER_TRANSACTIONS_RECEIVED= 'Successfully received user transactions';

    public static $USER_ERROR_CREATING       = 'Error creating user';
    public static $USER_EMAIL_EXISTS         = 'User with specified email already exists';
    public static $USER_PROMOCODE_EXPIRED    = 'Promo code was expired.';
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

    // admin messages
    public static $USER_ERROR_RETRIEVING     = 'Error retrieving users';
    public static $USER_BLOCK_ERROR_VALIDATE = 'User id required to block user';
    public static $USER_BLOCK_ERROR          = 'Error occurred while trying to block the user';
    public static $USER_BLOCK_ADMIN_ERROR    = 'Admin user can\'t be blocked';
    public static $USER_ACTIVATE_ERROR_VALIDATE = 'User id required to activate user';
    public static $USER_DELETE_ERROR_VALIDATE = 'User id required to delete user';
    public static $USER_ACTIVATE_ERROR       = 'Error occurred while trying to activate the user';
    public static $USER_PROMOCODE_ERROR_VALIDATE = 'User email required to send promo code';
    public static $USER_PROMOCODE_SUCCESS = 'Promo code sent successfully.';
    public static $USER_PROMOCODE_INVALID = 'Promo code is not correct.';
    public static $USER_PERMISSION_INVALID = 'Sorry, but you have not invited yet in our service.';
    public static $USER_BLOG_ACCESS_CHANGE_ERROR       = 'Error occurred while trying to change the user blog permission.';

    // SlatesController messages
    public static $SLATES_SUCCESSFULLY_RETRIEVED                 = 'List of game times successfully retrieved';
    public static $SLATE_SUCCESSFULLY_CREATED                    = 'Slate successfully created';
    public static $SLATE_SUCCESSFULLY_ACTIVATED                  = 'Slate successfully activated';
    public static $SLATE_SUCCESSFULLY_DEACTIVATED                = 'Slate successfully deactivated';

    public static $SLATES_ERROR_RETRIEVING                       = 'Error retrieving game times';
    public static $SLATE_ERROR_CREATING                          = 'Error creating slate';
    public static $SLATE_ERROR_CREATING_EXISTS                   = 'Slate with given id already exists';
    public static $SLATE_ERROR_NO_GAMES                          = 'Could not find any of the games provided in request';
    public static $SLATE_ERROR_ACTIVATING                        = 'Error activating slate';
    public static $SLATE_ERROR_DEACTIVATING                      = 'Error deactivating slate';

    // FantasyPlayersController messages
    public static $FANTASY_PLAYERS_SUCCESSFULLY_RETRIEVED        = 'List of fantasy players successfully retrieved';
    public static $FANTASY_PLAYERS_SUCCESSFULLY_UPDATED        = 'Fantasy player was successfully updated';

    public static $FANTASY_PLAYERS_ERROR_RETRIEVING              = 'Error retrieving fantasy players';


    // ContestsController success messages
    public static $CONTEST_CREATED_SUCCESSFULLY              = 'Contest successfully created';
    public static $CONTEST_SUCCESSFULLY_REGISTERED           = 'Successfully registered to contest';
    public static $CONTEST_SUCCESSFULLY_RETRIEVED            = 'Successfully retrieved contests';
    public static $CONTEST_ENTRY_SUCCESSFULLY                = 'Successfully registered to contest';
    public static $CONTEST_CANCELED_SUCCESSFULLY             = 'Successfully canceled contest';
    public static $CONTEST_ENTRY_EDITED                      = 'Successfully edited contest';

    // create contest errors
    public static $CONTEST_ERROR_CREATING                    = 'Error creating contest';
    public static $CONTEST_USER_ENTRY_ERROR_CREATING         = 'Error creating user entry to the contest';
    public static $CONTEST_OPP_ENTRY_ERROR_CREATING          = 'Error creating opponent entry to the contest';
    public static $CONTEST_SLATE_NOT_FOUND                   = 'Slate with specified id not found';
    public static $CONTEST_USER_PLAYER_NOT_FOUND             = 'User fantasy player with specified id not found';
    public static $CONTEST_OPP_PLAYER_NOT_FOUND              = 'Opponent fantasy player with specified id not found';
    public static $CONTEST_TIER_DO_NOT_MATCH                 = 'Tier specified in tier parameter and your fantasy player tier do not match';
    public static $CONTEST_PLAYER_POSITIONS_DO_NOT_MATCH     = 'Positions for user player and opponent player do not match';
    public static $CONTEST_PLAYER_ID_MATCH                   = 'User fantasy player and opponent fantasy player are the same players';
    public static $CONTEST_USER_PLAYER_NOT_IN_SLATE          = 'User fantasy player do not belong to specified game time';
    public static $CONTEST_OPP_PLAYER_NOT_IN_SLATE           = 'Opponent fantasy player do not belong to specified game time';
    public static $CONTEST_GAME_TIME_NOT_ACTIVE              = 'Game time you selected is not active';
    public static $CONTEST_NOT_ENOUGH_FUNDS                  = 'You do not have enough funds to create contests';
    public static $CONTEST_FREE_CONTESTS_LIMIT               = 'You reached limit of pending free contests';

    // admin contests error
    public static $CONTEST_ADMIN_WRONG_CONTEST_TYPE          = 'Admin can create only SET_OPPONENT type of contest';
    public static $CONTEST_ADMIN_REGISTER_ERROR              = 'Admin user can\'t register to the contest';

    // join contest errors
    public static $CONTEST_NOT_FOUND_ERROR                   = 'Contest with specified id not found';
    public static $CONTEST_PLAYER_NOT_FOUND_ERROR            = 'Player with specified id not found';
    public static $CONTEST_FULL_ERROR                        = 'Contest is full';
    public static $CONTEST_PLAYER_NOT_IN_SLATE               = 'Player is not in correct game time';
    public static $CONTEST_PLAYER_WRONG_TIER_ERROR           = 'Contest type is tier_ranking, so players in contest must have same ranking';
    public static $CONTEST_WRONG_STATUS                      = 'Contest should be in PENDING status to be able to register to that contest';
    public static $CONTEST_SET_OPPONENT_WRONG_PLAYER         = 'Player passed in playerId parameter not found in list of players for this contest';
    public static $CONTEST_SELECTED_PLAYER_ALREADY_TAKEN     = 'Selected player is taken by another user';
    public static $CONTEST_USER_ALREADY_REGISTERED           = 'User is already registered to this contest';
    public static $CONTEST_ERROR_REGISTERING                 = 'Error registering to contest';

    // cancel contest errors
    public static $CONTEST_ERROR_CANCELING                   = 'Error canceling contest';
    public static $CONTEST_ERROR_CANCELING_FILLED            = 'Contest is filled, you can\'t cancel this contest';
    public static $CONTEST_ERROR_CANCELING_OWNER             = 'Only owner can cancel contest';

    // edit entry errors
    public static $CONTEST_ERROR_EDIT                        = 'Error editing entry';
    public static $CONTEST_ERROR_EDIT_NO_ENTRY               = 'Entry not found';
    public static $CONTEST_ERROR_EDIT_OWNER_ENTRY            = 'Contest creator not allowed to edit entry';
    public static $CONTEST_ERROR_EDIT_NOT_OWNER              = 'You can not edit others entries';
    public static $CONTEST_ERROR_EDIT_SET_OPPONENT           = 'Edit entry not allowed for set opponent type of contest';
    public static $CONTEST_ENTRY_NOT_ENOUGH_FUNDS            = 'You do not have enough funds to enter to this contest';

    // retrieve contest errors
    public static $CONTEST_ERROR_RETRIEVING                  = 'Error retrieving contests';


    // GamesController
    public static $GAMES_SUCCESSFULLY_RETRIEVED              = 'Games successfully retrieved';
    public static $GAMES_ERROR_RETRIEVING                    = 'Error retrieving games';


    // PostController
    public static $BLOG_ERROR_CREAING_POST                   = 'Error creating post';
    public static $USER_DISABLED_BLOG_ACCESS                 = 'You can not manage blog';
    public static $BLOG_ERROR_RETRIVE_POST                   = 'Error retriving posts';
    public static $BLOG_FOUND                                = 'Blog found';
    public static $BLOG_NOT_FOUND                            = 'Blog not found';
    public static $BLOG_CREATED                              = 'Blog is created successfully!';
    public static $BLOG_ERROR_UPDATING_POST                  = 'Error updating post';
    public static $BLOG_UPDATED                              = 'Blog is updated successfully!';
    public static $BLOG_ERROR_UPDAING_OWN_POST               = 'You can update only your own post';
    public static $BLOG_ERROR_DELETING_POST                  = 'Error deleting post';
    public static $BLOG_ERROR_DELEING_OWN_POST               = 'You can delete only your own post';
    public static $BLOG_DELETED                              = 'Blog is deleted successfully!';
    public static $BLOG_ERROR_ADDING_COMMENT                 = 'Error adding comment';
    public static $BLOG_ERROR_ADDING_COMMENT_OWN_POST        = 'You can not add comments to your posts!';
    public static $COMMENT_ADDED                             = 'Comment is added successfully!';
    public static $RETRIEVING_CATEGORIES                     = 'Categories are retrivied.';
    public static $BLOG_STATUS_CHANGE_ERROR                  = 'Error occurred while trying to change the blog publish status.';
    public static $BLOG_PUBLISHED                            = 'Blog is published successfully!';
    public static $BLOG_ERROR_VALIDATING_POST                = 'Please fill all input field for blog.';
}