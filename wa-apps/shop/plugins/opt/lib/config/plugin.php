<?php
return array (
  'name' => 'Opt',
  //'img' => 'img/opt.gif',
  'version' => '0.0.1',
  'vendor' => '--',
  'frontend' => true,
  'handlers' => 
  array (
    'backend_product_sku_settings' => 'backendProductSkuSettings',
    'product_save' => 'productSave',
    'frontend_products' => 'frontendProducts',
  ),
);
