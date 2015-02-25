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
class ThemeConfig extends BaseModel
{
    public $site_theme;
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
            [['$site_theme'], 'required'],
            [['$site_theme'], 'string'],
            [['$site_theme'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '$site_theme' => '网站主题',
        ];
    }

    public function save(){
        Config::updateAll(['value'=>$this->$site_theme],['`key`'=>'sys_site_name']);
        Config::updateAll(['value'=>$this->site_description],['`key`'=>'sys_seo_description']);
    }
}
