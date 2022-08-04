<?php
return array(
    'shop_opt' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'opt_price' => array('varchar', 255, 'null' => 0),
        'sku_id' => array('varchar', 255, 'null' => 0, 'unique' => 1),
        'datetime' => array('datetime', 'null' => 0),
        ':keys' => array(
            'PRIMARY' => 'id',
            'datetime' => 'datetime',
            'sku_id' => array('sku_id', 'unique' => 1)
        ),
    ),
);