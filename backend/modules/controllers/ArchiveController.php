<?php

namespace api\controllers\api;

use api\controllers\BaseActiveController;
use common\models\Archives;
use yii\rest\ActiveController;

class ArchiveController extends ActiveController
{
    public $modelClass = Archives::class;
}
