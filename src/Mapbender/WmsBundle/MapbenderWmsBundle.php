<?php

namespace Mapbender\WmsBundle;

use Mapbender\CoreBundle\Component\MapbenderBundle;

class MapbenderWmsBundle extends MapbenderBundle {
    public function getRepositoryManagers()
    {
        return array(
            'wms' => array(
                'id'    => 'wms',
                'label' => 'OGC Web Map Service (WMS)',
                'manager' => 'mapbender_wms_repository',
                'startAction' => "MapbenderWmsBundle:Repository:start"
            )
        );
    }
}
