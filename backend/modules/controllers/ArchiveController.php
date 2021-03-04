<?php

namespace backend\modules\controllers;

use backend\modules\controllers\BaseActiveController;
use common\models\Archives;
use yii\rest\ActiveController;

class ArchiveController extends BaseActiveFilterController
{
    public $modelClass = Archives::class;
}
