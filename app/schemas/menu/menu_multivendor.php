<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

use Tygh\Registry;
use Tygh\Enum\UserTypes;

$customers_items = array(
    'vendor_administrators' => array(
        'href' => 'profiles.manage?user_type=V',
        'alt' => 'profiles.update?user_type=V',
        'position' => 250,
    )
);

$schema['central']['customers']['items'] = $customers_items + $schema['central']['customers']['items'];

$schema['central']['vendors'] = array(
    'title' => __('vendors_menu_title'),
    'items' => array(
        'vendors' => array(
            'href' => 'companies.manage',
            'alt' => 'companies.add,companies.update,companies.invitations',
            'position' => 100,
        ),
        'vendor_accounting' => array(
            'href' => 'companies.balance',
            'position' => 200,
        ),
    ),
    'position' => 600,
);

$schema['top']['administration']['items']['notifications']['subitems']['vendor_notifications'] = array(
    'href' => 'notification_settings.manage?receiver_type=' . UserTypes::VENDOR,
    'position' => 300,
);

$schema['top']['administration']['items']['import_data']['subitems']['vendors'] = array(
    'href' => 'exim.import?section=vendors',
    'position' => 600,
);

$schema['top']['administration']['items']['export_data']['subitems']['vendors'] = array(
    'href' => 'exim.export?section=vendors',
    'position' => 600,
);

$schema['top']['settings']['items']['Vendors'] = array(
    'href' => 'settings.manage?section_id=vendors',
    'position' => 950,
    'type' => 'setting',
);

$schema['top']['administration']['items']['Storefronts'] = [
    'href'     => 'storefronts.manage',
    'position' => 90,
];

if (Registry::get('runtime.company_id')) {
    $schema['top']['administration']['items']['import_data'] = array(
        'href' => 'exim.import',
        'position' => 1200,
        'subitems' => array(
            'products_deprecated' => array(
                'href' => 'exim.import?section=products',
                'position' => 700,
            ),
        ),
    );

    $schema['top']['administration']['items']['export_data'] = array(
        'href' => 'exim.export',
        'position' => 1300,
        'subitems' => array(
            'orders' => array(
                'href' => 'exim.export?section=orders',
                'position' => 100,
            ),
            'products' => array(
                'href' => 'exim.export?section=products',
                'position' => 200,
            ),
        ),
    );
}

return $schema;
