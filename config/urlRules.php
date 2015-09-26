<?php

return [
    '/'                               => 'site/index',
    'log'                             => 'site/log',
    'map'                             => 'site/map',
    'logDb'                           => 'site/log_db',
    'contact'                         => 'site/contact',
    'dostavka'                        => 'site/dostavka',
    'login'                           => 'site/login',
    'logout'                          => 'site/logout',
    'production'                      => 'site/production',
    'production/<id:\\d+>'            => 'site/production_item',
    'house'                           => 'site/house',
    'prom'                            => 'site/prom',
    'diller'                          => 'site/diller',
    'service'                         => 'site/service',
    'rent'                            => 'site/rent',
    'buy/<id:\\d+>'                   => 'site/buy',
    'admin/products'                  => 'admin_products/index',
    'admin/products/add'              => 'admin_products/add',
    'admin/products/<id:\\d+>/edit'   => 'admin_products/edit',
    'admin/products/<id:\\d+>/delete' => 'admin_products/delete',
];