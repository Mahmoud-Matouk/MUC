<?php

return [
    'gender' => [
        'title' => 'Gender',
        'male' => 'Male',
        'female' => 'Female',
        'type' => 'Title',
        'mr' => 'Mr.',
        'mrs' => 'Mrs.',
    ],

    'failed' => 'Login data are not correct.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    'unauthenticated' => 'You have to login.',
    'deactivated' => 'Your account is deactivated.',
    'required_name' => 'Enter the name',
    'required_mobile' => 'Enter a valid mobile.',
    'wrong_mobile' => 'Mobile is not correct.',
    'required_mobile_code' => 'Select a mobile country code.',
    'required_email' => 'Enter the E-mail',
    'already_registered' => 'Already registered.',
    'registered' => 'Registered Successfully!',
    'forget-password-code-sent' => 'The reset password code was sent to your E-mail address.',
    'attributes' => [
        'code' => 'Verification Code',
        'token' => 'Verification Token',
        'email' => 'Email',
        'phone' => 'phone',
        'username' => 'Email Or Phone',
        'password' => 'Password',
    ],
    'emails' => [
        'forget-password' => [
            'subject' => 'Reset Password',
            'greeting' => 'Dear :user',
            'line' => 'Your password recovery code is :code',
            'footer' => 'Thank you',
            'salutation' => 'Regards, :app',
        ],
        'reset-password' => [
            'subject' => 'Reset Password',
            'greeting' => 'Dear :user',
            'line' => 'Your password has been reset successfully.',
            'footer' => 'Thank you',
            'salutation' => 'Regards, :app',
        ],
    ],

];
