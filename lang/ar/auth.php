<?php

return [
    'failed' => 'بيانات الدخول غير صحيحة.',
    'throttle' => 'عدد كبير جدا من محاولات الدخول. يرجى المحاولة مرة أخرى بعد :seconds ثانية.',

    'gender' => [
        'title' => 'الجنس',
        'male' => 'رجل',
        'female' => 'أنثى',
        'type' => 'اللقب',
        'mr' => 'السيد',
        'mrs' => 'السيدة',
    ],

    'unauthenticated' => 'يجب تسجيل الدخول.',
    'deactivated' => 'تم حظر الحساب.',
    'required_name' => 'فضلاً أدخل الاسم.',
    'required_mobile' => 'فضلاً أدخل الجوال.',
    'wrong_mobile' => 'الجوال غير صحيح.',
    'required_mobile_code' => 'حدد كود الدولة لرقم الجوال.',
    'required_email' => 'فضلاً أدخل الإيميل.',
    'already_registered' => 'مسجل من قبل.',
    'registered' => 'تم التسجيل بنجاح',
    'forget-password-code-sent' => 'تم إرسال رمز استعادة كلمة المرور على بريدك الإلكتروني',
    'attributes' => [
        'code' => 'رمز التحقق',
        'token' => 'شفرة التحقق',
        'email' => 'البريد الإلكتروني',
        'phone' => 'رقم الهاتف',
        'username' => 'البريد الإلكتروني او رقم الهاتف',
        'password' => 'كلمة المرور',
    ],
    'emails' => [
        'forget-password' => [
            'subject' => 'استعادة كلمة المرور',
            'greeting' => 'عزيزي :user',
            'line' => 'رمز استعادة كلمة المرور الخاص بك هو :code',
            'footer' => 'شكراً لك',
            'salutation' => 'مع تحيات فريق عمل :app',
        ],
        'reset-password' => [
            'subject' => 'استعادة كلمة المرور',
            'greeting' => 'عزيزي :user',
            'line' => 'تم تغيير كلمة المرور الخاصة بك',
            'footer' => 'شكراً لك',
            'salutation' => 'مع تحيات فريق عمل :app',
        ],
    ],
];
