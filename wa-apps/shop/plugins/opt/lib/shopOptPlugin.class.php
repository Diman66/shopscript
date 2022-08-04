<?php

class shopOptPlugin extends shopPlugin
{
    public function backendProductSkuSettings($params)
    {
        $model = new shopOptModel();
        $opt_price = $model->select('sku_id, opt_price')
                        ->where('sku_id = '.(int)$params['sku_id'])
                        ->fetchField('opt_price');

        
        return waHtmlControl::getControl(waHtmlControl::INPUT, 'opt_price[' . $params['sku_id']. ']', array(
            'value'               => ifempty($opt_price) ? $opt_price : null,
            'title'               => _wp('Оптовая цена'),
            'description'         => _wp('Оптовая цена'),
            'title_wrapper'       => '%s',
            'control_wrapper'     => '<div class="field"><div class="name">%s</div><div class="value">%s%s</div></div>',
            'description_wrapper' => '<br><span class="hint">%s</span>',
        ));
        unset($opt_price);
    }

    public function productSave(&$params)
    {
        $model = new shopOptModel();
        
        $skus = waRequest::post('opt_price', '', 'array');
        
        if (!empty($skus)) {
            foreach ($skus as $sku_id => $opt_price) {
                $data['sku_id'] = $sku_id;
                $data['opt_price'] = $opt_price;
                $data['datetime'] = date('Y-m-d H:i:s');
                
                try {
                    $model->insert($data, 1);
                } catch (Exception $e) {
                    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
                };
                
            }
        } 
    }

    public function frontendProducts($params)
    {
        $model = new shopOptModel();
        $opt = $model->select('sku_id, opt_price')->fetchAll('sku_id', true);
    
        $currentUrl = wa()->getRouting()->getCurrentUrl();
        
        $pathUrl = explode("/", $currentUrl);

        if($pathUrl[0] == 'opt') {
            if (!empty($params['products']) && is_array($params['products'])) {
                foreach ($params['products'] as &$product) {
                    $product['price'] = !empty($opt[$product['sku_id']]) ? $opt[$product['sku_id']] : null;
                }
                unset($product);
            }
        }
    }
}
