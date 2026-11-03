<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Log Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور log — همهٔ کلیدهای مستندشده در `docs/03-engines/log.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/log.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('LOG_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('LOG_PREFIX', 'log:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('LOG_LOG_CHANNEL', 'log'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Log',
        'accessor' => 'log',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];