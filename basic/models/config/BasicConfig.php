<?php

namespace app\models\config;

use app\core\base\BaseModel;
use app\models\Config;
use Yii;

/**
 * This is the model class for table "{{%config}}".
 *
 * @property integer $id
 * @property string $key
 * @property string $value
 */
class BasicConfig extends BaseModel
{
    public $site_name;
    public $site_description;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%config}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site_name', 'site_description'], 'required'],
            [['site_name','site_description'], 'string'],
            [['site_name','site_description'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
//            'id' => 'ID',
            'site_name' => '网站名称',
            'site_description' => 'seo描述',
        ];
    }

    public function save(){
        Config::updateAll(['value'=>$this->site_name],['`key`'=>'sys_site_name']);
        Config::updateAll(['value'=>$this->site_description],['`key`'=>'sys_seo_description']);
    }
}
