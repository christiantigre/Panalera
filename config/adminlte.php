<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'PYME-Stock',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>P</b>Stock',

    'logo_mini' => '<b>P</b>S',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        'CUENTA',
        [
            'text' => 'Blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Perfíl',
            'url'         => 'admin/settings',
            'icon'        => 'user',
        ],
        'ADMINISTRACIÓN',
        [
            'text' => 'Ventas',
            'url'  => 'admin/venta',
            'icon' => 'shopping-basket',
        ],        
        [
            'text' => 'Productos',
            'url'  => 'admin/product',
            'icon' => 'cloud-upload',
        ],
        [
            'text' => 'Proveedores',
            'url'  => 'admin/proveedor',
            'icon' => 'group',
        ],
        [
            'text' => 'Clientes',
            'url'  => 'admin/cliente',
            'icon' => 'user',
        ],
        [
            'text' => 'Usuarios',
            'url'  => 'admin/people',
            'icon' => 'users',
        ],
        [
            'text' => 'Inventario',
            'url'  => 'admin/inventario',
            'icon' => 'line-chart',
        ],
        [
            'text' => 'Contabilidad',
            'url'  => 'admin/tipocuenta',
            'icon' => 'calculator',
        ],        
        [
            'text'    => 'Sistema',
            'icon'    => 'share',
            'submenu' => [
                [
                    'text'    => 'Configuración',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'Almacen',
                            'url'  => 'admin/almacen',
                        ],
                        [
                            'text' => 'Facturación',
                            'url'  => 'admin/facturacion-electronica',
                        ],
                        [
                            'text'    => 'Localidades',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Pais',
                                    'url'  => 'admin/pais',
                                ],
                                [
                                    'text' => 'Provincia',
                                    'url'  => 'admin/provincia',
                                ],
                                [
                                    'text' => 'Cantón',
                                    'url'  => 'admin/canton',
                                ],
                                [
                                    'text' => 'Parroquia',
                                    'url'  => 'admin/parroquia',
                                ],
                            ],
                        ],
                        [
                            'text'    => 'Categoría',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Categoría',
                                    'url'  => 'admin/category',
                                ],
                                [
                                    'text' => 'Subcategoría',
                                    'url'  => 'admin/subcategory',
                                ],
                            ],
                        ],
                        [
                            'text'    => 'Extras',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Marca',
                                    'url'  => 'admin/marca',
                                ],
                                [
                                    'text' => 'Moneda',
                                    'url'  => 'admin/moneda',
                                ],
                                [
                                    'text' => 'Iva',
                                    'url'  => 'admin/iva',
                                ],
                                [
                                    'text' => 'Descuentos',
                                    'url'  => 'admin/descuento',
                                ],
                                [
                                    'text' => 'Entrega',
                                    'url'  => 'admin/entrega',
                                ],
                                [
                                    'text' => 'Tipo pagos',
                                    'url'  => 'admin/type-pay',
                                ],
                                [
                                    'text' => 'Clausulas doc',
                                    'url'  => 'admin/clausule',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            'text'    => 'Auditoría',
            'icon'    => 'binoculars',
            'url'     => '#',
            'submenu' => [
                [
                    'text' => 'Seguimiento',
                    'url'  => 'admin/logs',
                ],
                [
                    'text' => 'Backups',
                    'url'  => 'admin/backups',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
    ],
];
