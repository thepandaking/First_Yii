<?php

namespace app\core\front;

use app\core\base\BaseActiveRecord;

class BaseFrontActiveRecord extends BaseActiveRecord
{
    public function afterValidate()
    {
        parent::afterValidate();
        if($this->hasErrors()){
            var_dump($this->errors);
        }
    }

}