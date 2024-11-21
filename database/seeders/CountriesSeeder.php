<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\District;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            (object) [
                'id' => 156,
                'order' => 1,
                'name' => (object) [
                    'ar' => 'عمان',
                    'en' => 'Oman',
                ],
                'full_name' => (object) [
                    'ar' => 'سلطنة عمان',
                    'en' => 'Sultanate of Oman',
                ],
                'nationality' => (object) [
                    'ar' => 'عماني',
                    'en' => 'Omani',
                ],
                'currency' => 'OMR',
                'code' => 'OM',
                'mobile_code' => '968',
                'timezone' => 'Asia/Muscat',
            ],

            (object) [
                'id' => 220,
                'order' => 2,
                'name' => (object) [
                    'ar' => 'الامارات',
                    'en' => 'Emirates',
                ],
                'full_name' => (object) [
                    'ar' => 'الامارات العربية المتحدة',
                    'en' => 'United Arab Emirates',
                ],
                'nationality' => (object) [
                    'ar' => 'اماراتي',
                    'en' => 'Emirian',
                ],
                'code' => 'AE',
                'mobile_code' => '971',
                'currency' => 'AED',
                'timezone' => 'Asia/Dubai',
            ],
            (object) [
                'id' => 169,
                'order' => 3,
                'name' => (object) [
                    'ar' => 'قطر',
                    'en' => 'Qatar',
                ],
                'full_name' => (object) [
                    'ar' => 'دولة قطر',
                    'en' => 'State of Qatar',
                ],
                'nationality' => (object) [
                    'ar' => 'قطري',
                    'en' => 'Qatari',
                ],
                'currency' => 'QAR',
                'code' => 'QA',
                'mobile_code' => '974',
                'timezone' => 'Asia/Qatar',
            ],
            (object) [
                'id' => 15,
                'order' => 4,
                'name' => (object) [
                    'ar' => 'البحرين',
                    'en' => 'Bahrain',
                ],
                'full_name' => (object) [
                    'ar' => 'مملكة البحرين',
                    'en' => 'Kingdom of Bahrain',
                ],
                'nationality' => (object) [
                    'ar' => 'بحريني',
                    'en' => 'Bahraini',
                ],
                'currency' => 'BHD',
                'code' => 'BH',
                'mobile_code' => '973',
                'timezone' => 'Asia/Bahrain',
            ],
            (object) [
                'id' => 176,
                'order' => 5,
                'name' => (object) [
                    'ar' => 'السعودية',
                    'en' => 'Saudi Arabia',
                ],
                'full_name' => (object) [
                    'ar' => 'المملكة العربية السعودية',
                    'en' => 'Kingdom of Saudi Arabia',
                ],
                'nationality' => (object) [
                    'ar' => 'سعودي',
                    'en' => 'Saudi',
                ],
                'code' => 'SA',
                'mobile_code' => '966',
                'currency' => 'SAR',
                'timezone' => 'Asia/Riyadh',
            ],
            (object) [
                'id' => 59,
                'order' => 6,
                'name' => (object) [
                    'ar' => 'مصر',
                    'en' => 'Egypt',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية مصر العربية',
                    'en' => 'Arab Republic of Egypt',
                ],
                'nationality' => (object) [
                    'ar' => 'مصري',
                    'en' => 'Egyptian',
                ],
                'code' => 'EG',
                'mobile_code' => '20',
                'currency' => 'EGP',
                'timezone' => 'Africa/Cairo',
            ],
            (object) [
                'id' => 231,
                'order' => 6,
                'name' => (object) [
                    'ar' => 'اليمن',
                    'en' => 'Yemen',
                ],
                'full_name' => (object) [
                    'ar' => 'الجمهورية اليمنية',
                    'en' => 'Republic of Yemen',
                ],
                'nationality' => (object) [
                    'ar' => 'يماني',
                    'en' => 'Yemenite',
                ],
                'currency' => 'YER',
                'code' => 'YE',
                'mobile_code' => '967',
                'timezone' => 'Asia/Aden',
            ],
            (object) [
                'id' => 200,
                'order' => 8,
                'name' => (object) [
                    'ar' => 'سوريا',
                    'en' => 'Syria',
                ],
                'full_name' => (object) [
                    'ar' => 'الجمهورية العربية السورية',
                    'en' => 'Syrian Arab Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'سوري',
                    'en' => 'Syrian',
                ],
                'currency' => 'SYP',
                'code' => 'SY',
                'mobile_code' => '963',
                'timezone' => 'Asia/Damascus',
            ],
            (object) [
                'id' => 102,
                'order' => 9,
                'name' => (object) [
                    'ar' => 'الأردن',
                    'en' => 'Jordan',
                ],
                'full_name' => (object) [
                    'ar' => 'المملكة الأردنية الهاشمية',
                    'en' => 'Hashemite Kingdom of Jordan',
                ],
                'nationality' => (object) [
                    'ar' => 'أردني',
                    'en' => 'Jordanian',
                ],
                'currency' => 'JOD',
                'code' => 'JO',
                'mobile_code' => '962',
                'timezone' => 'Asia/Amman',
            ],
            (object) [
                'id' => 112,
                'order' => 10,
                'name' => (object) [
                    'ar' => 'لبنان',
                    'en' => 'Lebanon',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية لبنان',
                    'en' => 'Lebanese Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'لبناني',
                    'en' => 'Lebanese',
                ],
                'currency' => 'LBP',
                'code' => 'LB',
                'mobile_code' => '961',
                'timezone' => 'Asia/Beirut',
            ],
            (object) [
                'id' => 96,
                'order' => 11,
                'name' => (object) [
                    'ar' => 'العراق',
                    'en' => 'Iraq',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية العراق',
                    'en' => 'Republic of Iraq',
                ],
                'nationality' => (object) [
                    'ar' => 'عراقي',
                    'en' => 'Iraqi',
                ],
                'currency' => 'IQD',
                'code' => 'IQ',
                'mobile_code' => '964',
                'timezone' => 'Asia/Baghdad',
            ],
            (object) [
                'id' => 159,
                'order' => 12,
                'name' => (object) [
                    'ar' => 'فلسطين المحتلة',
                    'en' => 'Palestine Territory, Occupied',
                ],
                'full_name' => (object) [
                    'ar' => 'فلسطين المحتلة',
                    'en' => 'Palestine Territory, Occupied',
                ],
                'nationality' => (object) [
                    'ar' => 'فلسطيني',
                    'en' => 'Palestinian',
                ],
                'currency' => 'USD',
                'code' => 'PS',
                'mobile_code' => '970',
            ],
            (object) [
                'id' => 3,
                'order' => 13,
                'name' => (object) [
                    'ar' => 'الجزائر',
                    'en' => 'Algeria',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية الجزائر الديمقراطية الشعبية',
                    'en' => 'People’s Democratic Republic of Algeria',
                ],
                'nationality' => (object) [
                    'ar' => 'جزائري',
                    'en' => 'Algerian',
                ],
                'code' => 'DZ',
                'mobile_code' => '213',
                'currency' => 'DZD',
                'timezone' => 'Africa/Algiers',
            ],
            (object) [
                'id' => 115,
                'order' => 14,
                'name' => (object) [
                    'ar' => 'ليبيا',
                    'en' => 'Libya',
                ],
                'full_name' => (object) [
                    'ar' => 'الجماهيرية العربية الليبية الشعبية الاشتراكية',
                    'en' => 'Socialist People’s Libyan Arab Jamahiriya',
                ],
                'nationality' => (object) [
                    'ar' => 'ليبي',
                    'en' => 'Libyan',
                ],
                'currency' => 'LYD',
                'code' => 'LY',
                'mobile_code' => '218',
                'timezone' => 'Africa/Tripoli',
            ],
            (object) [
                'id' => 211,
                'order' => 15,
                'name' => (object) [
                    'ar' => 'تونس',
                    'en' => 'Tunisia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية تونس',
                    'en' => 'Republic of Tunisia',
                ],
                'nationality' => (object) [
                    'ar' => 'تونسي',
                    'en' => 'Tunisian',
                ],
                'currency' => 'TND',
                'code' => 'TN',
                'mobile_code' => '216',
                'timezone' => 'Africa/Tunis',
            ],
            (object) [
                'id' => 139,
                'order' => 16,
                'name' => (object) [
                    'ar' => 'المغرب',
                    'en' => 'Morocco',
                ],
                'full_name' => (object) [
                    'ar' => 'مملكة المغرب',
                    'en' => 'Kingdom of Morocco',
                ],
                'nationality' => (object) [
                    'ar' => 'مغربي',
                    'en' => 'Moroccan',
                ],
                'currency' => 'MAD',
                'code' => 'MA',
                'mobile_code' => '212',
                'timezone' => 'Africa/Casablanca',
            ],
            (object) [
                'id' => 194,
                'order' => 17,
                'name' => (object) [
                    'ar' => 'السودان',
                    'en' => 'Sudan',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية السودان',
                    'en' => 'Republic of the Sudan',
                ],
                'nationality' => (object) [
                    'ar' => 'سوداني',
                    'en' => 'Sudanese',
                ],
                'currency' => 'SDG',
                'code' => 'SD',
                'mobile_code' => '249',
                'timezone' => 'Africa/Khartoum',
            ],
            (object) [
                'id' => 252,
                'order' => 18,
                'name' => (object) [
                    'ar' => 'جنوب السودان',
                    'en' => 'South Sudan',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية جنوب السودان',
                    'en' => 'Republic of South Sudan',
                ],
                'nationality' => (object) [
                    'ar' => 'جنوب سوداني',
                    'en' => 'South Sudanese',
                ],
                'currency' => 'SSP',
                'code' => 'SS',
                'mobile_code' => '211',
                'timezone' => 'Africa/Juba',
            ],
            (object) [
                'id' => 185,
                'order' => 19,
                'name' => (object) [
                    'ar' => 'الصومال',
                    'en' => 'Somalia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية الصومال',
                    'en' => 'Somali Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'صومالي',
                    'en' => 'Somali',
                ],
                'currency' => 'SOS',
                'code' => 'SO',
                'mobile_code' => '252',
                'timezone' => 'Africa/Mogadishu',
            ],
            (object) [
                'id' => 64,
                'order' => 20,
                'name' => (object) [
                    'ar' => 'أثيوبيا',
                    'en' => 'Ethiopia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية إثيوبيا الديمقراطية الاتحادية',
                    'en' => 'Federal Democratic Republic of Ethiopia',
                ],
                'nationality' => (object) [
                    'ar' => 'أثيوبي',
                    'en' => 'Ethiopian',
                ],
                'currency' => 'ETB',
                'code' => 'ET',
                'mobile_code' => '251',
                'timezone' => 'Africa/Addis_Ababa',
            ],
            (object) [
                'id' => 62,
                'order' => 21,
                'name' => (object) [
                    'ar' => 'إريتريا',
                    'en' => 'Eritrea',
                ],
                'full_name' => (object) [
                    'ar' => 'إريتريا',
                    'en' => 'State of Eritrea',
                ],
                'nationality' => (object) [
                    'ar' => 'إريتري',
                    'en' => 'Eritrean',
                ],
                'currency' => 'ERN',
                'code' => 'ER',
                'mobile_code' => '291',
                'timezone' => 'Africa/Asmara',
            ],
            (object) [
                'id' => 186,
                'order' => 22,
                'name' => (object) [
                    'ar' => 'جنوب أفريقيا',
                    'en' => 'South Africa',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية جنوب أفريقيا',
                    'en' => 'Republic of South Africa',
                ],
                'nationality' => (object) [
                    'ar' => 'جنوب أفريقي',
                    'en' => 'South African',
                ],
                'currency' => 'ZAR',
                'code' => 'ZA',
                'mobile_code' => '27',
                'timezone' => 'Africa/Johannesburg',
            ],
            (object) [
                'id' => 212,
                'order' => 23,
                'name' => (object) [
                    'ar' => 'تركيا',
                    'en' => 'Turkey',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية تركيا',
                    'en' => 'Republic of Turkey',
                ],
                'nationality' => (object) [
                    'ar' => 'تركي',
                    'en' => 'Turk',
                ],
                'currency' => 'TRY',
                'code' => 'TR',
                'mobile_code' => '90',
                'timezone' => 'Europe/Istanbul',
            ],
            (object) [
                'id' => 93,
                'order' => 24,
                'name' => (object) [
                    'ar' => 'الهند',
                    'en' => 'India',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية الهند',
                    'en' => 'Republic of India',
                ],
                'nationality' => (object) [
                    'ar' => 'هندي',
                    'en' => 'Indian',
                ],
                'currency' => 'INR',
                'code' => 'IN',
                'mobile_code' => '91',
                'timezone' => 'Asia/Kolkata',
            ],
            (object) [
                'id' => 157,
                'order' => 25,
                'name' => (object) [
                    'ar' => 'باكستان',
                    'en' => 'Pakistan',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية باكستان الإسلامية',
                    'en' => 'Islamic Republic of Pakistan',
                ],
                'nationality' => (object) [
                    'ar' => 'باكستاني',
                    'en' => 'Pakistani',
                ],
                'currency' => 'PKR',
                'code' => 'PK',
                'mobile_code' => '92',
                'timezone' => 'Asia/Karachi',
            ],
            (object) [
                'id' => 203,
                'order' => 26,
                'name' => (object) [
                    'ar' => 'طاجيكستان',
                    'en' => 'Tajikistan',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية طاجيكستان',
                    'en' => 'Republic of Tajikistan',
                ],
                'nationality' => (object) [
                    'ar' => 'طاجيكي',
                    'en' => 'Tajik',
                ],
                'currency' => 'TJS',
                'code' => 'TJ',
                'mobile_code' => '992',
            ],
            (object) [
                'id' => 213,
                'order' => 27,
                'name' => (object) [
                    'ar' => 'تركمانستان',
                    'en' => 'Turkmenistan',
                ],
                'full_name' => (object) [
                    'ar' => 'تركمانستان',
                    'en' => 'Turkmenistan',
                ],
                'nationality' => (object) [
                    'ar' => 'تركماني',
                    'en' => 'Turkmen',
                ],
                'currency' => 'TMT',
                'code' => 'TM',
                'mobile_code' => '993',
            ],
            (object) [
                'id' => 122,
                'order' => 28,
                'name' => (object) [
                    'ar' => 'ماليزيا',
                    'en' => 'Malaysia',
                ],
                'full_name' => (object) [
                    'ar' => 'ماليزيا',
                    'en' => 'Malaysia',
                ],
                'nationality' => (object) [
                    'ar' => 'ماليزيا',
                    'en' => 'Malaysian',
                ],
                'currency' => 'MYR',
                'code' => 'MY',
                'mobile_code' => '60',
            ],
            (object) [
                'id' => 94,
                'order' => 29,
                'name' => (object) [
                    'ar' => 'أندونيسيا',
                    'en' => 'Indonesia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية أندونيسيا',
                    'en' => 'Republic of Indonesia',
                ],
                'nationality' => (object) [
                    'ar' => 'أندونيسي',
                    'en' => 'Indonesian',
                ],
                'currency' => 'IDR',
                'code' => 'ID',
                'mobile_code' => '62',
            ],
            (object) [
                'id' => 16,
                'order' => 30,
                'name' => (object) [
                    'ar' => 'بنغلاديش',
                    'en' => 'Bangladesh',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية بنغلاديش الشعبية',
                    'en' => 'People’s Republic of Bangladesh',
                ],
                'nationality' => (object) [
                    'ar' => 'بنغالي',
                    'en' => 'Bangladeshi',
                ],
                'currency' => 'BDT',
                'code' => 'BD',
                'mobile_code' => '880',
            ],
            (object) [
                'id' => 128,
                'order' => 31,
                'name' => (object) [
                    'ar' => 'موريتانيا',
                    'en' => 'Mauritania',
                ],
                'full_name' => (object) [
                    'ar' => 'الجمهورية الإسلامية الموريتانية',
                    'en' => 'Islamic Republic of Mauritania',
                ],
                'nationality' => (object) [
                    'ar' => 'موريتاني',
                    'en' => 'Mauritanian',
                ],
                'currency' => 'MRO',
                'code' => 'MR',
                'mobile_code' => '222',
            ],
            (object) [
                'id' => 1,
                'order' => 32,
                'name' => (object) [
                    'ar' => 'أفغانستان',
                    'en' => 'Afghanistan',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية أفغانستان الإسلامية',
                    'en' => 'Islamic Republic of Afghanistan',
                ],
                'nationality' => (object) [
                    'ar' => 'أفغاني',
                    'en' => 'Afghan',
                ],
                'code' => 'AF',
                'mobile_code' => '930',
                'currency' => 'AFN',
            ],
            (object) [
                'id' => 144,
                'order' => 33,
                'name' => (object) [
                    'ar' => 'نيبال',
                    'en' => 'Nepal',
                ],
                'full_name' => (object) [
                    'ar' => 'نيبال',
                    'en' => 'Nepal',
                ],
                'nationality' => (object) [
                    'ar' => 'نيبالي',
                    'en' => 'Nepalese',
                ],
                'currency' => 'NPR',
                'code' => 'NP',
                'mobile_code' => '977',
            ],
            (object) [
                'id' => 164,
                'order' => 34,
                'name' => (object) [
                    'ar' => 'الفلبين',
                    'en' => 'Philippines',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية الفلبين',
                    'en' => 'Republic of the Philippines',
                ],
                'nationality' => (object) [
                    'ar' => 'فلبيني',
                    'en' => 'Filipino',
                ],
                'currency' => 'PHP',
                'code' => 'PH',
                'mobile_code' => '63',
            ],
            (object) [
                'id' => 188,
                'order' => 35,
                'name' => (object) [
                    'ar' => 'سيريلانكا',
                    'en' => 'Sri Lanka',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية سريلانكا الاشتراكية الديمقراطية',
                    'en' => 'Democratic Socialist Republic of Sri Lanka',
                ],
                'nationality' => (object) [
                    'ar' => 'سيريلانكي',
                    'en' => 'Sri Lankan',
                ],
                'currency' => 'LKR',
                'code' => 'LK',
                'mobile_code' => '94',
            ],
            (object) [
                'id' => 95,
                'order' => 36,
                'name' => (object) [
                    'ar' => 'إيران',
                    'en' => 'Iran',
                ],
                'full_name' => (object) [
                    'ar' => 'الجمهورية الإسلامية الإيرانية',
                    'en' => 'Islamic Republic of Iran',
                ],
                'nationality' => (object) [
                    'ar' => 'إيراني',
                    'en' => 'Iranian',
                ],
                'currency' => 'IRR',
                'code' => 'IR',
                'mobile_code' => '98',
            ],
            (object) [
                'id' => 22,
                'name' => (object) [
                    'ar' => 'برمودا',
                    'en' => 'Bermuda',
                ],
                'full_name' => (object) [
                    'ar' => 'برمودا',
                    'en' => 'Bermuda',
                ],
                'nationality' => (object) [
                    'ar' => 'برمودا',
                    'en' => 'Bermuda',
                ],
                'currency' => 'GDP',
                'code' => 'BM',
                'mobile_code' => '1-441',
            ],
            (object) [
                'id' => 36,
                'name' => (object) [
                    'ar' => 'كانتون فينيكس',
                    'en' => 'Canton Phoenix Is',
                ],
                'full_name' => (object) [
                    'ar' => 'كانتون فينيكس',
                    'en' => 'Canton Phoenix Is',
                ],
                'nationality' => (object) [
                    'ar' => 'كانتون فينيكس',
                    'en' => 'Canton Phoenix Is',
                ],
                'currency' => 'USD',
                'code' => '',
                'mobile_code' => '',
            ],
            (object) [
                'id' => 133,
                'name' => (object) [
                    'ar' => 'جزر ميدواي',
                    'en' => 'Midway Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر ميدواي',
                    'en' => 'Midway Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر ميدواي',
                    'en' => 'Midway Islands',
                ],
                'currency' => 'USD',
                'code' => '',
                'mobile_code' => '',
            ],
            (object) [
                'id' => 201,
                'name' => (object) [
                    'ar' => 'تاهيتي',
                    'en' => 'Tahiti',
                ],
                'full_name' => (object) [
                    'ar' => 'تاهيتي',
                    'en' => 'Tahiti',
                ],
                'nationality' => (object) [
                    'ar' => 'تاهيتي',
                    'en' => 'Tahiti',
                ],
                'currency' => 'EUR',
                'code' => 'TA',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 232,
                'name' => (object) [
                    'ar' => 'زائير',
                    'en' => 'Zaire',
                ],
                'full_name' => (object) [
                    'ar' => 'زائير',
                    'en' => 'Zaire',
                ],
                'nationality' => (object) [
                    'ar' => 'زائير',
                    'en' => 'Zaire',
                ],
                'currency' => 'ZRZ',
                'code' => 'ZR',
                'mobile_code' => '243',
            ],
            (object) [
                'id' => 23,
                'name' => (object) [
                    'ar' => 'بوتان',
                    'en' => 'Bhutan',
                ],
                'full_name' => (object) [
                    'ar' => 'بوتان',
                    'en' => 'Bhutan',
                ],
                'nationality' => (object) [
                    'ar' => 'بوتاني',
                    'en' => 'Bhutan',
                ],
                'currency' => 'BTN',
                'code' => 'BT',
                'mobile_code' => '975',
            ],
            (object) [
                'id' => 239,
                'name' => (object) [
                    'ar' => 'جزر آلاند',
                    'en' => 'Åland Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر آلاند',
                    'en' => 'Åland Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر آلاند',
                    'en' => 'Åland Islands',
                ],
                'code' => 'AX',
                'mobile_code' => '358',
                'currency' => 'EUR',
            ],
            (object) [
                'id' => 2,
                'name' => (object) [
                    'ar' => 'ألبانيا',
                    'en' => 'Albania',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية ألبانيا',
                    'en' => 'Republic of Albania',
                ],
                'nationality' => (object) [
                    'ar' => 'ألباني',
                    'en' => 'Albanian',
                ],
                'code' => 'AL',
                'mobile_code' => '355',
                'currency' => 'ALL',
            ],
            (object) [
                'id' => 4,
                'name' => (object) [
                    'ar' => 'ساموا الأمريكية',
                    'en' => 'American Samoa',
                ],
                'full_name' => (object) [
                    'ar' => 'ساموا الأمريكية',
                    'en' => 'Territory of American',
                ],
                'nationality' => (object) [
                    'ar' => 'ساموا الأمريكية',
                    'en' => 'American Samoan',
                ],
                'code' => 'AS',
                'mobile_code' => '1',
                'currency' => 'USD',
            ],
            (object) [
                'id' => 5,
                'name' => (object) [
                    'ar' => 'أندورا',
                    'en' => 'Andorra',
                ],
                'full_name' => (object) [
                    'ar' => 'إمارة أندورا',
                    'en' => 'Principality of Andorra',
                ],
                'nationality' => (object) [
                    'ar' => 'إمارة أندورا',
                    'en' => 'Andorran',
                ],
                'currency' => 'EUR',
                'code' => 'AD',
                'mobile_code' => '376',
            ],
            (object) [
                'id' => 6,
                'name' => (object) [
                    'ar' => 'أنغولا',
                    'en' => 'Angola',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية أنغولا',
                    'en' => 'Republic of Angola',
                ],
                'nationality' => (object) [
                    'ar' => 'أنغولي',
                    'en' => 'Angolan',
                ],
                'currency' => 'AOA',
                'code' => 'AO',
                'mobile_code' => '244',
            ],
            (object) [
                'id' => 240,
                'name' => (object) [
                    'ar' => 'أنغوليا',
                    'en' => 'Anguilla',
                ],
                'full_name' => (object) [
                    'ar' => 'أنغوليا',
                    'en' => 'Anguilla',
                ],
                'nationality' => (object) [
                    'ar' => 'أنغولي',
                    'en' => 'Anguillan',
                ],
                'currency' => 'XCD',
                'code' => 'AI',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 241,
                'name' => (object) [
                    'ar' => 'القارة القطبية الجنوبية',
                    'en' => 'Antarctica',
                ],
                'full_name' => (object) [
                    'ar' => 'القارة القطبية الجنوبية',
                    'en' => 'Antarctica',
                ],
                'nationality' => (object) [
                    'ar' => 'قطبي جنوبي',
                    'en' => 'of Antarctica',
                ],
                'currency' => 'USD',
                'code' => 'AQ',
                'mobile_code' => '672',
            ],
            (object) [
                'id' => 7,
                'name' => (object) [
                    'ar' => 'أنتيغوا وبربودا',
                    'en' => 'Antigua and Barbuda',
                ],
                'full_name' => (object) [
                    'ar' => 'أنتيغوا وبربودا',
                    'en' => 'Antigua and Barbuda',
                ],
                'nationality' => (object) [
                    'ar' => 'أنتيغوا وبربودا',
                    'en' => 'of Antigua and Barbuda',
                ],
                'currency' => 'XCD',
                'code' => 'AG',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 8,
                'name' => (object) [
                    'ar' => 'الأرجنتيني',
                    'en' => 'Argentina',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية الأرجنتين',
                    'en' => 'Argentine Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'أرجنتيني',
                    'en' => 'Argentinian',
                ],
                'currency' => 'ARS',
                'code' => 'AR',
                'mobile_code' => '54',
            ],
            (object) [
                'id' => 9,
                'name' => (object) [
                    'ar' => 'أرمينيا',
                    'en' => 'Armenia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية أرمينيا',
                    'en' => 'Republic of Armenia',
                ],
                'nationality' => (object) [
                    'ar' => 'أرميني',
                    'en' => 'of Armenia (Republic of)',
                ],
                'currency' => 'AMD',
                'code' => 'AM',
                'mobile_code' => '374',
            ],
            (object) [
                'id' => 10,
                'name' => (object) [
                    'ar' => 'أروبا',
                    'en' => 'Aruba',
                ],
                'full_name' => (object) [
                    'ar' => 'أروبا',
                    'en' => 'Aruba',
                ],
                'nationality' => (object) [
                    'ar' => 'أروبي',
                    'en' => 'Aruban',
                ],
                'currency' => 'AWG',
                'code' => 'AW',
                'mobile_code' => '297',
            ],
            (object) [
                'id' => 11,
                'name' => (object) [
                    'ar' => 'أستراليا',
                    'en' => 'Australia',
                ],
                'full_name' => (object) [
                    'ar' => 'أستراليا',
                    'en' => 'Commonwealth of Australia',
                ],
                'nationality' => (object) [
                    'ar' => 'أسترالي',
                    'en' => 'Australian',
                ],
                'currency' => 'AUD',
                'code' => 'AU',
                'mobile_code' => '61',
            ],
            (object) [
                'id' => 12,
                'name' => (object) [
                    'ar' => 'النمسا',
                    'en' => 'Austria',
                ],
                'full_name' => (object) [
                    'ar' => 'الجمهورية النمساوية',
                    'en' => 'Republic of Austria',
                ],
                'nationality' => (object) [
                    'ar' => 'نمساوي',
                    'en' => 'Austria',
                ],
                'currency' => 'EUR',
                'code' => 'AT',
                'mobile_code' => '43',
            ],
            (object) [
                'id' => 13,
                'name' => (object) [
                    'ar' => 'أذربيجان',
                    'en' => 'Azerbaijan',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية أذربيجان',
                    'en' => 'Republic of Azerbaijan',
                ],
                'nationality' => (object) [
                    'ar' => 'أذربيجاني',
                    'en' => 'Azerbaijani',
                ],
                'currency' => 'AZN',
                'code' => 'AZ',
                'mobile_code' => '994',
            ],
            (object) [
                'id' => 14,
                'name' => (object) [
                    'ar' => 'الباهاما',
                    'en' => 'Bahamas',
                ],
                'full_name' => (object) [
                    'ar' => 'الباهاما',
                    'en' => 'Commonwealth of the Bahamas',
                ],
                'nationality' => (object) [
                    'ar' => 'الباهاما',
                    'en' => 'Bahamian',
                ],
                'currency' => 'BSD',
                'code' => 'BS',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 17,
                'name' => (object) [
                    'ar' => 'بربادوس',
                    'en' => 'Barbados',
                ],
                'full_name' => (object) [
                    'ar' => 'بربادوس',
                    'en' => 'Barbados',
                ],
                'nationality' => (object) [
                    'ar' => 'بربادوسي',
                    'en' => 'Barbadian',
                ],
                'currency' => 'BBD',
                'code' => 'BB',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 18,
                'name' => (object) [
                    'ar' => 'بيلاروس',
                    'en' => 'Belarus',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية بيلاروس',
                    'en' => 'Republic of Belarus',
                ],
                'nationality' => (object) [
                    'ar' => 'بيلاروسي',
                    'en' => 'Belarusian',
                ],
                'currency' => 'BYR',
                'code' => 'BY',
                'mobile_code' => '375',
            ],
            (object) [
                'id' => 19,
                'name' => (object) [
                    'ar' => 'بلجيكا',
                    'en' => 'Belgium',
                ],
                'full_name' => (object) [
                    'ar' => 'مملكة بلجيكا',
                    'en' => 'Kingdom of Belgium',
                ],
                'nationality' => (object) [
                    'ar' => 'بلجيكي',
                    'en' => 'Belgian',
                ],
                'currency' => 'EUR',
                'code' => 'BE',
                'mobile_code' => '32',
            ],
            (object) [
                'id' => 20,
                'name' => (object) [
                    'ar' => 'بليز',
                    'en' => 'Belize',
                ],
                'full_name' => (object) [
                    'ar' => 'بليز',
                    'en' => 'Belize',
                ],
                'nationality' => (object) [
                    'ar' => 'بليزي',
                    'en' => 'Belizean',
                ],
                'currency' => 'BZD',
                'code' => 'BZ',
                'mobile_code' => '501',
            ],
            (object) [
                'id' => 24,
                'name' => (object) [
                    'ar' => 'بوليفيا',
                    'en' => 'Bolivia, Plurinational State of',
                ],
                'full_name' => (object) [
                    'ar' => 'دولة بوليفيا المتعددة القوميات',
                    'en' => 'Plurinational State of Bolivia',
                ],
                'nationality' => (object) [
                    'ar' => 'بوليفي',
                    'en' => 'Bolivian',
                ],
                'currency' => 'BOB',
                'code' => 'BO',
                'mobile_code' => '591',
            ],
            (object) [
                'id' => 25,
                'name' => (object) [
                    'ar' => 'البوسنة والهرسك',
                    'en' => 'Bosnia and Herzegovina',
                ],
                'full_name' => (object) [
                    'ar' => 'البوسنة والهرسك',
                    'en' => 'Bosnia and Herzegovina',
                ],
                'nationality' => (object) [
                    'ar' => 'البوسنة والهرسك',
                    'en' => 'of Bosnia and Herzegovina',
                ],
                'currency' => 'BAM',
                'code' => 'BA',
                'mobile_code' => '387',
            ],
            (object) [
                'id' => 26,
                'name' => (object) [
                    'ar' => 'بوتسوانا',
                    'en' => 'Botswana',
                ],
                'full_name' => (object) [
                    'ar' => 'بوتسوانا',
                    'en' => 'Republic of Botswana',
                ],
                'nationality' => (object) [
                    'ar' => 'بوتسوانا',
                    'en' => 'Botswanan',
                ],
                'currency' => 'BWP',
                'code' => 'BW',
                'mobile_code' => '267',
            ],
            (object) [
                'id' => 243,
                'name' => (object) [
                    'ar' => 'جزيرة بوفيت',
                    'en' => 'Bouvet Island',
                ],
                'full_name' => (object) [
                    'ar' => 'جزيرة بوفيت',
                    'en' => 'Bouvet Island',
                ],
                'nationality' => (object) [
                    'ar' => 'جزيرة بوفيت',
                    'en' => 'of Bouvet island',
                ],
                'currency' => '',
                'code' => 'BV',
                'mobile_code' => '47',
            ],
            (object) [
                'id' => 27,
                'name' => (object) [
                    'ar' => 'البرازيل',
                    'en' => 'Brazil',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية البرازيل الاتحادية',
                    'en' => 'Federative Republic of Brazil',
                ],
                'nationality' => (object) [
                    'ar' => 'برازيلي',
                    'en' => 'Brazilian',
                ],
                'currency' => 'BRL',
                'code' => 'BR',
                'mobile_code' => '55',
            ],
            (object) [
                'id' => 244,
                'name' => (object) [
                    'ar' => 'إقليم المحيط البريطاني الهندي',
                    'en' => 'British Indian Ocean Territory',
                ],
                'full_name' => (object) [
                    'ar' => 'إقليم المحيط البريطاني الهندي',
                    'en' => 'British Indian Ocean Territory',
                ],
                'nationality' => (object) [
                    'ar' => 'إقليم المحيط البريطاني الهندي',
                    'en' => 'Changosian',
                ],
                'currency' => 'USD',
                'code' => 'IO',
                'mobile_code' => '246',
            ],
            (object) [
                'id' => 184,
                'name' => (object) [
                    'ar' => 'جزر سليمان',
                    'en' => 'Solomon Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر سليمان',
                    'en' => 'Solomon Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر سليمان',
                    'en' => 'Solomon Islander',
                ],
                'currency' => 'SBD',
                'code' => 'SB',
                'mobile_code' => '677',
            ],
            (object) [
                'id' => 254,
                'name' => (object) [
                    'ar' => 'جزر فيرجن الأمريكية',
                    'en' => 'Virgin Islands, British',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر فيرجن الأمريكية',
                    'en' => 'British Virgin Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر فيرجن الأمريكية',
                    'en' => 'British Virgin Islander',
                ],
                'currency' => 'USD',
                'code' => 'VI',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 217,
                'name' => (object) [
                    'ar' => 'جزر فيرجن الأمريكية',
                    'en' => 'US Virgin Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر فيرجن الأمريكية',
                    'en' => 'US Virgin Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر فيرجن الأمريكية',
                    'en' => 'US Virgin Islander',
                ],
                'currency' => 'USD',
                'code' => 'VG',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 28,
                'name' => (object) [
                    'ar' => 'بروناي دار السلام',
                    'en' => 'Brunei Darussalem',
                ],
                'full_name' => (object) [
                    'ar' => 'بروناي دار السلام',
                    'en' => 'Brunei Darussalem',
                ],
                'nationality' => (object) [
                    'ar' => 'بروناي',
                    'en' => 'Bruneian',
                ],
                'currency' => 'BND',
                'code' => 'BN',
                'mobile_code' => '673',
            ],
            (object) [
                'id' => 29,
                'name' => (object) [
                    'ar' => 'بلغاريا',
                    'en' => 'Bulgaria',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية بلغاريا',
                    'en' => 'Republic of Bulgaria',
                ],
                'nationality' => (object) [
                    'ar' => 'بلغاري',
                    'en' => 'Bulgarian',
                ],
                'currency' => 'BGN',
                'code' => 'BG',
                'mobile_code' => '359',
            ],
            (object) [
                'id' => 141,
                'name' => (object) [
                    'ar' => 'ميانمار',
                    'en' => 'Myanmar',
                ],
                'full_name' => (object) [
                    'ar' => 'اتحاد ميانمار',
                    'en' => 'Union of Myanmar',
                ],
                'nationality' => (object) [
                    'ar' => 'ميانمار',
                    'en' => 'Burmese',
                ],
                'currency' => 'MMK',
                'code' => 'MM',
                'mobile_code' => '95',
            ],
            (object) [
                'id' => 32,
                'name' => (object) [
                    'ar' => 'بوروندي',
                    'en' => 'Burundi',
                ],
                'full_name' => (object) [
                    'ar' => 'بوروندي',
                    'en' => 'Republic of Burundi',
                ],
                'nationality' => (object) [
                    'ar' => 'بوروندي',
                    'en' => 'Burundian',
                ],
                'currency' => 'BIF',
                'code' => 'BI',
                'mobile_code' => '257',
            ],
            (object) [
                'id' => 33,
                'name' => (object) [
                    'ar' => 'كمبوديا',
                    'en' => 'Cambodia',
                ],
                'full_name' => (object) [
                    'ar' => 'كمبوديا',
                    'en' => 'Kingdom of Cambodia',
                ],
                'nationality' => (object) [
                    'ar' => 'كمبودي',
                    'en' => 'Cambodian',
                ],
                'currency' => 'KHR',
                'code' => 'KH',
                'mobile_code' => '855',
            ],
            (object) [
                'id' => 34,
                'name' => (object) [
                    'ar' => 'الكاميرون',
                    'en' => 'Cameroon',
                ],
                'full_name' => (object) [
                    'ar' => 'الكاميرون',
                    'en' => 'Republic of Cameroon',
                ],
                'nationality' => (object) [
                    'ar' => 'كاميروني',
                    'en' => 'Cameroonian',
                ],
                'currency' => 'XAF',
                'code' => 'CM',
                'mobile_code' => '237',
            ],
            (object) [
                'id' => 35,
                'name' => (object) [
                    'ar' => 'كندا',
                    'en' => 'Canada',
                ],
                'full_name' => (object) [
                    'ar' => 'كندا',
                    'en' => 'Canada',
                ],
                'nationality' => (object) [
                    'ar' => 'كندي',
                    'en' => 'Canadian',
                ],
                'currency' => 'CAD',
                'code' => 'CA',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 37,
                'name' => (object) [
                    'ar' => 'الرأس الأخضر',
                    'en' => 'Cape Verde',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية الرأس الأخضر',
                    'en' => 'Republic of Cape Verde',
                ],
                'nationality' => (object) [
                    'ar' => 'الرأس الأخضر',
                    'en' => 'Cape Verdean',
                ],
                'currency' => 'CVE',
                'code' => 'CV',
                'mobile_code' => '238',
            ],
            (object) [
                'id' => 40,
                'name' => (object) [
                    'ar' => 'افريقيا الوسطى',
                    'en' => 'Central African',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية افريقيا الوسطى',
                    'en' => 'Central African Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'افريقيا الوسطى',
                    'en' => 'Central African',
                ],
                'currency' => 'XAF',
                'code' => 'CF',
                'mobile_code' => '236',
            ],
            (object) [
                'id' => 41,
                'name' => (object) [
                    'ar' => 'تشاد',
                    'en' => 'Chad',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية تشاد',
                    'en' => 'Republic of Chad',
                ],
                'nationality' => (object) [
                    'ar' => 'تشادي',
                    'en' => 'Chadian',
                ],
                'currency' => 'XAF',
                'code' => 'TD',
                'mobile_code' => '235',
            ],
            (object) [
                'id' => 42,
                'name' => (object) [
                    'ar' => 'تشيلي',
                    'en' => 'Chile',
                ],
                'full_name' => (object) [
                    'ar' => 'تشيلي',
                    'en' => 'Republic of Chile',
                ],
                'nationality' => (object) [
                    'ar' => 'تشيلي',
                    'en' => 'Chilean',
                ],
                'currency' => 'CLP',
                'code' => 'CL',
                'mobile_code' => '56',
            ],
            (object) [
                'id' => 43,
                'name' => (object) [
                    'ar' => 'الصين',
                    'en' => 'China',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية الصين الشعبية',
                    'en' => 'People’s Republic of China',
                ],
                'nationality' => (object) [
                    'ar' => 'صيني',
                    'en' => 'Chinese',
                ],
                'currency' => 'CNY',
                'code' => 'CN',
                'mobile_code' => '86',
            ],
            (object) [
                'id' => 202,
                'name' => (object) [
                    'ar' => 'تايوان',
                    'en' => 'Taiwan, Province of China',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية الصين، تايوان',
                    'en' => 'Republic of China, Taiwan (TW1)',
                ],
                'nationality' => (object) [
                    'ar' => 'تايواني',
                    'en' => 'Taiwanese',
                ],
                'currency' => 'TWD',
                'code' => 'TW',
                'mobile_code' => '886',
            ],
            (object) [
                'id' => 238,
                'name' => (object) [
                    'ar' => 'جزيرة الكريسماس',
                    'en' => 'Christmas Island',
                ],
                'full_name' => (object) [
                    'ar' => 'جزيرة الكريسماس',
                    'en' => 'Christmas Island Territory',
                ],
                'nationality' => (object) [
                    'ar' => 'جزيرة الكريسماس',
                    'en' => 'Christmas Islander',
                ],
                'currency' => 'AUD',
                'code' => 'CX',
                'mobile_code' => '61',
            ],
            (object) [
                'id' => 44,
                'name' => (object) [
                    'ar' => 'كولومبيا',
                    'en' => 'Colombia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية كولومبيا',
                    'en' => 'Republic of Colombia',
                ],
                'nationality' => (object) [
                    'ar' => 'كولومبي',
                    'en' => 'Colombian',
                ],
                'currency' => 'COP',
                'code' => 'CO',
                'mobile_code' => '57',
            ],
            (object) [
                'id' => 45,
                'name' => (object) [
                    'ar' => 'جزر القمر',
                    'en' => 'Comoros',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر القمر',
                    'en' => 'Union of the Comoros',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر القمر',
                    'en' => 'Comorian',
                ],
                'currency' => 'KMF',
                'code' => 'KM',
                'mobile_code' => '269',
            ],
            (object) [
                'id' => 130,
                'name' => (object) [
                    'ar' => '',
                    'en' => 'Mayotte',
                ],
                'full_name' => (object) [
                    'ar' => 'الإدارة الإدارية لجزيرة مايوت',
                    'en' => 'Departmental Collectivity of Mayotte',
                ],
                'nationality' => (object) [
                    'ar' => 'مايوت',
                    'en' => 'Mahorais',
                ],
                'currency' => 'EUR',
                'code' => 'YT',
                'mobile_code' => '262',
            ],
            (object) [
                'id' => 46,
                'name' => (object) [
                    'ar' => 'الكونغو',
                    'en' => 'Congo',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية الكونغو',
                    'en' => 'Republic of the Congo',
                ],
                'nationality' => (object) [
                    'ar' => 'الكونغو',
                    'en' => 'Congolese',
                ],
                'currency' => 'XAF',
                'code' => 'CG',
                'mobile_code' => '242',
            ],
            (object) [
                'id' => 47,
                'name' => (object) [
                    'ar' => 'جزر كوك',
                    'en' => 'Cook Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر كوك',
                    'en' => 'Cook Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر كوك',
                    'en' => 'Cook Islander',
                ],
                'currency' => 'NZD',
                'code' => 'CK',
                'mobile_code' => '682',
            ],
            (object) [
                'id' => 48,
                'name' => (object) [
                    'ar' => 'كوستا ريكا',
                    'en' => 'Costa Rica',
                ],
                'full_name' => (object) [
                    'ar' => 'كوستا ريكا',
                    'en' => 'Republic of Costa Rica',
                ],
                'nationality' => (object) [
                    'ar' => 'كوستا ريكي',
                    'en' => 'Costa Rican',
                ],
                'currency' => 'CRC',
                'code' => 'CR',
                'mobile_code' => '506',
            ],
            (object) [
                'id' => 49,
                'name' => (object) [
                    'ar' => 'كرواتيا',
                    'en' => 'Croatia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية كرواتيا',
                    'en' => 'Republic of Croatia',
                ],
                'nationality' => (object) [
                    'ar' => 'كرواتي',
                    'en' => 'Croatian',
                ],
                'currency' => 'HRK',
                'code' => 'HR',
                'mobile_code' => '385',
            ],
            (object) [
                'id' => 50,
                'name' => (object) [
                    'ar' => 'كوبا',
                    'en' => 'Cuba',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية كوبا',
                    'en' => 'Republic of Cuba',
                ],
                'nationality' => (object) [
                    'ar' => 'كوبي',
                    'en' => 'Cuban',
                ],
                'currency' => 'CUP',
                'code' => 'CU',
                'mobile_code' => '53',
            ],
            (object) [
                'id' => 51,
                'name' => (object) [
                    'ar' => 'قبرص',
                    'en' => 'Cyprus',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية قبرص',
                    'en' => 'Republic of Cyprus',
                ],
                'nationality' => (object) [
                    'ar' => 'قبرصي',
                    'en' => 'Cypriot',
                ],
                'currency' => 'EUR',
                'code' => 'CY',
                'mobile_code' => '357',
            ],
            (object) [
                'id' => 52,
                'name' => (object) [
                    'ar' => 'التشيك',
                    'en' => 'Czech Republic',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية التشيك',
                    'en' => 'Czech Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'تشيكي',
                    'en' => 'Czech',
                ],
                'currency' => 'CZK',
                'code' => 'CZ',
                'mobile_code' => '420',
            ],
            (object) [
                'id' => 21,
                'name' => (object) [
                    'ar' => 'بنين',
                    'en' => 'Benin',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية بنين',
                    'en' => 'Republic of Benin',
                ],
                'nationality' => (object) [
                    'ar' => 'بنيني',
                    'en' => 'Beninese',
                ],
                'currency' => 'XOF',
                'code' => 'BJ',
                'mobile_code' => '229',
            ],
            (object) [
                'id' => 54,
                'name' => (object) [
                    'ar' => 'الدنمارك',
                    'en' => 'Denmark',
                ],
                'full_name' => (object) [
                    'ar' => 'مملكة الدنمارك',
                    'en' => 'Kingdom of Denmark',
                ],
                'nationality' => (object) [
                    'ar' => 'دنماركي',
                    'en' => 'Danish',
                ],
                'currency' => 'DKK',
                'code' => 'DK',
                'mobile_code' => '45',
            ],
            (object) [
                'id' => 56,
                'name' => (object) [
                    'ar' => 'دومينيكا',
                    'en' => 'Dominica',
                ],
                'full_name' => (object) [
                    'ar' => 'دومينيكا',
                    'en' => 'Commonwealth of Dominica',
                ],
                'nationality' => (object) [
                    'ar' => 'دومينيكا',
                    'en' => 'Dominican',
                ],
                'currency' => 'XCD',
                'code' => 'DM',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 57,
                'name' => (object) [
                    'ar' => 'الدومنيكان',
                    'en' => 'Dominican Republic',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية الدومنيكان',
                    'en' => 'Dominican Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'الدومنيكان',
                    'en' => 'Dominican',
                ],
                'currency' => 'DOP',
                'code' => 'DO',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 58,
                'name' => (object) [
                    'ar' => 'الإكوادور',
                    'en' => 'Ecuador',
                ],
                'full_name' => (object) [
                    'ar' => 'الإكوادور',
                    'en' => 'Republic of Ecuador',
                ],
                'nationality' => (object) [
                    'ar' => 'الإكوادور',
                    'en' => 'Ecuadorian',
                ],
                'currency' => 'USD',
                'code' => 'EC',
                'mobile_code' => '593',
            ],
            (object) [
                'id' => 60,
                'name' => (object) [
                    'ar' => 'السلفادور',
                    'en' => 'El Salvador',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية السلفادور',
                    'en' => 'Republic of El Salvador',
                ],
                'nationality' => (object) [
                    'ar' => 'السلفادور',
                    'en' => 'Salvadoran',
                ],
                'currency' => 'SVC',
                'code' => 'SV',
                'mobile_code' => '503',
            ],
            (object) [
                'id' => 61,
                'name' => (object) [
                    'ar' => 'غينيا الإستوائية',
                    'en' => 'Equatorial Guinea',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية غينيا الإستوائية',
                    'en' => 'Republic of Equatorial Guinea',
                ],
                'nationality' => (object) [
                    'ar' => 'غينيا الإستوائية',
                    'en' => 'Equatorial Guinean',
                ],
                'currency' => 'XAF',
                'code' => 'GQ',
                'mobile_code' => '240',
            ],
            (object) [
                'id' => 63,
                'name' => (object) [
                    'ar' => 'استونيا',
                    'en' => 'Estonia',
                ],
                'full_name' => (object) [
                    'ar' => 'استونيا',
                    'en' => 'Republic of Estonia',
                ],
                'nationality' => (object) [
                    'ar' => 'استونيا',
                    'en' => 'Estonian',
                ],
                'currency' => 'EUR',
                'code' => 'EE',
                'mobile_code' => '372',
            ],
            (object) [
                'id' => 65,
                'name' => (object) [
                    'ar' => 'جزر فارو',
                    'en' => 'Faroe Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر فارو',
                    'en' => 'Faeroe Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر فارو',
                    'en' => 'Faeroese',
                ],
                'currency' => 'DKK',
                'code' => 'FO',
                'mobile_code' => '298',
            ],
            (object) [
                'id' => 66,
                'name' => (object) [
                    'ar' => 'جزر فوكلاند',
                    'en' => 'Falkland Islands (Malvinas)',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر فوكلاند',
                    'en' => 'Falkland Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر فوكلاند',
                    'en' => 'Falkland Islander',
                ],
                'currency' => 'FKP',
                'code' => 'FK',
                'mobile_code' => '500',
            ],
            (object) [
                'id' => 251,
                'name' => (object) [
                    'ar' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
                    'en' => 'South Georgia and the South Sandwich Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
                    'en' => 'South Georgia and the South Sandwich Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
                    'en' => 'of South Georgia and the South Sandwich Islands',
                ],
                'currency' => '',
                'code' => 'GS',
                'mobile_code' => '44',
            ],
            (object) [
                'id' => 67,
                'name' => (object) [
                    'ar' => 'فيجي',
                    'en' => 'Fiji',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية فيجي',
                    'en' => 'Republic of Fiji',
                ],
                'nationality' => (object) [
                    'ar' => 'فيجي',
                    'en' => 'Fijian',
                ],
                'currency' => 'FJD',
                'code' => 'FJ',
                'mobile_code' => '679',
            ],
            (object) [
                'id' => 68,
                'name' => (object) [
                    'ar' => 'فنلندا',
                    'en' => 'Finland',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية فنلندا',
                    'en' => 'Republic of Finland',
                ],
                'nationality' => (object) [
                    'ar' => 'فنلندا',
                    'en' => 'Finnish',
                ],
                'currency' => 'EUR',
                'code' => 'FI',
                'mobile_code' => '358',
            ],
            (object) [
                'id' => 69,
                'name' => (object) [
                    'ar' => 'فرنسا',
                    'en' => 'France',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية فرنسا',
                    'en' => 'French Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'فرنسي',
                    'en' => 'French',
                ],
                'currency' => 'EUR',
                'code' => 'FR',
                'mobile_code' => '33',
            ],
            (object) [
                'id' => 70,
                'name' => (object) [
                    'ar' => 'غيانا الفرنسية',
                    'en' => 'French Guiana',
                ],
                'full_name' => (object) [
                    'ar' => 'غيانا الفرنسية',
                    'en' => 'French Guiana',
                ],
                'nationality' => (object) [
                    'ar' => 'غيانا الفرنسية',
                    'en' => 'Guianese',
                ],
                'currency' => 'EUR',
                'code' => 'GF',
                'mobile_code' => '594',
            ],
            (object) [
                'id' => 71,
                'name' => (object) [
                    'ar' => 'بولينيزيا الفرنسية',
                    'en' => 'French Polynesia',
                ],
                'full_name' => (object) [
                    'ar' => 'بولينيزيا الفرنسية',
                    'en' => 'French Polynesia',
                ],
                'nationality' => (object) [
                    'ar' => 'بولينيزيا الفرنسية',
                    'en' => 'Polynesian',
                ],
                'currency' => 'XPF',
                'code' => 'PF',
                'mobile_code' => '689',
            ],
            (object) [
                'id' => 246,
                'name' => (object) [
                    'ar' => 'المناطق الجنوبية لفرنسا',
                    'en' => 'French Southern Territories',
                ],
                'full_name' => (object) [
                    'ar' => 'المناطق الجنوبية لفرنسا',
                    'en' => 'French Southern and Antarctic Lands',
                ],
                'nationality' => (object) [
                    'ar' => 'المناطق الجنوبية لفرنسا',
                    'en' => 'of French Southern and Antarctic Lands',
                ],
                'currency' => 'EUR',
                'code' => 'TF',
                'mobile_code' => '33',
            ],
            (object) [
                'id' => 55,
                'name' => (object) [
                    'ar' => 'جيبوتي',
                    'en' => 'Djibouti',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية جيبوتي',
                    'en' => 'Republic of Djibouti',
                ],
                'nationality' => (object) [
                    'ar' => 'جيبوتي',
                    'en' => 'Djiboutian',
                ],
                'currency' => 'DJF',
                'code' => 'DJ',
                'mobile_code' => '253',
            ],
            (object) [
                'id' => 72,
                'name' => (object) [
                    'ar' => 'الغابون',
                    'en' => 'Gabon',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية الغابون',
                    'en' => 'Gabonese Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'الغابون',
                    'en' => 'Gabonese',
                ],
                'currency' => 'XAF',
                'code' => 'GA',
                'mobile_code' => '241',
            ],
            (object) [
                'id' => 74,
                'name' => (object) [
                    'ar' => 'جورجيا',
                    'en' => 'Georgia',
                ],
                'full_name' => (object) [
                    'ar' => 'جورجيا',
                    'en' => 'Georgia',
                ],
                'nationality' => (object) [
                    'ar' => 'جورجي',
                    'en' => 'Georgian',
                ],
                'currency' => 'GEL',
                'code' => 'GE',
                'mobile_code' => '995',
            ],
            (object) [
                'id' => 73,
                'name' => (object) [
                    'ar' => 'غامبيا',
                    'en' => 'Gambia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية غامبيا',
                    'en' => 'Republic of the Gambia',
                ],
                'nationality' => (object) [
                    'ar' => 'غامبيا',
                    'en' => 'Gambian',
                ],
                'currency' => 'GMD',
                'code' => 'GM',
                'mobile_code' => '220',
            ],
            (object) [
                'id' => 75,
                'name' => (object) [
                    'ar' => 'ألمانيا',
                    'en' => 'Germany',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية ألمانيا الاتحادية',
                    'en' => 'Federal Republic of Germany',
                ],
                'nationality' => (object) [
                    'ar' => 'ألماني',
                    'en' => 'German',
                ],
                'currency' => 'EUR',
                'code' => 'DE',
                'mobile_code' => '49',
            ],
            (object) [
                'id' => 76,
                'name' => (object) [
                    'ar' => 'غانا',
                    'en' => 'Ghana',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية غانا',
                    'en' => 'Republic of Ghana',
                ],
                'nationality' => (object) [
                    'ar' => 'غانا',
                    'en' => 'Ghanaian',
                ],
                'currency' => 'GHS',
                'code' => 'GH',
                'mobile_code' => '233',
            ],
            (object) [
                'id' => 77,
                'name' => (object) [
                    'ar' => 'جبل طارق',
                    'en' => 'Gibraltar',
                ],
                'full_name' => (object) [
                    'ar' => 'جبل طارق',
                    'en' => 'Gibraltar',
                ],
                'nationality' => (object) [
                    'ar' => 'جبل طارق',
                    'en' => 'Gibraltarian',
                ],
                'currency' => 'GIP',
                'code' => 'GI',
                'mobile_code' => '350',
            ],
            (object) [
                'id' => 105,
                'name' => (object) [
                    'ar' => 'كيريباس',
                    'en' => 'Kiribati',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية كيريباس',
                    'en' => 'Republic of Kiribati',
                ],
                'nationality' => (object) [
                    'ar' => 'كيريباس',
                    'en' => 'Kiribatian',
                ],
                'currency' => 'AUD',
                'code' => 'KI',
                'mobile_code' => '686',
            ],
            (object) [
                'id' => 78,
                'name' => (object) [
                    'ar' => 'اليونان',
                    'en' => 'Greece',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية اليونان',
                    'en' => 'Hellenic Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'يوناني',
                    'en' => 'Greek',
                ],
                'currency' => 'EUR',
                'code' => 'GR',
                'mobile_code' => '30',
            ],
            (object) [
                'id' => 79,
                'name' => (object) [
                    'ar' => 'غرينلاند',
                    'en' => 'Greenland',
                ],
                'full_name' => (object) [
                    'ar' => 'غرينلاند',
                    'en' => 'Greenland',
                ],
                'nationality' => (object) [
                    'ar' => 'غرينلاند',
                    'en' => 'Greenlander',
                ],
                'currency' => 'DKK',
                'code' => 'GL',
                'mobile_code' => '299',
            ],
            (object) [
                'id' => 80,
                'name' => (object) [
                    'ar' => 'غرينادا',
                    'en' => 'Grenada',
                ],
                'full_name' => (object) [
                    'ar' => 'غرينادا',
                    'en' => 'Grenada',
                ],
                'nationality' => (object) [
                    'ar' => 'غرينادي',
                    'en' => 'Grenadian',
                ],
                'currency' => 'XCD',
                'code' => 'GD',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 81,
                'name' => (object) [
                    'ar' => 'جوادلوب',
                    'en' => 'Guadaloupe',
                ],
                'full_name' => (object) [
                    'ar' => 'جوادلوب',
                    'en' => 'Guadaloupe',
                ],
                'nationality' => (object) [
                    'ar' => 'جوادلوب',
                    'en' => 'Guadaloupe',
                ],
                'currency' => 'EUR',
                'code' => 'GP',
                'mobile_code' => '590',
            ],
            (object) [
                'id' => 82,
                'name' => (object) [
                    'ar' => 'غوام',
                    'en' => 'Guam',
                ],
                'full_name' => (object) [
                    'ar' => 'إقليم غوام',
                    'en' => 'Territory of Guam',
                ],
                'nationality' => (object) [
                    'ar' => 'غوام',
                    'en' => 'Guamanian',
                ],
                'currency' => 'USD',
                'code' => 'GU',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 83,
                'name' => (object) [
                    'ar' => 'غواتيمالا',
                    'en' => 'Guatemala',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية غواتيمالا',
                    'en' => 'Republic of Guatemala',
                ],
                'nationality' => (object) [
                    'ar' => 'غواتيمالا',
                    'en' => 'Guatemalan',
                ],
                'currency' => 'GTQ',
                'code' => 'GT',
                'mobile_code' => '502',
            ],
            (object) [
                'id' => 84,
                'name' => (object) [
                    'ar' => 'غينيا',
                    'en' => 'Guinea',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية غينيا',
                    'en' => 'Republic of Guinea',
                ],
                'nationality' => (object) [
                    'ar' => 'غينيا',
                    'en' => 'Guinean',
                ],
                'currency' => 'GNF',
                'code' => 'GN',
                'mobile_code' => '224',
            ],
            (object) [
                'id' => 86,
                'name' => (object) [
                    'ar' => 'غيانا',
                    'en' => 'Guyana',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية غيانا التعاونية',
                    'en' => 'Cooperative Republic of Guyana',
                ],
                'nationality' => (object) [
                    'ar' => 'غيانا',
                    'en' => 'Guyanese',
                ],
                'currency' => 'GYD',
                'code' => 'GY',
                'mobile_code' => '592',
            ],
            (object) [
                'id' => 87,
                'name' => (object) [
                    'ar' => 'هايتي',
                    'en' => 'Haiti',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية هايتي',
                    'en' => 'Republic of Haiti',
                ],
                'nationality' => (object) [
                    'ar' => 'هايتي',
                    'en' => 'Haitian',
                ],
                'currency' => 'HTG',
                'code' => 'HT',
                'mobile_code' => '509',
            ],
            (object) [
                'id' => 247,
                'name' => (object) [
                    'ar' => 'جزيرة هيرد وجزر ماكدونالد',
                    'en' => 'Heard Island and McDonald Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جزيرة هيرد وجزر ماكدونالد',
                    'en' => 'Territory of Heard Island and McDonald Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزيرة هيرد وجزر ماكدونالد',
                    'en' => 'of Territory of Heard Island and McDonald Islands',
                ],
                'currency' => 'USD',
                'code' => 'HM',
                'mobile_code' => '61',
            ],
            (object) [
                'id' => 88,
                'name' => (object) [
                    'ar' => 'هولي سي',
                    'en' => 'Holy See (Vatican City State)',
                ],
                'full_name' => (object) [
                    'ar' => 'هولي سي',
                    'en' => 'the Holy See/ Vatican City State',
                ],
                'nationality' => (object) [
                    'ar' => 'هولي سي',
                    'en' => 'of the Holy See/of the Vatican',
                ],
                'currency' => 'EUR',
                'code' => 'VA',
                'mobile_code' => '39',
            ],
            (object) [
                'id' => 89,
                'name' => (object) [
                    'ar' => 'هندوراس',
                    'en' => 'Honduras',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية هندوراس',
                    'en' => 'Republic of Honduras',
                ],
                'nationality' => (object) [
                    'ar' => 'هندوراسي',
                    'en' => 'Honduran',
                ],
                'currency' => 'HNL',
                'code' => 'HN',
                'mobile_code' => '504',
            ],
            (object) [
                'id' => 90,
                'name' => (object) [
                    'ar' => 'هونغ كونغ',
                    'en' => 'Hong Kong',
                ],
                'full_name' => (object) [
                    'ar' => 'هونغ كونغ',
                    'en' => 'Hong Kong Special Administrative Region of the People’s Republic of China (HK2)',
                ],
                'nationality' => (object) [
                    'ar' => 'هونغ كونغ',
                    'en' => 'Hong Kong Chinese',
                ],
                'currency' => 'HKD',
                'code' => 'HK',
                'mobile_code' => '852',
            ],
            (object) [
                'id' => 91,
                'name' => (object) [
                    'ar' => 'هنغاريا',
                    'en' => 'Hungary',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية هنغاريا',
                    'en' => 'Republic of Hungary',
                ],
                'nationality' => (object) [
                    'ar' => 'هنغاري',
                    'en' => 'Hungarian',
                ],
                'currency' => 'HUF',
                'code' => 'HU',
                'mobile_code' => '36',
            ],
            (object) [
                'id' => 92,
                'name' => (object) [
                    'ar' => 'أيسلندا',
                    'en' => 'Iceland',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية أيسلندا',
                    'en' => 'Republic of Iceland',
                ],
                'nationality' => (object) [
                    'ar' => 'أيسلندي',
                    'en' => 'Icelander',
                ],
                'currency' => 'ISK',
                'code' => 'IS',
                'mobile_code' => '354',
            ],
            (object) [
                'id' => 97,
                'name' => (object) [
                    'ar' => 'أيرلندا',
                    'en' => 'Ireland',
                ],
                'full_name' => (object) [
                    'ar' => 'أيرلندا',
                    'en' => 'Ireland (IE1)',
                ],
                'nationality' => (object) [
                    'ar' => 'أيرلندي',
                    'en' => 'Irish',
                ],
                'currency' => 'EUR',
                'code' => 'IE',
                'mobile_code' => '353',
            ],
            (object) [
                'id' => 53,
                'name' => (object) [
                    'ar' => 'كوت ديفوار',
                    'en' => 'Côte d Ivoire',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية كوت ديفوار',
                    'en' => 'Republic of Côte d’Ivoire',
                ],
                'nationality' => (object) [
                    'ar' => 'كوت ديفوار',
                    'en' => 'Ivorian',
                ],
                'currency' => 'XOF',
                'code' => 'CI',
                'mobile_code' => '225',
            ],
            (object) [
                'id' => 100,
                'name' => (object) [
                    'ar' => 'جامايكا',
                    'en' => 'Jamaica',
                ],
                'full_name' => (object) [
                    'ar' => 'جامايكا',
                    'en' => 'Jamaica',
                ],
                'nationality' => (object) [
                    'ar' => 'جامايكا',
                    'en' => 'Jamaican',
                ],
                'currency' => 'JMD',
                'code' => 'JM',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 101,
                'name' => (object) [
                    'ar' => 'اليابان',
                    'en' => 'Japan',
                ],
                'full_name' => (object) [
                    'ar' => 'اليابان',
                    'en' => 'Japan',
                ],
                'nationality' => (object) [
                    'ar' => 'ياباني',
                    'en' => 'Japanese',
                ],
                'currency' => 'JPY',
                'code' => 'JP',
                'mobile_code' => '81',
            ],
            (object) [
                'id' => 103,
                'name' => (object) [
                    'ar' => 'كازاخستان',
                    'en' => 'Kazakhstan',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية كازاخستان',
                    'en' => 'Republic of Kazakhstan',
                ],
                'nationality' => (object) [
                    'ar' => 'كازاخستاني',
                    'en' => 'Kazakh',
                ],
                'currency' => 'KZT',
                'code' => 'KZ',
                'mobile_code' => '7',
            ],
            (object) [
                'id' => 104,
                'name' => (object) [
                    'ar' => 'كينيا',
                    'en' => 'Kenya',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية كينيا',
                    'en' => 'Republic of Kenya',
                ],
                'nationality' => (object) [
                    'ar' => 'كيني',
                    'en' => 'Kenyan',
                ],
                'currency' => 'KES',
                'code' => 'KE',
                'mobile_code' => '254',
            ],
            (object) [
                'id' => 106,
                'name' => (object) [
                    'ar' => 'كوريا الشمالية',
                    'en' => 'North Korea',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية كوريا الديمقراطية االشعبية',
                    'en' => 'Democratic People’s Republic of Korea',
                ],
                'nationality' => (object) [
                    'ar' => 'كوري شمالي',
                    'en' => 'North Korean',
                ],
                'currency' => 'KPW',
                'code' => 'KP',
                'mobile_code' => '850',
            ],
            (object) [
                'id' => 107,
                'name' => (object) [
                    'ar' => 'كوريا الجنوبية',
                    'en' => 'South Korea',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية كوريا الجنوبية',
                    'en' => 'Republic of Korea',
                ],
                'nationality' => (object) [
                    'ar' => 'كوريا الجنوبية',
                    'en' => 'South Korean',
                ],
                'currency' => 'KRW',
                'code' => 'KR',
                'mobile_code' => '82',
            ],
            (object) [
                'id' => 108,
                'name' => (object) [
                    'ar' => 'الكويت',
                    'en' => 'Kuwait',
                ],
                'full_name' => (object) [
                    'ar' => 'الكويت',
                    'en' => 'State of Kuwait',
                ],
                'nationality' => (object) [
                    'ar' => 'كويتي',
                    'en' => 'Kuwaiti',
                ],
                'currency' => 'KWD',
                'code' => 'KW',
                'mobile_code' => '965',
            ],
            (object) [
                'id' => 109,
                'name' => (object) [
                    'ar' => 'قرغيزستان',
                    'en' => 'Kyrgyzstan',
                ],
                'full_name' => (object) [
                    'ar' => 'قرغيزستان',
                    'en' => 'Kyrgyz Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'قرغيزستان',
                    'en' => 'Kyrgyz',
                ],
                'currency' => 'KGS',
                'code' => 'KG',
                'mobile_code' => '996',
            ],
            (object) [
                'id' => 110,
                'name' => (object) [
                    'ar' => 'لاوس',
                    'en' => 'Laos',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية لاو الديمقراطية الشعبية',
                    'en' => 'Lao People’s Democratic Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'لاوس',
                    'en' => 'Laos',
                ],
                'currency' => 'LAK',
                'code' => 'LA',
                'mobile_code' => '856',
            ],
            (object) [
                'id' => 113,
                'name' => (object) [
                    'ar' => 'ليسوتو',
                    'en' => 'Lesotho',
                ],
                'full_name' => (object) [
                    'ar' => 'مملكة ليسوتو',
                    'en' => 'Kingdom of Lesotho',
                ],
                'nationality' => (object) [
                    'ar' => 'ليسوتو',
                    'en' => 'Basotho',
                ],
                'currency' => 'LSL',
                'code' => 'LS',
                'mobile_code' => '266',
            ],
            (object) [
                'id' => 111,
                'name' => (object) [
                    'ar' => 'لاتفيا',
                    'en' => 'Latvia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية لاتفيا',
                    'en' => 'Republic of Latvia',
                ],
                'nationality' => (object) [
                    'ar' => 'لاتفيا',
                    'en' => 'Latvian',
                ],
                'currency' => 'EUR',
                'code' => 'LV',
                'mobile_code' => '371',
            ],
            (object) [
                'id' => 114,
                'name' => (object) [
                    'ar' => 'ليبيريا',
                    'en' => 'Liberia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية ليبيريا',
                    'en' => 'Republic of Liberia',
                ],
                'nationality' => (object) [
                    'ar' => 'ليبيريا',
                    'en' => 'Liberian',
                ],
                'currency' => 'LRD',
                'code' => 'LR',
                'mobile_code' => '231',
            ],
            (object) [
                'id' => 116,
                'name' => (object) [
                    'ar' => 'ليختنشتاين',
                    'en' => 'Liechtenstein',
                ],
                'full_name' => (object) [
                    'ar' => 'ليختنشتاين',
                    'en' => 'Principality of Liechtenstein',
                ],
                'nationality' => (object) [
                    'ar' => 'ليختنشتاين',
                    'en' => 'Liechtensteiner',
                ],
                'currency' => 'CHF',
                'code' => 'LI',
                'mobile_code' => '423',
            ],
            (object) [
                'id' => 117,
                'name' => (object) [
                    'ar' => 'ليتوانيا',
                    'en' => 'Lithuania',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية ليتوانيا',
                    'en' => 'Republic of Lithuania',
                ],
                'nationality' => (object) [
                    'ar' => 'ليتوانيا',
                    'en' => 'Lithuanian',
                ],
                'currency' => 'EUR',
                'code' => 'LT',
                'mobile_code' => '370',
            ],
            (object) [
                'id' => 118,
                'name' => (object) [
                    'ar' => 'لوكسمبورغ',
                    'en' => 'Luxembourg',
                ],
                'full_name' => (object) [
                    'ar' => 'دوقية لكسمبرغ الكبرى',
                    'en' => 'Grand Duchy of Luxembourg',
                ],
                'nationality' => (object) [
                    'ar' => 'لوكسمبورغ',
                    'en' => 'Luxembourger',
                ],
                'currency' => 'EUR',
                'code' => 'LU',
                'mobile_code' => '352',
            ],
            (object) [
                'id' => 119,
                'name' => (object) [
                    'ar' => 'ماكاو',
                    'en' => 'Macao',
                ],
                'full_name' => (object) [
                    'ar' => 'ماكاو الادارية الخاصة لجمهورية الصين الشعبية',
                    'en' => 'Macao Special Administrative Region of the People’s Republic of China (MO2)',
                ],
                'nationality' => (object) [
                    'ar' => 'ماكاو',
                    'en' => 'Macanese',
                ],
                'currency' => 'MOP',
                'code' => 'MO',
                'mobile_code' => '853',
            ],
            (object) [
                'id' => 120,
                'name' => (object) [
                    'ar' => 'مدغشقر',
                    'en' => 'Madagascar',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية مدغشقر',
                    'en' => 'Republic of Madagascar',
                ],
                'nationality' => (object) [
                    'ar' => 'مدغشقر',
                    'en' => 'Malagasy',
                ],
                'currency' => 'MGA',
                'code' => 'MG',
                'mobile_code' => '261',
            ],
            (object) [
                'id' => 121,
                'name' => (object) [
                    'ar' => 'مالاوي',
                    'en' => 'Malawi',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية مالاوي',
                    'en' => 'Republic of Malawi',
                ],
                'nationality' => (object) [
                    'ar' => 'مالاوي',
                    'en' => 'Malawian',
                ],
                'currency' => 'MWK',
                'code' => 'MW',
                'mobile_code' => '265',
            ],
            (object) [
                'id' => 123,
                'name' => (object) [
                    'ar' => 'جزر المالديف',
                    'en' => 'Maldives',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية جزر المالديف',
                    'en' => 'Republic of Maldives',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر المالديف',
                    'en' => 'Maldivian',
                ],
                'currency' => 'MVR',
                'code' => 'MV',
                'mobile_code' => '960',
            ],
            (object) [
                'id' => 124,
                'name' => (object) [
                    'ar' => 'مالي',
                    'en' => 'Mali',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية مالي',
                    'en' => 'Republic of Mali',
                ],
                'nationality' => (object) [
                    'ar' => 'مالي',
                    'en' => 'Malian',
                ],
                'currency' => 'XOF',
                'code' => 'ML',
                'mobile_code' => '223',
            ],
            (object) [
                'id' => 125,
                'name' => (object) [
                    'ar' => 'مالطا',
                    'en' => 'Malta',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية مالطا',
                    'en' => 'Republic of Malta',
                ],
                'nationality' => (object) [
                    'ar' => 'مالطا',
                    'en' => 'Maltese',
                ],
                'currency' => 'EUR',
                'code' => 'MT',
                'mobile_code' => '356',
            ],
            (object) [
                'id' => 127,
                'name' => (object) [
                    'ar' => 'مارتينيك',
                    'en' => 'Martinique',
                ],
                'full_name' => (object) [
                    'ar' => 'مارتينيك',
                    'en' => 'Martinique',
                ],
                'nationality' => (object) [
                    'ar' => 'مارتينيك',
                    'en' => 'Martinican',
                ],
                'currency' => 'EUR',
                'code' => 'MQ',
                'mobile_code' => '596',
            ],
            (object) [
                'id' => 129,
                'name' => (object) [
                    'ar' => 'موريشيوس',
                    'en' => 'Mauritius',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية موريشيوس',
                    'en' => 'Republic of Mauritius',
                ],
                'nationality' => (object) [
                    'ar' => 'موريشيوس',
                    'en' => 'Mauritian',
                ],
                'currency' => 'MUR',
                'code' => 'MU',
                'mobile_code' => '230',
            ],
            (object) [
                'id' => 131,
                'name' => (object) [
                    'ar' => 'المكسيك',
                    'en' => 'Mexico',
                ],
                'full_name' => (object) [
                    'ar' => 'الولايات المتحدة المكسيكية',
                    'en' => 'United Mexican States',
                ],
                'nationality' => (object) [
                    'ar' => 'مكسيكي',
                    'en' => 'Mexican',
                ],
                'currency' => 'MXN',
                'code' => 'MX',
                'mobile_code' => '52',
            ],
            (object) [
                'id' => 135,
                'name' => (object) [
                    'ar' => 'موناكو',
                    'en' => 'Monaco',
                ],
                'full_name' => (object) [
                    'ar' => 'إمارة موناكو',
                    'en' => 'Principality of Monaco',
                ],
                'nationality' => (object) [
                    'ar' => 'موناكو',
                    'en' => 'Monegasque',
                ],
                'currency' => 'EUR',
                'code' => 'MC',
                'mobile_code' => '377',
            ],
            (object) [
                'id' => 136,
                'name' => (object) [
                    'ar' => 'منغوليا',
                    'en' => 'Mongolia',
                ],
                'full_name' => (object) [
                    'ar' => 'منغوليا',
                    'en' => 'Mongolia',
                ],
                'nationality' => (object) [
                    'ar' => 'منغولي',
                    'en' => 'Mongolian',
                ],
                'currency' => 'MNT',
                'code' => 'MN',
                'mobile_code' => '976',
            ],
            (object) [
                'id' => 134,
                'name' => (object) [
                    'ar' => 'مولدوفا',
                    'en' => 'Moldova, Republic of',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية مولدوفا',
                    'en' => 'Republic of Moldova',
                ],
                'nationality' => (object) [
                    'ar' => 'مولدوفي',
                    'en' => 'Moldovan',
                ],
                'currency' => 'MDL',
                'code' => 'MD',
                'mobile_code' => '373',
            ],
            (object) [
                'id' => 137,
                'name' => (object) [
                    'ar' => 'مونتينيغرو',
                    'en' => 'Montenegro',
                ],
                'full_name' => (object) [
                    'ar' => 'مونتينيغرو',
                    'en' => 'Montenegro',
                ],
                'nationality' => (object) [
                    'ar' => 'مونتينيغرو',
                    'en' => 'Montenegrin',
                ],
                'currency' => 'EUR',
                'code' => 'ME',
                'mobile_code' => '382',
            ],
            (object) [
                'id' => 138,
                'name' => (object) [
                    'ar' => 'مونتسيرات',
                    'en' => 'Montserrat',
                ],
                'full_name' => (object) [
                    'ar' => 'مونتسيرات',
                    'en' => 'Montserrat',
                ],
                'nationality' => (object) [
                    'ar' => 'مونتسيرات',
                    'en' => 'Montserratian',
                ],
                'currency' => 'XCD',
                'code' => 'MS',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 140,
                'name' => (object) [
                    'ar' => 'موزمبيق',
                    'en' => 'Mozambique',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية موزمبيق',
                    'en' => 'Republic of Mozambique',
                ],
                'nationality' => (object) [
                    'ar' => 'موزمبيق',
                    'en' => 'Mozambican',
                ],
                'currency' => 'MZN',
                'code' => 'MZ',
                'mobile_code' => '258',
            ],
            (object) [
                'id' => 142,
                'name' => (object) [
                    'ar' => 'ناميبيا',
                    'en' => 'Namibia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية ناميبيا',
                    'en' => 'Republic of Namibia',
                ],
                'nationality' => (object) [
                    'ar' => 'ناميبيا',
                    'en' => 'Namibian',
                ],
                'currency' => 'NAD',
                'code' => 'NA',
                'mobile_code' => '264',
            ],
            (object) [
                'id' => 143,
                'name' => (object) [
                    'ar' => 'ناورو',
                    'en' => 'Nauru',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية ناورو',
                    'en' => 'Republic of Nauru',
                ],
                'nationality' => (object) [
                    'ar' => 'ناورو',
                    'en' => 'Nauruan',
                ],
                'currency' => 'AUD',
                'code' => 'NR',
                'mobile_code' => '674',
            ],
            (object) [
                'id' => 145,
                'name' => (object) [
                    'ar' => 'هولندا',
                    'en' => 'Netherlands',
                ],
                'full_name' => (object) [
                    'ar' => 'مملكة هولندا',
                    'en' => 'Kingdom of the Netherlands',
                ],
                'nationality' => (object) [
                    'ar' => 'هولندي',
                    'en' => 'Dutch',
                ],
                'currency' => 'EUR',
                'code' => 'NL',
                'mobile_code' => '31',
            ],
            (object) [
                'id' => 146,
                'name' => (object) [
                    'ar' => 'جزر الأنتيل الهولندية',
                    'en' => 'Netherlands Antilles',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر الأنتيل الهولندية',
                    'en' => 'Netherlands Antilles',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر الأنتيل الهولندية',
                    'en' => 'Netherlands Antilles',
                ],
                'currency' => 'EUR',
                'code' => 'NL',
                'mobile_code' => '31',
            ],
            (object) [
                'id' => 236,
                'name' => (object) [
                    'ar' => 'كوسوفو',
                    'en' => 'Kosovo',
                ],
                'full_name' => (object) [
                    'ar' => 'كوسوفو',
                    'en' => 'Kosovo',
                ],
                'nationality' => (object) [
                    'ar' => 'كوسوفو',
                    'en' => 'Kosovo',
                ],
                'currency' => 'EUR',
                'code' => 'XK',
                'mobile_code' => '383',
            ],
            (object) [
                'id' => 245,
                'name' => (object) [
                    'ar' => 'كوراساو',
                    'en' => 'Curaçao',
                ],
                'full_name' => (object) [
                    'ar' => 'كوراساو',
                    'en' => 'Curaçao',
                ],
                'nationality' => (object) [
                    'ar' => 'كوراساو',
                    'en' => 'Curaçaoan',
                ],
                'currency' => 'ANG',
                'code' => 'CW',
                'mobile_code' => '599',
            ],
            (object) [
                'id' => 147,
                'name' => (object) [
                    'ar' => 'كاليدونيا الجديدة',
                    'en' => 'New Caledonia',
                ],
                'full_name' => (object) [
                    'ar' => 'كاليدونيا الجديدة',
                    'en' => 'New Caledonia',
                ],
                'nationality' => (object) [
                    'ar' => 'كاليدونيا الجديدة',
                    'en' => 'New Caledonian',
                ],
                'currency' => 'XPF',
                'code' => 'NC',
                'mobile_code' => '687',
            ],
            (object) [
                'id' => 225,
                'name' => (object) [
                    'ar' => 'فانواتو',
                    'en' => 'Vanuatu',
                ],
                'full_name' => (object) [
                    'ar' => 'فانواتو',
                    'en' => 'Republic of Vanuatu',
                ],
                'nationality' => (object) [
                    'ar' => 'فانواتو',
                    'en' => 'Vanuatuan',
                ],
                'currency' => 'VUV',
                'code' => 'VU',
                'mobile_code' => '678',
            ],
            (object) [
                'id' => 148,
                'name' => (object) [
                    'ar' => 'نيوزيلاندا',
                    'en' => 'New Zealand',
                ],
                'full_name' => (object) [
                    'ar' => 'نيوزيلاندا',
                    'en' => 'New Zealand',
                ],
                'nationality' => (object) [
                    'ar' => 'نيوزيلاندي',
                    'en' => 'New Zealander',
                ],
                'currency' => 'NZD',
                'code' => 'NZ',
                'mobile_code' => '64',
            ],
            (object) [
                'id' => 149,
                'name' => (object) [
                    'ar' => 'نيكاراغوا',
                    'en' => 'Nicaragua',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية نيكاراغوا',
                    'en' => 'Republic of Nicaragua',
                ],
                'nationality' => (object) [
                    'ar' => 'نيكاراغوا',
                    'en' => 'Nicaraguan',
                ],
                'currency' => 'NIO',
                'code' => 'NI',
                'mobile_code' => '505',
            ],
            (object) [
                'id' => 150,
                'name' => (object) [
                    'ar' => 'النيجر',
                    'en' => 'Niger',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية النيجر',
                    'en' => 'Republic of Niger',
                ],
                'nationality' => (object) [
                    'ar' => 'النيجر',
                    'en' => 'Nigerien',
                ],
                'currency' => 'XOF',
                'code' => 'NE',
                'mobile_code' => '227',
            ],
            (object) [
                'id' => 151,
                'name' => (object) [
                    'ar' => 'نيجيريا',
                    'en' => 'Nigeria',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية نيجيريا الاتحادية',
                    'en' => 'Federal Republic of Nigeria',
                ],
                'nationality' => (object) [
                    'ar' => 'نيجيريا',
                    'en' => 'Nigerian',
                ],
                'currency' => 'NGN',
                'code' => 'NG',
                'mobile_code' => '234',
            ],
            (object) [
                'id' => 152,
                'name' => (object) [
                    'ar' => 'نيوي',
                    'en' => 'Niue',
                ],
                'full_name' => (object) [
                    'ar' => 'نيوي (جزيرة كوك)',
                    'en' => 'Niue (Cook Island)',
                ],
                'nationality' => (object) [
                    'ar' => 'نيوي',
                    'en' => 'Niuean',
                ],
                'currency' => 'NZD',
                'code' => 'NU',
                'mobile_code' => '683',
            ],
            (object) [
                'id' => 153,
                'name' => (object) [
                    'ar' => 'جزيرة نورفولك',
                    'en' => 'Norfolk Island',
                ],
                'full_name' => (object) [
                    'ar' => 'جزيرة نورفولك',
                    'en' => 'Territory of Norfolk Island',
                ],
                'nationality' => (object) [
                    'ar' => 'جزيرة نورفولك',
                    'en' => 'Norfolk Islander',
                ],
                'currency' => 'AUD',
                'code' => 'NF',
                'mobile_code' => '672',
            ],
            (object) [
                'id' => 155,
                'name' => (object) [
                    'ar' => 'النرويج',
                    'en' => 'Norway',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية النرويج',
                    'en' => 'Kingdom of Norway',
                ],
                'nationality' => (object) [
                    'ar' => 'النرويج',
                    'en' => 'Norwegian',
                ],
                'currency' => 'NOK',
                'code' => 'NO',
                'mobile_code' => '47',
            ],
            (object) [
                'id' => 154,
                'name' => (object) [
                    'ar' => 'جزر مريانا الشمالية',
                    'en' => 'Northern Mariana Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر مريانا الشمالية',
                    'en' => 'Commonwealth of the Northern Mariana Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر مريانا الشمالية',
                    'en' => 'Northern Mariana Islander',
                ],
                'currency' => 'USD',
                'code' => 'MP',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 253,
                'name' => (object) [
                    'ar' => 'جزر الولايات المتحدة البعيدة الصغرى',
                    'en' => 'United States Minor Outlying Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر الولايات المتحدة البعيدة الصغرى',
                    'en' => 'United States Minor Outlying Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر الولايات المتحدة البعيدة الصغرى',
                    'en' => 'of United States Minor Outlying Islands',
                ],
                'currency' => 'USD',
                'code' => 'UM',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 132,
                'name' => (object) [
                    'ar' => 'ميكرونيزيا',
                    'en' => 'Micronesia',
                ],
                'full_name' => (object) [
                    'ar' => 'ولايات ميكرونيزيا الموحدة',
                    'en' => 'Federated States of Micronesia',
                ],
                'nationality' => (object) [
                    'ar' => 'ميكرونيزيا',
                    'en' => 'Micronesian',
                ],
                'currency' => 'USD',
                'code' => 'FM',
                'mobile_code' => '691',
            ],
            (object) [
                'id' => 126,
                'name' => (object) [
                    'ar' => 'مارشال',
                    'en' => 'Marshall Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية جزر مارشال',
                    'en' => 'Republic of the Marshall Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'مارشال',
                    'en' => 'Marshallese',
                ],
                'currency' => 'USD',
                'code' => 'MH',
                'mobile_code' => '692',
            ],
            (object) [
                'id' => 158,
                'name' => (object) [
                    'ar' => 'بالاو',
                    'en' => 'Palau',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية بالاو',
                    'en' => 'Republic of Palau',
                ],
                'nationality' => (object) [
                    'ar' => 'بالاوي',
                    'en' => 'Palauan',
                ],
                'currency' => 'USD',
                'code' => 'PW',
                'mobile_code' => '680',
            ],
            (object) [
                'id' => 160,
                'name' => (object) [
                    'ar' => 'بناما',
                    'en' => 'Panama',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية بناما',
                    'en' => 'Republic of Panama',
                ],
                'nationality' => (object) [
                    'ar' => 'بناما',
                    'en' => 'Panamanian',
                ],
                'currency' => 'PAB',
                'code' => 'PA',
                'mobile_code' => '507',
            ],
            (object) [
                'id' => 161,
                'name' => (object) [
                    'ar' => 'بابوا غينيا الجديدة',
                    'en' => 'Papua New Guinea',
                ],
                'full_name' => (object) [
                    'ar' => 'بابوا غينيا الجديدة',
                    'en' => 'Independent State of Papua New Guinea',
                ],
                'nationality' => (object) [
                    'ar' => 'بابوا غينيا الجديدة',
                    'en' => 'Papua New Guinean',
                ],
                'currency' => 'PGK',
                'code' => 'PG',
                'mobile_code' => '675',
            ],
            (object) [
                'id' => 162,
                'name' => (object) [
                    'ar' => 'باراغواي',
                    'en' => 'Paraguay',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية باراغواي',
                    'en' => 'Republic of Paraguay',
                ],
                'nationality' => (object) [
                    'ar' => 'باراغواي',
                    'en' => 'Paraguayan',
                ],
                'currency' => 'PYG',
                'code' => 'PY',
                'mobile_code' => '595',
            ],
            (object) [
                'id' => 163,
                'name' => (object) [
                    'ar' => 'بيرو',
                    'en' => 'Peru',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية بيرو',
                    'en' => 'Republic of Peru',
                ],
                'nationality' => (object) [
                    'ar' => 'بيرو',
                    'en' => 'Peruvian',
                ],
                'currency' => 'PEN',
                'code' => 'PE',
                'mobile_code' => '51',
            ],
            (object) [
                'id' => 165,
                'name' => (object) [
                    'ar' => 'بيتكيرن',
                    'en' => 'Pitcairn',
                ],
                'full_name' => (object) [
                    'ar' => 'جزيرة بيتكيرن',
                    'en' => 'Pitcairn Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'بيتكيرن',
                    'en' => 'Pitcairner',
                ],
                'currency' => 'NZD',
                'code' => 'PN',
                'mobile_code' => '649',
            ],
            (object) [
                'id' => 166,
                'name' => (object) [
                    'ar' => 'بولندا',
                    'en' => 'Poland',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية بولندا',
                    'en' => 'Republic of Poland',
                ],
                'nationality' => (object) [
                    'ar' => 'بولنداي',
                    'en' => 'Polish',
                ],
                'currency' => 'PLN',
                'code' => 'PL',
                'mobile_code' => '48',
            ],
            (object) [
                'id' => 167,
                'name' => (object) [
                    'ar' => 'البرتغال',
                    'en' => 'Portugal',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية البرتغال',
                    'en' => 'Portuguese Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'برتغالي',
                    'en' => 'Portuguese',
                ],
                'currency' => 'EUR',
                'code' => 'PT',
                'mobile_code' => '351',
            ],
            (object) [
                'id' => 85,
                'name' => (object) [
                    'ar' => 'غينيا بيساو',
                    'en' => 'Guinea-Bissau',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية غينيا بيساو',
                    'en' => 'Republic of Guinea-Bissau',
                ],
                'nationality' => (object) [
                    'ar' => 'غينيا بيساو',
                    'en' => 'Guinea-Bissau national',
                ],
                'currency' => 'XOF',
                'code' => 'GW',
                'mobile_code' => '245',
            ],
            (object) [
                'id' => 206,
                'name' => (object) [
                    'ar' => 'تيمور الشرقية',
                    'en' => 'Timor-Leste',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية تيمور الشرقية',
                    'en' => 'Democratic Republic of East Timor',
                ],
                'nationality' => (object) [
                    'ar' => 'تيمور الشرقية',
                    'en' => 'East Timorese',
                ],
                'currency' => 'USD',
                'code' => 'TL',
                'mobile_code' => '670',
            ],
            (object) [
                'id' => 168,
                'name' => (object) [
                    'ar' => 'بورتوريكو',
                    'en' => 'Puerto Rico',
                ],
                'full_name' => (object) [
                    'ar' => 'بورتوريكو',
                    'en' => 'Commonwealth of Puerto Rico',
                ],
                'nationality' => (object) [
                    'ar' => 'بورتوريكو',
                    'en' => 'Puerto Rican',
                ],
                'currency' => 'USD',
                'code' => 'PR',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 170,
                'name' => (object) [
                    'ar' => 'لا ريونيون',
                    'en' => 'Réunion',
                ],
                'full_name' => (object) [
                    'ar' => 'لا ريونيون',
                    'en' => 'Réunion',
                ],
                'nationality' => (object) [
                    'ar' => 'لا ريونيون',
                    'en' => 'Reunionese',
                ],
                'currency' => 'EUR',
                'code' => 'RE',
                'mobile_code' => '262',
            ],
            (object) [
                'id' => 171,
                'name' => (object) [
                    'ar' => 'رومانيا',
                    'en' => 'Romania',
                ],
                'full_name' => (object) [
                    'ar' => 'رومانيا',
                    'en' => 'Romania',
                ],
                'nationality' => (object) [
                    'ar' => 'رومانيا',
                    'en' => 'Romanian',
                ],
                'currency' => 'RON',
                'code' => 'RO',
                'mobile_code' => '40',
            ],
            (object) [
                'id' => 172,
                'name' => (object) [
                    'ar' => 'روسيا',
                    'en' => 'Russia',
                ],
                'full_name' => (object) [
                    'ar' => 'الاتحاد الروسي',
                    'en' => 'Russian Federation',
                ],
                'nationality' => (object) [
                    'ar' => 'روسي',
                    'en' => 'Russian',
                ],
                'currency' => 'RUB',
                'code' => 'RU',
                'mobile_code' => '7',
            ],
            (object) [
                'id' => 173,
                'name' => (object) [
                    'ar' => 'رواندا',
                    'en' => 'Rwanda',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية رواندا',
                    'en' => 'Republic of Rwanda',
                ],
                'nationality' => (object) [
                    'ar' => 'رواندي',
                    'en' => 'Rwandan',
                ],
                'currency' => 'RWF',
                'code' => 'RW',
                'mobile_code' => '250',
            ],
            (object) [
                'id' => 248,
                'name' => (object) [
                    'ar' => 'سانت بارتيليمي',
                    'en' => 'Saint Barthélemy',
                ],
                'full_name' => (object) [
                    'ar' => 'سانت بارتيليمي',
                    'en' => 'Collectivity of Saint Barthélemy',
                ],
                'nationality' => (object) [
                    'ar' => 'سانت بارتيليمي',
                    'en' => 'of Saint Barthélemy',
                ],
                'currency' => 'EUR',
                'code' => 'BL',
                'mobile_code' => '590',
            ],
            (object) [
                'id' => 189,
                'name' => (object) [
                    'ar' => 'سانت هيلونا',
                    'en' => 'Saint Helena',
                ],
                'full_name' => (object) [
                    'ar' => 'سانت هيلينا، أسينسيون وتريستان دا كونه',
                    'en' => 'Saint Helena, Ascension and Tristan da Cunha',
                ],
                'nationality' => (object) [
                    'ar' => 'سانت هيلينا، أسينسيون وتريستان دا كونه',
                    'en' => 'Saint Helenian',
                ],
                'currency' => 'SHP',
                'code' => 'SH',
                'mobile_code' => '290',
            ],
            (object) [
                'id' => 190,
                'name' => (object) [
                    'ar' => 'سانت كيتس ونيفيس',
                    'en' => 'Saint Kitts and Nevis',
                ],
                'full_name' => (object) [
                    'ar' => 'اتحاد سانت كيتس ونيفيس',
                    'en' => 'Federation of Saint Kitts and Nevis',
                ],
                'nationality' => (object) [
                    'ar' => 'سانت كيتس ونيفيس',
                    'en' => 'Kittsian; Nevisian',
                ],
                'currency' => 'XCD',
                'code' => 'KN',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 191,
                'name' => (object) [
                    'ar' => 'سانت لوسيا',
                    'en' => 'Saint Lucia',
                ],
                'full_name' => (object) [
                    'ar' => 'سانت لوسيا',
                    'en' => 'Saint Lucia',
                ],
                'nationality' => (object) [
                    'ar' => 'سانت لوسيا',
                    'en' => 'Saint Lucian',
                ],
                'currency' => 'XCD',
                'code' => 'LC',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 249,
                'name' => (object) [
                    'ar' => 'سانت مارتن (الجزء الفرنسي)',
                    'en' => 'Saint Martin (French part)',
                ],
                'full_name' => (object) [
                    'ar' => 'سانت مارتن (الجزء الفرنسي)',
                    'en' => 'Collectivity of Saint Martin',
                ],
                'nationality' => (object) [
                    'ar' => 'سانت مارتن (الجزء الفرنسي)',
                    'en' => 'of Saint Martin',
                ],
                'currency' => 'EUR',
                'code' => 'MF',
                'mobile_code' => '590',
            ],
            (object) [
                'id' => 250,
                'name' => (object) [
                    'ar' => 'سانت مارتن (الجزء الهولندي)',
                    'en' => 'Sint Martin (Dutch Part)',
                ],
                'full_name' => (object) [
                    'ar' => 'سانت مارتن (الجزء الهولندي)',
                    'en' => 'Sint Martin (Dutch Part)',
                ],
                'nationality' => (object) [
                    'ar' => 'سانت مارتن (الجزء الهولندي)',
                    'en' => 'of Saint Martin',
                ],
                'currency' => 'EUR',
                'code' => 'MF',
                'mobile_code' => '590',
            ],
            (object) [
                'id' => 192,
                'name' => (object) [
                    'ar' => 'سانت بيير وميكلون',
                    'en' => 'Saint Pierre and Miquelon',
                ],
                'full_name' => (object) [
                    'ar' => 'سانت بيير وميكلون',
                    'en' => 'Territorial Collectivity of Saint Pierre and Miquelon',
                ],
                'nationality' => (object) [
                    'ar' => 'سانت بيير وميكلون',
                    'en' => 'St-Pierrais; Miquelonnais',
                ],
                'currency' => 'EUR',
                'code' => 'PM',
                'mobile_code' => '508',
            ],
            (object) [
                'id' => 193,
                'name' => (object) [
                    'ar' => 'سانت فنسنت وجزر غرينادين',
                    'en' => 'Saint Vincent and the Grenadines',
                ],
                'full_name' => (object) [
                    'ar' => 'سانت فنسنت وجزر غرينادين',
                    'en' => 'Saint Vincent and the Grenadines',
                ],
                'nationality' => (object) [
                    'ar' => 'سانت فنسنت وجزر غرينادين',
                    'en' => 'Vincentian',
                ],
                'currency' => 'XCD',
                'code' => 'VC',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 174,
                'name' => (object) [
                    'ar' => 'سان مارينو',
                    'en' => 'San Marino',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية سان مارينو',
                    'en' => 'Republic of San Marino',
                ],
                'nationality' => (object) [
                    'ar' => 'سان مارينو',
                    'en' => 'San Marinese',
                ],
                'currency' => 'EUR',
                'code' => 'SM',
                'mobile_code' => '378',
            ],
            (object) [
                'id' => 175,
                'name' => (object) [
                    'ar' => 'ساو تومي وبرينسيبي',
                    'en' => 'Sao Tome and Principe',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية ساو تومي وبرينسيبي الديمقراطية',
                    'en' => 'Democratic Republic of São Tomé and Príncipe',
                ],
                'nationality' => (object) [
                    'ar' => 'ساو تومي وبرينسيبي',
                    'en' => 'São Toméan',
                ],
                'currency' => 'STD',
                'code' => 'ST',
                'mobile_code' => '239',
            ],
            (object) [
                'id' => 177,
                'name' => (object) [
                    'ar' => 'السنغال',
                    'en' => 'Senegal',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية السنغال',
                    'en' => 'Republic of Senegal',
                ],
                'nationality' => (object) [
                    'ar' => 'السنغال',
                    'en' => 'Senegalese',
                ],
                'currency' => 'XOF',
                'code' => 'SN',
                'mobile_code' => '221',
            ],
            (object) [
                'id' => 178,
                'name' => (object) [
                    'ar' => 'صربيا',
                    'en' => 'Serbia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية صربيا',
                    'en' => 'Republic of Serbia',
                ],
                'nationality' => (object) [
                    'ar' => 'صربي',
                    'en' => 'Serb',
                ],
                'currency' => 'RSD',
                'code' => 'RS',
                'mobile_code' => '381',
            ],
            (object) [
                'id' => 179,
                'name' => (object) [
                    'ar' => 'سيشيل',
                    'en' => 'Seychelles',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية سيشيل',
                    'en' => 'Republic of Seychelles',
                ],
                'nationality' => (object) [
                    'ar' => 'سيشيل',
                    'en' => 'Seychellois',
                ],
                'currency' => 'SCR',
                'code' => 'SC',
                'mobile_code' => '248',
            ],
            (object) [
                'id' => 180,
                'name' => (object) [
                    'ar' => 'سيرا ليون',
                    'en' => 'Sierra Leone',
                ],
                'full_name' => (object) [
                    'ar' => 'جزيرة سيرا ليون',
                    'en' => 'Republic of Sierra Leone',
                ],
                'nationality' => (object) [
                    'ar' => 'سيرا ليون',
                    'en' => 'Sierra Leonean',
                ],
                'currency' => 'SLL',
                'code' => 'SL',
                'mobile_code' => '232',
            ],
            (object) [
                'id' => 181,
                'name' => (object) [
                    'ar' => 'سنغافورة',
                    'en' => 'Singapore',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية سنغافورة',
                    'en' => 'Republic of Singapore',
                ],
                'nationality' => (object) [
                    'ar' => 'سنغافورة',
                    'en' => 'Singaporean',
                ],
                'currency' => 'SGD',
                'code' => 'SG',
                'mobile_code' => '65',
            ],
            (object) [
                'id' => 182,
                'name' => (object) [
                    'ar' => 'سلوفاكيا',
                    'en' => 'Slovakia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية سلوفاكيا',
                    'en' => 'Slovak Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'سلوفاكي',
                    'en' => 'Slovak',
                ],
                'currency' => 'EUR',
                'code' => 'SK',
                'mobile_code' => '421',
            ],
            (object) [
                'id' => 227,
                'name' => (object) [
                    'ar' => 'فيتنام',
                    'en' => 'Viet Nam',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية فيتنام الاشتراكية',
                    'en' => 'Socialist Republic of Vietnam',
                ],
                'nationality' => (object) [
                    'ar' => 'فيتنامي',
                    'en' => 'Vietnamese',
                ],
                'currency' => 'VND',
                'code' => 'VN',
                'mobile_code' => '84',
            ],
            (object) [
                'id' => 183,
                'name' => (object) [
                    'ar' => 'سلوفينيا',
                    'en' => 'Slovenia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية سلوفينيا',
                    'en' => 'Republic of Slovenia',
                ],
                'nationality' => (object) [
                    'ar' => 'سلوفيني',
                    'en' => 'Slovene',
                ],
                'currency' => 'EUR',
                'code' => 'SI',
                'mobile_code' => '386',
            ],
            (object) [
                'id' => 234,
                'name' => (object) [
                    'ar' => 'زيمبابوي',
                    'en' => 'Zimbabwe',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية زيمبابوي',
                    'en' => 'Republic of Zimbabwe',
                ],
                'nationality' => (object) [
                    'ar' => 'زيمبابوي',
                    'en' => 'Zimbabwean',
                ],
                'currency' => 'ZWL',
                'code' => 'ZW',
                'mobile_code' => '263',
            ],
            (object) [
                'id' => 187,
                'name' => (object) [
                    'ar' => 'إسبانيا',
                    'en' => 'Spain',
                ],
                'full_name' => (object) [
                    'ar' => 'مملكة إسبانيا',
                    'en' => 'Kingdom of Spain',
                ],
                'nationality' => (object) [
                    'ar' => 'إسباني',
                    'en' => 'Spaniard',
                ],
                'currency' => 'EUR',
                'code' => 'ES',
                'mobile_code' => '34',
            ],
            (object) [
                'id' => 229,
                'name' => (object) [
                    'ar' => 'الصحراء الغربية',
                    'en' => 'Western Sahara',
                ],
                'full_name' => (object) [
                    'ar' => 'الصحراء الغربية',
                    'en' => 'Western Sahara',
                ],
                'nationality' => (object) [
                    'ar' => 'صحراوي',
                    'en' => 'Sahrawi',
                ],
                'currency' => 'MAD',
                'code' => 'EH',
                'mobile_code' => '212',
            ],
            (object) [
                'id' => 195,
                'name' => (object) [
                    'ar' => 'سورينام',
                    'en' => 'Suriname',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية سورينام',
                    'en' => 'Republic of Suriname',
                ],
                'nationality' => (object) [
                    'ar' => 'سورينامي',
                    'en' => 'Surinamese',
                ],
                'currency' => 'SRD',
                'code' => 'SR',
                'mobile_code' => '597',
            ],
            (object) [
                'id' => 196,
                'name' => (object) [
                    'ar' => 'سفالبارد وجان ماين',
                    'en' => 'Svalbard and Jan Mayen',
                ],
                'full_name' => (object) [
                    'ar' => 'سفالبارد وجان ماين',
                    'en' => 'Svalbard and Jan Mayen',
                ],
                'nationality' => (object) [
                    'ar' => 'سفالبارد وجان ماين',
                    'en' => 'of Svalbard',
                ],
                'currency' => 'NOK',
                'code' => 'SJ',
                'mobile_code' => '47',
            ],
            (object) [
                'id' => 197,
                'name' => (object) [
                    'ar' => 'سوازيلاند',
                    'en' => 'Swaziland',
                ],
                'full_name' => (object) [
                    'ar' => 'مملكة سوازيلاند',
                    'en' => 'Kingdom of Swaziland',
                ],
                'nationality' => (object) [
                    'ar' => 'سوازيلاند',
                    'en' => 'Swazi',
                ],
                'currency' => 'SZL',
                'code' => 'SZ',
                'mobile_code' => '268',
            ],
            (object) [
                'id' => 198,
                'name' => (object) [
                    'ar' => 'السويد',
                    'en' => 'Sweden',
                ],
                'full_name' => (object) [
                    'ar' => 'مملكة السويد',
                    'en' => 'Kingdom of Sweden',
                ],
                'nationality' => (object) [
                    'ar' => 'سويدي',
                    'en' => 'Swedish',
                ],
                'currency' => 'SEK',
                'code' => 'SE',
                'mobile_code' => '46',
            ],
            (object) [
                'id' => 199,
                'name' => (object) [
                    'ar' => 'سويسرا',
                    'en' => 'Switzerland',
                ],
                'full_name' => (object) [
                    'ar' => 'الاتحاد السويسري',
                    'en' => 'Swiss Confederation',
                ],
                'nationality' => (object) [
                    'ar' => 'سويسري',
                    'en' => 'Swiss',
                ],
                'currency' => 'CHF',
                'code' => 'CH',
                'mobile_code' => '41',
            ],
            (object) [
                'id' => 205,
                'name' => (object) [
                    'ar' => 'تايلاند',
                    'en' => 'Thailand',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية تايلاند',
                    'en' => 'Kingdom of Thailand',
                ],
                'nationality' => (object) [
                    'ar' => 'تايلاند',
                    'en' => 'Thai',
                ],
                'currency' => 'THB',
                'code' => 'TH',
                'mobile_code' => '66',
            ],
            (object) [
                'id' => 207,
                'name' => (object) [
                    'ar' => 'توغو',
                    'en' => 'Togo',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية توغو',
                    'en' => 'Togolese Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'توغو',
                    'en' => 'Togolese',
                ],
                'currency' => 'XOF',
                'code' => 'TG',
                'mobile_code' => '228',
            ],
            (object) [
                'id' => 208,
                'name' => (object) [
                    'ar' => 'توكيلاو',
                    'en' => 'Tokelau',
                ],
                'full_name' => (object) [
                    'ar' => 'توكيلاو',
                    'en' => 'Tokelau',
                ],
                'nationality' => (object) [
                    'ar' => 'توكيلاو',
                    'en' => 'Tokelauan',
                ],
                'currency' => 'NZD',
                'code' => 'TK',
                'mobile_code' => '690',
            ],
            (object) [
                'id' => 209,
                'name' => (object) [
                    'ar' => 'تونغا',
                    'en' => 'Tonga',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية تونغا',
                    'en' => 'Kingdom of Tonga',
                ],
                'nationality' => (object) [
                    'ar' => 'تونغا',
                    'en' => 'Tongan',
                ],
                'currency' => 'TOP',
                'code' => 'TO',
                'mobile_code' => '676',
            ],
            (object) [
                'id' => 210,
                'name' => (object) [
                    'ar' => 'ترينداد وتوباغو',
                    'en' => 'Trinidad and Tobago',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية ترينداد وتوباغو',
                    'en' => 'Republic of Trinidad and Tobago',
                ],
                'nationality' => (object) [
                    'ar' => 'ترينداد وتوباغو',
                    'en' => 'Trinidadian; Tobagonian',
                ],
                'currency' => 'TTD',
                'code' => 'TT',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 214,
                'name' => (object) [
                    'ar' => 'جزر تركس وكايكوس',
                    'en' => 'Turks and Caicos Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر تركس وكايكوس',
                    'en' => 'Turks and Caicos Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر تركس وكايكوس',
                    'en' => 'Turks and Caicos Islander',
                ],
                'currency' => 'USD',
                'code' => 'TC',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 215,
                'name' => (object) [
                    'ar' => 'توفالو',
                    'en' => 'Tuvalu',
                ],
                'full_name' => (object) [
                    'ar' => 'توفالو',
                    'en' => 'Tuvalu',
                ],
                'nationality' => (object) [
                    'ar' => 'توفالو',
                    'en' => 'Tuvaluan',
                ],
                'currency' => 'AUD',
                'code' => 'TV',
                'mobile_code' => '688',
            ],
            (object) [
                'id' => 218,
                'name' => (object) [
                    'ar' => 'أوغندا',
                    'en' => 'Uganda',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية أوغندا',
                    'en' => 'Republic of Uganda',
                ],
                'nationality' => (object) [
                    'ar' => 'أوغندي',
                    'en' => 'Ugandan',
                ],
                'currency' => 'UGX',
                'code' => 'UG',
                'mobile_code' => '256',
            ],
            (object) [
                'id' => 219,
                'name' => (object) [
                    'ar' => 'أوكرانيا',
                    'en' => 'Ukraine',
                ],
                'full_name' => (object) [
                    'ar' => 'أوكرانيا',
                    'en' => 'Ukraine',
                ],
                'nationality' => (object) [
                    'ar' => 'أوكراني',
                    'en' => 'Ukrainian',
                ],
                'currency' => 'UAH',
                'code' => 'UA',
                'mobile_code' => '380',
            ],
            (object) [
                'id' => 235,
                'name' => (object) [
                    'ar' => 'مقدونيا',
                    'en' => 'Macedonia, the former Yugoslav Republic of',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية مقدونيا اليوغوسلافية السابقة',
                    'en' => 'the former Yugoslav Republic of Macedonia',
                ],
                'nationality' => (object) [
                    'ar' => 'مقدوني',
                    'en' => 'of the former Yugoslav Republic of Macedonia',
                ],
                'currency' => 'MKD',
                'code' => 'MK',
                'mobile_code' => '389',
            ],
            (object) [
                'id' => 221,
                'name' => (object) [
                    'ar' => 'بريطانيا',
                    'en' => 'United Kingdom',
                ],
                'full_name' => (object) [
                    'ar' => 'المملكة المتحدة لبريطانيا العظمى وايرلندا الشمالية',
                    'en' => 'United Kingdom of Great Britain and Northern Ireland',
                ],
                'nationality' => (object) [
                    'ar' => 'بريطاني',
                    'en' => 'British',
                ],
                'currency' => 'GBP',
                'code' => 'GB',
                'mobile_code' => '44',
            ],
            (object) [
                'id' => 204,
                'name' => (object) [
                    'ar' => 'تنزانيا',
                    'en' => 'Tanzania',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية تنزانيا المتحدة',
                    'en' => 'United Republic of Tanzania',
                ],
                'nationality' => (object) [
                    'ar' => 'تنزاني',
                    'en' => 'Tanzanian',
                ],
                'currency' => 'TZS',
                'code' => 'TZ',
                'mobile_code' => '255',
            ],
            (object) [
                'id' => 222,
                'name' => (object) [
                    'ar' => 'امريكا',
                    'en' => 'United States',
                ],
                'full_name' => (object) [
                    'ar' => 'الولايات المتحدة الامريكية',
                    'en' => 'United States of America',
                ],
                'nationality' => (object) [
                    'ar' => 'امريكي',
                    'en' => 'American',
                ],
                'currency' => 'USD',
                'code' => 'US',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 30,
                'name' => (object) [
                    'ar' => 'بوركينا فاسو',
                    'en' => 'Burkina Faso',
                ],
                'full_name' => (object) [
                    'ar' => 'بوركينا فاسو',
                    'en' => 'Burkina Faso',
                ],
                'nationality' => (object) [
                    'ar' => 'بوركينا فاسو',
                    'en' => 'Burkinabe',
                ],
                'currency' => 'XOF',
                'code' => 'BF',
                'mobile_code' => '226',
            ],
            (object) [
                'id' => 223,
                'name' => (object) [
                    'ar' => 'أوروغواي',
                    'en' => 'Uruguay',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية أوروغواي الشرقية',
                    'en' => 'Eastern Republic of Uruguay',
                ],
                'nationality' => (object) [
                    'ar' => 'أوروغواي',
                    'en' => 'Uruguayan',
                ],
                'currency' => 'UYU',
                'code' => 'UY',
                'mobile_code' => '598',
            ],
            (object) [
                'id' => 242,
                'name' => (object) [
                    'ar' => 'بونير',
                    'en' => 'Bonaire',
                ],
                'full_name' => (object) [
                    'ar' => 'بونير، سينت أوستاتيوس وسابا',
                    'en' => 'Bonaire, Sint Eustatius and Saba',
                ],
                'nationality' => (object) [
                    'ar' => 'بونير',
                    'en' => 'of Bonaire, Sint Eustatius and Saba',
                ],
                'currency' => 'USD',
                'code' => 'BQ',
                'mobile_code' => '599',
            ],
            (object) [
                'id' => 99,
                'name' => (object) [
                    'ar' => 'إيطاليا',
                    'en' => 'Italy',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية إيطاليا',
                    'en' => 'Italian Republic',
                ],
                'nationality' => (object) [
                    'ar' => 'طلياني',
                    'en' => 'Italian',
                ],
                'currency' => 'EUR',
                'code' => 'IT',
                'mobile_code' => '39',
            ],
            (object) [
                'id' => 39,
                'name' => (object) [
                    'ar' => 'جزر كايمان',
                    'en' => 'Cayman Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'جزر كايمان',
                    'en' => 'Cayman Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'جزر كايمان',
                    'en' => 'Caymanian',
                ],
                'currency' => 'KYD',
                'code' => 'KY',
                'mobile_code' => '1',
            ],
            (object) [
                'id' => 224,
                'name' => (object) [
                    'ar' => 'أوزبكستان',
                    'en' => 'Uzbekistan',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية أوزبكستان',
                    'en' => 'Republic of Uzbekistan',
                ],
                'nationality' => (object) [
                    'ar' => 'أوزبكستاني',
                    'en' => 'Uzbek',
                ],
                'currency' => 'UZS',
                'code' => 'UZ',
                'mobile_code' => '998',
            ],
            (object) [
                'id' => 226,
                'name' => (object) [
                    'ar' => 'فنزويلا',
                    'en' => 'Venezuela',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية فنزويلا البوليفارية',
                    'en' => 'Bolivarian Republic of Venezuela',
                ],
                'nationality' => (object) [
                    'ar' => 'فنزويلا',
                    'en' => 'Venezuelan',
                ],
                'currency' => 'VEF',
                'code' => 'VE',
                'mobile_code' => '58',
            ],
            (object) [
                'id' => 228,
                'name' => (object) [
                    'ar' => 'واليس وفوتونا',
                    'en' => 'Wallis and Futuna Islands',
                ],
                'full_name' => (object) [
                    'ar' => 'واليس وفوتونا',
                    'en' => 'Wallis and Futuna Islands',
                ],
                'nationality' => (object) [
                    'ar' => 'واليس وفوتونا',
                    'en' => 'Wallis and Futuna Islander',
                ],
                'currency' => 'XPF',
                'code' => 'WF',
                'mobile_code' => '681',
            ],
            (object) [
                'id' => 230,
                'name' => (object) [
                    'ar' => 'ساموا',
                    'en' => 'Samoa',
                ],
                'full_name' => (object) [
                    'ar' => 'دولة ساموا المستقلة',
                    'en' => 'Independent State of Samoa',
                ],
                'nationality' => (object) [
                    'ar' => 'ساموا',
                    'en' => 'Samoan',
                ],
                'currency' => 'WST',
                'code' => 'WS',
                'mobile_code' => '685',
            ],
            (object) [
                'id' => 233,
                'name' => (object) [
                    'ar' => 'زامبيا',
                    'en' => 'Zambia',
                ],
                'full_name' => (object) [
                    'ar' => 'جمهورية زامبيا',
                    'en' => 'Republic of Zambia',
                ],
                'nationality' => (object) [
                    'ar' => 'زامبي',
                    'en' => 'Zambian',
                ],
                'currency' => 'ZMW',
                'code' => 'ZM',
                'mobile_code' => '260',
            ],
            (object) [
                'id' => 98,
                'name' => (object) [
                    'ar' => 'إسرائيل',
                    'en' => 'Israel',
                ],
                'full_name' => (object) [
                    'ar' => 'إسرائيل',
                    'en' => 'State of Israel',
                ],
                'nationality' => (object) [
                    'ar' => 'إسرائيلي',
                    'en' => 'Israeli',
                ],
                'currency' => 'ILS',
                'code' => 'IL',
                'mobile_code' => '972',
            ],
        ];

        $bar = $this->command->getOutput()->createProgressBar(
            count($countries)
        );

        $bar->start();

        foreach ($countries as $row) {
            $country = new Country();

            $country->id = $row->id;

            if (isset($row->order)) {
                $country->order = $row->order;
            }

            if (isset($row->timezone)) {
                $country->timezone = $row->timezone;
            }

            $country->code = $row->code;
            $country->mobile_code = $row->mobile_code;
            $country->currency = $row->currency;

            $country->flag = str($row->code)
                ->lower()
                ->prepend('app/flags/')
                ->append('.svg');

            $country->setTranslation('name', 'ar', $row->name->ar);
            $country->setTranslation('name', 'en', $row->name->en);

            $country->setTranslation('full_name', 'ar', $row->full_name->ar);
            $country->setTranslation('full_name', 'en', $row->full_name->en);

            $country->setTranslation(
                'nationality', 'ar', $row->nationality->ar);
            $country->setTranslation(
                'nationality', 'en', $row->nationality->en);

            $country->save();

            $bar->advance();
        }

        $bar->finish();

        $this->command->info("\n");
        $this->command->info('Countries table seeded!');
        $this->command->info("\n");

        DB::table('cities')->delete();
        DB::update('ALTER TABLE cities AUTO_INCREMENT = 1');

        $city = new City();
        $city->code = 'MCT';
        $city->country_code = 'OM';
        $city->setTranslation('name', 'en', 'Muscat');
        $city->setTranslation('name', 'ar', 'مسقط');
        $city->save();

        $cities = [
            (object) ['name' => (object) ['ar' => 'الرياض', 'en' => 'RIYADH'], 'code' => 'RIYADH', 'image' => url('app/cities/1.png')],
            (object) ['name' => (object) ['ar' => 'جدة', 'en' => 'JEDDAH'], 'code' => 'JEDDAH'],
            (object) ['name' => (object) ['ar' => 'مكة المكرمة', 'en' => 'MAKKAH'], 'code' => 'MAKKAH'],
            (object) ['name' => (object) ['ar' => 'المدينة المنورة', 'en' => 'MADINAH'], 'code' => 'MADINAH'],
            (object) ['name' => (object) ['ar' => 'القصيم', 'en' => 'Qasiem'], 'code' => 'Qasiem'],
            (object) ['name' => (object) ['ar' => 'حائل', 'en' => 'HAIL'], 'code' => 'HAIL'],
            (object) ['name' => (object) ['ar' => 'الخرج', 'en' => 'KHARJ'], 'code' => 'KHARJ'],
            (object) ['name' => (object) ['ar' => 'الدمام', 'en' => 'DAMMAM'], 'code' => 'DAMMAM'],
            (object) ['name' => (object) ['ar' => 'الأحساء', 'en' => 'HASSA'], 'code' => 'HASSA'],
            (object) ['name' => (object) ['ar' => 'بريدة', 'en' => 'BURAYDAH'], 'code' => 'BURAYDAH'],
            (object) ['name' => (object) ['ar' => 'الطائف', 'en' => 'TAIF'], 'code' => 'TAIF'],
            (object) ['name' => (object) ['ar' => 'تبوك', 'en' => 'TABUK'], 'code' => 'TABUK'],
            (object) ['name' => (object) ['ar' => 'أبها', 'en' => 'ABHA'], 'code' => 'ABHA'],
            (object) ['name' => (object) ['ar' => 'خميس مشيط', 'en' => 'KHAMISMUSHAYT'], 'code' => 'KHAMISMUSHAYT'],
            (object) ['name' => (object) ['ar' => 'نجران', 'en' => 'NAJRAN'], 'code' => 'NAJRAN'],
            (object) ['name' => (object) ['ar' => 'وادي الدواسر', 'en' => 'WADIDAWASIR'], 'code' => 'WADIDAWASIR'],
            (object) ['name' => (object) ['ar' => 'جازان', 'en' => 'GIZAN'], 'code' => 'GIZAN'],
            (object) ['name' => (object) ['ar' => 'حفر الباطن', 'en' => 'HAFARALBATIN'], 'code' => 'HAFARALBATIN'],
            (object) ['name' => (object) ['ar' => 'ينبع', 'en' => 'YANBU'], 'code' => 'YANBU'],
            (object) ['name' => (object) ['ar' => 'الباحة', 'en' => 'BAHA'], 'code' => 'BAHA'],
            (object) ['name' => (object) ['ar' => 'الجوف', 'en' => 'JOUF'], 'code' => 'JOUF'],
            (object) ['name' => (object) ['ar' => 'الحائر', 'en' => 'HAYER'], 'code' => 'HAYER'],
            (object) ['name' => (object) ['ar' => 'الخبر', 'en' => 'KHOBAR'], 'code' => 'KHOBAR'],
            (object) ['name' => (object) ['ar' => 'أبقيق', 'en' => 'ABQAIQ'], 'code' => 'ABQAIQ'],
            (object) ['name' => (object) ['ar' => ' أملج', 'en' => 'UMMLUJJ'], 'code' => 'UMMLUJJ'],
            (object) ['name' => (object) ['ar' => 'ابو عريش', 'en' => 'ABUARISH'], 'code' => 'ABUARISH'],
            (object) ['name' => (object) ['ar' => 'الأرطاوية', 'en' => 'ARTAWIYAH'], 'code' => 'ARTAWIYAH'],
            (object) ['name' => (object) ['ar' => 'الأطاولة', 'en' => 'ATAWLAH'], 'code' => 'ATAWLAH'],
            (object) ['name' => (object) ['ar' => 'الأفلاج', 'en' => 'AFLAJ'], 'code' => 'AFLAJ'],
            (object) ['name' => (object) ['ar' => 'البدائع', 'en' => 'BADAYA'], 'code' => 'BADAYA'],
            (object) ['name' => (object) ['ar' => 'البكيرية', 'en' => 'BUKAYRIYAH'], 'code' => 'BUKAYRIYAH'],
            (object) ['name' => (object) ['ar' => 'الثقبة', 'en' => 'THQBAH'], 'code' => 'THQBAH'],
            (object) ['name' => (object) ['ar' => 'الجبيل', 'en' => 'JUBAIL'], 'code' => 'JUBAIL'],
            (object) ['name' => (object) ['ar' => 'الجموم', 'en' => 'JAMOUM'], 'code' => 'JAMOUM'],
            (object) ['name' => (object) ['ar' => 'الخبراء', 'en' => 'KHABRA'], 'code' => 'KHABRA'],
            (object) ['name' => (object) ['ar' => 'الخرمة', 'en' => 'KHURMAH'], 'code' => 'KHURMAH'],
            (object) ['name' => (object) ['ar' => 'الخفجي', 'en' => 'KHAFJI'], 'code' => 'KHAFJI'],
            (object) ['name' => (object) ['ar' => 'الدرب', 'en' => 'DARB'], 'code' => 'DARB'],
            (object) ['name' => (object) ['ar' => 'الدلم', 'en' => 'DILAM'], 'code' => 'DILAM'],
            (object) ['name' => (object) ['ar' => 'الدوادمي', 'en' => 'DUWADIMI'], 'code' => 'DUWADIMI'],
            (object) ['name' => (object) ['ar' => 'الربوعة', 'en' => 'AROUBAH'], 'code' => 'AROUBAH'],
            (object) ['name' => (object) ['ar' => 'الرس', 'en' => 'RASS'], 'code' => 'RASS'],
            (object) ['name' => (object) ['ar' => 'الزلفي', 'en' => 'ZULFI'], 'code' => 'ZULFI'],
            (object) ['name' => (object) ['ar' => 'السليل', 'en' => 'SULAYIL'], 'code' => 'SULAYIL'],
            (object) ['name' => (object) ['ar' => 'الطوال', 'en' => 'TUWAL'], 'code' => 'TUWAL'],
            (object) ['name' => (object) ['ar' => 'الظهران', 'en' => 'DHAHRAN'], 'code' => 'DHAHRAN'],
            (object) ['name' => (object) ['ar' => 'العديلية', 'en' => 'UDHAILIYAH'], 'code' => 'UDHAILIYAH'],
            (object) ['name' => (object) ['ar' => 'العقيق', 'en' => 'AQIQ'], 'code' => 'AQIQ'],
            (object) ['name' => (object) ['ar' => 'العلا', 'en' => 'ULA'], 'code' => 'ULA'],
            (object) ['name' => (object) ['ar' => 'الغاط', 'en' => 'GHAT'], 'code' => 'GHAT'],
            (object) ['name' => (object) ['ar' => 'القريات', 'en' => 'GURAYAT'], 'code' => 'GURAYAT'],
            (object) ['name' => (object) ['ar' => 'القطيف', 'en' => 'QATIF'], 'code' => 'QATIF'],
            (object) ['name' => (object) ['ar' => 'القنفذة', 'en' => 'QUNFUDHAH'], 'code' => 'QUNFUDHAH'],
            (object) ['name' => (object) ['ar' => 'القويعية', 'en' => 'QUWAYIYAH'], 'code' => 'QUWAYIYAH'],
            (object) ['name' => (object) ['ar' => 'القيصومة', 'en' => 'QAYSUMAH'], 'code' => 'QAYSUMAH'],
            (object) ['name' => (object) ['ar' => 'الليث', 'en' => 'LITH'], 'code' => 'LITH'],
            (object) ['name' => (object) ['ar' => 'المجاردة', 'en' => 'MAJARDAH'], 'code' => 'MAJARDAH'],
            (object) ['name' => (object) ['ar' => 'المجمعة', 'en' => 'MAJMA'], 'code' => 'MAJMA'],
            (object) ['name' => (object) ['ar' => 'المخواه', 'en' => 'MUKHWAH'], 'code' => 'MUKHWAH'],
            (object) ['name' => (object) ['ar' => 'المذنب', 'en' => 'MIDHNAB'], 'code' => 'MIDHNAB'],
            (object) ['name' => (object) ['ar' => 'المزاحمية', 'en' => 'MUZAHMIYAH'], 'code' => 'MUZAHMIYAH'],
            (object) ['name' => (object) ['ar' => 'المندق', 'en' => 'MANDAQ'], 'code' => 'MANDAQ'],
            (object) ['name' => (object) ['ar' => 'النعيرية', 'en' => 'NAIRIYAH'], 'code' => 'NAIRIYAH'],
            (object) ['name' => (object) ['ar' => 'النماص', 'en' => 'NAMAS'], 'code' => 'NAMAS'],
            (object) ['name' => (object) ['ar' => 'الهفوف', 'en' => 'HOFUF'], 'code' => 'HOFUF'],
            (object) ['name' => (object) ['ar' => 'الوجه', 'en' => 'WAJH'], 'code' => 'WAJH'],
            (object) ['name' => (object) ['ar' => 'بارق', 'en' => 'BARIQ'], 'code' => 'BARIQ'],
            (object) ['name' => (object) ['ar' => 'بالجرشي', 'en' => 'BILJURASHI'], 'code' => 'BILJURASHI'],
            (object) ['name' => (object) ['ar' => 'بحره', 'en' => 'BAHRAH'], 'code' => 'BAHRAH'],
            (object) ['name' => (object) ['ar' => 'بدر', 'en' => 'BADR'], 'code' => 'BADR'],
            (object) ['name' => (object) ['ar' => 'بشائر', 'en' => 'BASHAYER'], 'code' => 'BASHAYER'],
            (object) ['name' => (object) ['ar' => 'بقيق', 'en' => 'BUQAYQ'], 'code' => 'BUQAYQ'],
            (object) ['name' => (object) ['ar' => 'بيش', 'en' => 'BAYSH'], 'code' => 'BAYSH'],
            (object) ['name' => (object) ['ar' => 'بيشة', 'en' => 'BISHAH'], 'code' => 'BISHAH'],
            (object) ['name' => (object) ['ar' => 'تاروت', 'en' => 'TARUT'], 'code' => 'TARUT'],
            (object) ['name' => (object) ['ar' => 'تيماء', 'en' => 'TAIMA'], 'code' => 'TAIMA'],
            (object) ['name' => (object) ['ar' => 'ثربة', 'en' => 'TURBAH'], 'code' => 'TURBAH'],
            (object) ['name' => (object) ['ar' => ' حقل', 'en' => 'HAQL'], 'code' => 'HAQL'],
            (object) ['name' => (object) ['ar' => ' حوطة سدير', 'en' => 'HAWTATSUDAYR'], 'code' => 'HAWTATSUDAYR'],
            (object) ['name' => (object) ['ar' => 'خيبر', 'en' => 'KHAYBER'], 'code' => 'KHAYBER'],
            (object) ['name' => (object) ['ar' => 'دخنة', 'en' => 'DUKHNAH'], 'code' => 'DUKHNAH'],
            (object) ['name' => (object) ['ar' => 'دومة الجندل', 'en' => 'DAWMATALJANDAL'], 'code' => 'DAWMATALJANDAL'],
            (object) ['name' => (object) ['ar' => ' رابغ', 'en' => 'RABIGH'], 'code' => 'RABIGH'],
            (object) ['name' => (object) ['ar' => 'راس تنورة', 'en' => 'RASTANURA'], 'code' => 'RASTANURA'],
            (object) ['name' => (object) ['ar' => 'رحيمة', 'en' => 'RAHIMA'], 'code' => 'RAHIMA'],
            (object) ['name' => (object) ['ar' => 'رفحاء', 'en' => 'RAFHA'], 'code' => 'RAFHA'],
            (object) ['name' => (object) ['ar' => 'رنية', 'en' => 'RANYAH'], 'code' => 'RANYAH'],
            (object) ['name' => (object) ['ar' => ' ساجر', 'en' => 'SAJIR'], 'code' => 'SAJIR'],
            (object) ['name' => (object) ['ar' => 'سبت العلايا', 'en' => 'SAPTALULAYA'], 'code' => 'SAPTALULAYA'],
            (object) ['name' => (object) ['ar' => ' سكاكا', 'en' => 'SKAKAH'], 'code' => 'SKAKAH'],
            (object) ['name' => (object) ['ar' => 'سيهات', 'en' => 'SIHAT'], 'code' => 'SIHAT'],
            (object) ['name' => (object) ['ar' => 'شرورة', 'en' => 'SHAROURAH'], 'code' => 'SHAROURAH'],
            (object) ['name' => (object) ['ar' => 'شقراء', 'en' => 'SHAQRA'], 'code' => 'SHAQRA'],
            (object) ['name' => (object) ['ar' => 'صامطة', 'en' => 'SAMTAH'], 'code' => 'SAMTAH'],
            (object) ['name' => (object) ['ar' => 'صبياء', 'en' => 'SABYA'], 'code' => 'SABYA'],
            (object) ['name' => (object) ['ar' => 'صفوى', 'en' => 'SAFWA'], 'code' => 'SAFWA'],
            (object) ['name' => (object) ['ar' => 'ضباء', 'en' => 'DHUBA'], 'code' => 'DHUBA'],
            (object) ['name' => (object) ['ar' => 'ضرما', 'en' => 'DHURMA'], 'code' => 'DHURMA'],
            (object) ['name' => (object) ['ar' => 'طبرجل', 'en' => 'TABARJAL'], 'code' => 'TABARJAL'],
            (object) ['name' => (object) ['ar' => 'طريف', 'en' => 'TURAYF'], 'code' => 'TURAYF'],
            (object) ['name' => (object) ['ar' => 'عرعر', 'en' => 'ARAR'], 'code' => 'ARAR'],
            (object) ['name' => (object) ['ar' => 'عفيف', 'en' => 'AFIF'], 'code' => 'AFIF'],
            (object) ['name' => (object) ['ar' => 'عنيزة', 'en' => 'UNAYZAH'], 'code' => 'UNAYZAH'],
            (object) ['name' => (object) ['ar' => 'عيون الجواء', 'en' => 'UYUNALJIWA'], 'code' => 'UYUNALJIWA'],
            (object) ['name' => (object) ['ar' => 'قلوه', 'en' => 'QILWAH'], 'code' => 'QILWAH'],
            (object) ['name' => (object) ['ar' => 'محائل عسير', 'en' => 'MUHAILASIR'], 'code' => 'MUHAILASIR'],
            (object) ['name' => (object) ['ar' => 'أحد المسارحة', 'en' => 'AHADALMASARHAH'], 'code' => 'AHADALMASARHAH'],
            (object) ['name' => (object) ['ar' => 'حوطة بني تميم', 'en' => 'HAWTATBANITAMIM'], 'code' => 'HAWTATBANITAMIM'],
            (object) ['name' => (object) ['ar' => 'رياض الخبراء', 'en' => 'RIYADH ALKHABRA'], 'code' => 'RIYADH ALKHABRA'],
        ];

        $bar = $this->command->getOutput()->createProgressBar(
            count($cities)
        );

        $bar->start();

        foreach ($cities as $row) {
            $city = new City();

            $city->code = $row->code;
            $city->country_code = 'SA';

            $city->setTranslation('name', 'ar', $row->name->ar);
            $city->setTranslation('name', 'en', Str::of($row->name->en)->title());

            $city->save();

            $bar->advance();
        }

        $bar->finish();
        $this->command->info("\n");
        $this->command->info('Cities table seeded!');
        $this->command->info("\n");

        DB::table('districts')->delete();
        DB::update('ALTER TABLE districts AUTO_INCREMENT = 1');

        $riyadh = file_get_contents(
            base_path('database/seeders/data/riyadh-districts.json')
        );

        $districts = json_decode($riyadh, true);

        $bar = $this->command->getOutput()->createProgressBar(
            count($districts)
        );

        $bar->start();

        foreach ($districts as $row) {
            District::create([
                'country_code' => 'SA',
                'city_id' => 1,
                'name' => [
                    'ar' => $row['name_ar'],
                    'en' => $row['name_en'],
                ],
            ]);

            $bar->advance();
        }

        $this->command->info("\n");
        $this->command->info('Districts table seeded!');
        $this->command->info("\n");
    }
}
