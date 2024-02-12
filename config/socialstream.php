<?php

use App\Providers\RouteServiceProvider;
use JoelButcher\Socialstream\Features;
use JoelButcher\Socialstream\Providers;

return [
    'middleware' => ['web'],
    'prompt' => 'Continue with',
    'providers' => [
        Providers::google(),
    ],
    'features' => [
        // Features::providerAvatars(),
        Features::createAccountOnFirstLogin(),
        Features::loginOnRegistration(),
        Features::rememberSession(),
        Features::refreshOAuthTokens(),
    ],
    'home' => RouteServiceProvider::HOME,
    'redirects' => [
        'login' => RouteServiceProvider::HOME,
        'register' => RouteServiceProvider::HOME,
        'login-failed' => '/login',
        'registration-failed' => '/register',
        'provider-linked' => '/user/profile',
        'provider-link-failed' => '/user/profile',
    ]
];
