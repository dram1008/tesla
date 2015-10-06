<?php

return [
    'subscribe/mail'                        => 'subscribe/mail',
    'subscribe/activate/<code:\\w+>'        => 'subscribe/activate',

    'cabinet/objects'                       => 'cabinet/requests',
    'cabinet/profile'                       => 'cabinet/profile',

    'password/recover'                      => 'auth/password_recover',
    'password/recover/activate/<code:\\w+>' => 'auth/password_recover_activate',

    'captcha'                               => 'site/captcha',

    '/'                                     => 'site/index',
    'log'                                   => 'site/log',
    'activate/<code:\\w+>'                  => 'site/activate',
    'map'                                   => 'site/map',
    'logDb'                                 => 'site/log_db',
    'contact'                               => 'site/contact',
    'dostavka'                              => 'site/dostavka',
    'login'                                 => 'site/login',
    'logout'                                => 'site/logout',
    'production'                            => 'site/production',
    'production/<id:\\d+>'                  => 'site/production_item',
    'house'                                 => 'site/house',
    'prom'                                  => 'site/prom',
    'diller'                                => 'site/diller',
    'service'                               => 'site/service',
    'rent'                                  => 'site/rent',
    'buy/<id:\\d+>'                         => 'site/buy',
    'admin/products'                        => 'admin_products/index',
    'admin/products/add'                    => 'admin_products/add',
    'admin/products/<id:\\d+>/edit'         => 'admin_products/edit',
    'admin/products/<id:\\d+>/delete'       => 'admin_products/delete',
    'admin/requests'                        => 'admin_requests/index',
    'admin/requests/<id:\\d+>/view'         => 'admin_requests/view',
    'admin/requests/<id:\\d+>/view'         => 'admin_requests/view',
];