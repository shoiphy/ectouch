<?php

namespace App\Api\Controllers\V2;

use App\Api\Models\V2\Banner;

class BannerController extends BaseController
{

    /**
     * POST ecapi.banner.list
     */
    public function actionIndex()
    {
        $model = Banner::getList();

        return $this->json($model);
    }
}
