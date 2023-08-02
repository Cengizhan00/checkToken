<?php

/*
 * This file is part of cengizhan/flarum-ext-mystaticpages.
 *
 * Copyright (c) 2023 CengizHan.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace CengizHan\MyStaticPages;

use Flarum\Extend;

return [
    // Eklenti diğer ayarlarınız
    'routes' => [
        // Token kontrol rotası
        'api.token.check' => [
            'path' => '/token/check',
            'middleware' => ['auth'], // İsteğe bağlı, kimlik doğrulama için gerekli bir middleware belirleyebilirsiniz
            'handler' => TokenCheckController::class,
        ],
    ],
];
