<?php

return [
    'news/<year:\\d{4}>/<month:\\d{2}>/<day:\\d{2}>/<id:\\w+>' => 'site/news_item',


    'subscribe/mail'                                           => 'subscribe/mail',
    'subscribe/activate/<code:\\w+>'                           => 'subscribe/activate',

    'cabinet/objects'                                          => 'cabinet/requests',
    'cabinet/profile'                                          => 'cabinet/profile',

    'password/recover'                                         => 'auth/password_recover',
    'password/recover/activate/<code:\\w+>'                    => 'auth/password_recover_activate',
    'registration/<code:\\w+>'                                 => 'auth/registration_referal',

    'captcha'                                                  => 'site/captcha',

    'upload/HtmlContent2'                                      => 'html_content/upload',

    'admin/subscribe'                                          => 'admin_subscribe/index',
    'admin/subscribe/add'                                      => 'admin_subscribe/add',
    'admin/subscribe/send'                                     => 'admin_subscribe/send',
    'admin/subscribe/delete'                                   => 'admin_subscribe/delete',
    'admin/subscribe/add/simple'                               => 'admin_subscribe/add_simple',
    'admin/subscribe/<id:\\d+>'                                => 'admin_subscribe/view',
    'admin/subscribe/<id:\\d+>/edit'                           => 'admin_subscribe/edit',

    '/'                                                        => 'site/index',
    'log'                                                      => 'site/log',
    'activate/<code:\\w+>'                                     => 'site/activate',
    'map'                                                      => 'site/map',
    'logDb'                                                    => 'site/log_db',
    'contact'                                                  => 'site/contact',
    'dostavka'                                                 => 'site/dostavka',
    'login'                                                    => 'site/login',
    'logout'                                                   => 'site/logout',
    'production'                                               => 'site/production',
    'production/<id:\\d+>'                                     => 'site/production_item',
    'house'                                                    => 'site/house',
    'prom'                                                     => 'site/prom',
    'diller'                                                   => 'site/diller',
    'service'                                                  => 'site/service',
    'rent'                                                     => 'site/rent',
    'news'                                                     => 'site/news',
    'thank'                                                    => 'site/thank',
    'conditions'                                               => 'site/conditions',
    'archangelMetatron'                                        => 'site/archangel_metatron',
    'formulaEnter'                                             => 'site/formula_enter',
    'video'                                                    => 'site/video',
    'test'                                                     => 'site/test',
    'buy/<id:\\d+>'                                            => 'site/buy',

    'admin/products'                                           => 'admin_products/index',
    'admin/products/add'                                       => 'admin_products/add',
    'admin/products/<id:\\d+>/edit'                            => 'admin_products/edit',
    'admin/products/<id:\\d+>/delete'                          => 'admin_products/delete',

    'admin/requests'                                           => 'admin_requests/index',
    'admin/requests/<id:\\d+>/view'                            => 'admin_requests/view',

    'admin/news'                                               => 'admin_news/index',
    'admin/news/add'                                           => 'admin_news/add',
    'admin/news/<id:\\d+>/delete'                              => 'admin_news/delete',
    'admin/news/<id:\\d+>/edit'                                => 'admin_news/edit',
    'admin/news/<id:\\d+>/subscribe'                           => 'admin_news/subscribe',


];