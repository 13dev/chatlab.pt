<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Avatar
    |--------------------------------------------------------------------------
    |
    | This is the user's avatar setting that includes :
    | [folder]  which is the default folder name to upload and get
    |           user's avatar from.
    | [default] which is the default avatar file name for users stored
    |           in database.
    |
    */
    'user_avatar' => [
        'folder' => 'users-avatar',
        'default' => asset('images/avatar/default_avatar.png'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Attachments By Default
    |--------------------------------------------------------------------------
    |
    | This array contains the important default values that used in this package.
    |
    | The first value in this array is the default folder name in the storage
    | which is all the attachments will be stored in.
    | This is also going to be used in attachments urls in the views.
    |
    */
    'attachments' => [
        'folder' => 'attachments',
        // Below is the route name to download attachments.
        'route' => 'attachments.download',
    ],

];
