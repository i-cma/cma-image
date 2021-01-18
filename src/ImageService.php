<?php

namespace cma;

use think\Config;
use think\Route;
use think\Service;

class ImageService extends Service
{
    public function boot()
    {
        $this->registerRoutes(function (Route $route) {
            $route->get('info/image', function (Config $config) {
                $data = $config->get('extra.product', []);
                $data['conposer']  = 'Image';
                $data['statement'] = 'Cma';

                foreach ($data as $key => $value) {
                    echo $key . '：' . $value;
                    echo '<br>';
                }
            })->ext('cs');
        });
    }
}
