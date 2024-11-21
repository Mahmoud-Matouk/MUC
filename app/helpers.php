<?php

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

/*
 * Transform indian numbers into 123 numbers.
 */
function localized(string $path): string
{
    $locale = app()->getLocale() === config('app.fallback_locale') ? '' : app()->getLocale();

    if ($path === '/') {
        return url("/$locale");
    }

    if (! Str::startsWith($path, '/')) {
        $path = "/$path";
    }

    return url("/$locale$path");
}

function switchLangPath(string $locale): string
{
    $prefix = $locale === config('app.fallback_locale') ? '/' : "/$locale/";
    $path = request()->path();

    if (str($path)->startsWith('en')) {
        $path = str($path)->replaceFirst('en', '');
    }

    if (str($path)->startsWith('/')) {
        $path = str($path)->replaceFirst('/', '');
    }

    return url($prefix.$path);
}

/*
 * Transform indian numbers into 123 numbers.
 */
function ar_numbers(string $numbers): string
{
    $eastern = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
    $western = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

    return str_replace(search: $eastern, replace: $western, subject: $numbers);
}

/*
 * Get full international mobile number with country code.
 */
function full_mobile(string $mobile, ?string $mobile_code = null): ?int
{
    if (! $mobile_code || str($mobile_code)->isEmpty()) {
        $mobile_code = '966';
    }

    $mobile = ar_numbers(numbers: $mobile);

    // Sanitize mobile number string, remove leading 0, leading + and any letters.
    $mobile = (int) $mobile;

    // Sanitize mobile code number string, remove leading 0, leading + and any letters.
    $mobile_code = (int) $mobile_code;

    // Check if we still have a mobile number to work with.
    if (! $mobile) {
        return null;
    }

    if (preg_match(
        pattern: '/^'.preg_quote(str: (string) $mobile_code, delimiter: '/').'/',
        subject: (string) $mobile
    )) {
        $int = preg_replace(
            pattern: '/'.$mobile_code.'/',
            replacement: '',
            subject: (string) $mobile,
            limit: 1
        );

        $mobile = (int) $int;
    }

    return (int) "$mobile_code$mobile";
}

function locale_mobile($mobile, $mobile_code = '966'): ?string
{
    $mobile = full_mobile(mobile: $mobile, mobile_code: $mobile_code);

    return Str::of($mobile)
        ->replaceFirst(search: $mobile_code, replace: '0')
        ->toString();
}

if (! function_exists('rename_file')) {

    /**
     * Rename a file before uploading it.
     */
    function rename_file(UploadedFile $file): string
    {
        $extension = $file->getClientOriginalExtension();
        $time = time();
        $random = Str::random(30);

        return "$time.$random.$extension";
    }
}
