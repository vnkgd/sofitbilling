<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Radippool".
 *
 * @property integer $id
 * @property string $pool_name
 * @property string $framedipaddress
 * @property string $nasipaddress
 * @property string $calledstationid
 * @property string $callingstationid
 * @property string $expiry_time
 * @property string $username
 * @property string $pool_key
 */
class Radippool extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Radippool';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pool_name', 'calledstationid', 'callingstationid', 'pool_key'], 'required'],
            [['expiry_time'], 'safe'],
            [['pool_name', 'calledstationid', 'callingstationid', 'pool_key'], 'string', 'max' => 30],
            [['framedipaddress', 'nasipaddress'], 'string', 'max' => 15],
            [['username'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'pool_name' => Yii::t('app', 'Pool Name'),
            'framedipaddress' => Yii::t('app', 'Framedipaddress'),
            'nasipaddress' => Yii::t('app', 'Nasipaddress'),
            'calledstationid' => Yii::t('app', 'Calledstationid'),
            'callingstationid' => Yii::t('app', 'Callingstationid'),
            'expiry_time' => Yii::t('app', 'Expiry Time'),
            'username' => Yii::t('app', 'Username'),
            'pool_key' => Yii::t('app', 'Pool Key'),
        ];
    }
}
