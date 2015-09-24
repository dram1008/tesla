<?php

return [
    '/'                               => 'site/index',
    'about'                           => 'site/about',
    'contact'                         => 'site/contact',
    'dostavka'                        => 'site/dostavka',
    'login'                           => 'site/login',
    'logout'                          => 'site/logout',
    'production'                      => 'site/production',
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