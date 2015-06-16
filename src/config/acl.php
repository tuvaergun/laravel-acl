<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Model Definitions
    |--------------------------------------------------------------------------
    |
    | If you want to use your own model and extend it to
    | package's model. You can define your model here.
    |
    */

    'models' => [
        'role' => 'Kodeine\Acl\Models\Eloquent\Role',
        'permission' => 'Kodeine\Acl\Models\Eloquent\Permission',
    ],

    /*
    |--------------------------------------------------------------------------
    | Table Definitions
    |--------------------------------------------------------------------------
    |
    | If you want to change the name of
    | our table you can do that here.
    |
    */

    'tables' => [
        'roles' => 'roles',
        'role_user' => 'user_roles',
        'permissions' => 'permissions',
        'cache' => 'user_permissions_cache',
    ],

    /*
    |--------------------------------------------------------------------------
    | Permission Precedence
    |--------------------------------------------------------------------------
    |
    | If you have multiple roles assigned to a user, each roles has
    | a common permission. When we compile permissions, we need
    | to know if Allow|Deny permissions take precedence over
    | Deny|Allow permissions.
    |
    | Available Settings: "allow", "deny"
    |
    */

    'precedence' => 'allow',

];
