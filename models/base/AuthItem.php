<?php

namespace derekisbusy\rbactree\models\base;

use Yii;

/**
 * This is the base model class for table "{{%auth_item}}".
 *
 * @property integer $id
 * @property integer $root
 * @property integer $lft
 * @property integer $rgt
 * @property integer $lvl
 * @property integer $active
 * @property string $name
 * @property integer $type
 * @property string $description
 * @property string $rule_name
 * @property resource $data
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $icon
 * @property integer $icon_type
 * @property integer $selected
 * @property integer $disabled
 * @property integer $readonly
 * @property integer $visible
 * @property integer $collapsed
 * @property integer $movable_u
 * @property integer $movable_d
 * @property integer $movable_l
 * @property integer $movable_r
 * @property integer $removable
 * @property integer $removable_all
 */
class AuthItem extends  \kartik\tree\models\Tree
{
//    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['root', 'lft', 'rgt', 'lvl', 'active', 'type', 'created_at', 'updated_at', 'icon_type', 'selected', 'disabled', 'readonly', 'visible', 'collapsed', 'movable_u', 'movable_d', 'movable_l', 'movable_r', 'removable', 'removable_all'], 'integer'],
            [[ 'active', 'name',  'icon', 'removable_all'], 'required'],//'type','lft', 'rgt', 'lvl',
            [['description', 'data'], 'string'],
            [['name'], 'string', 'max' => 60],
            [['rule_name'], 'string', 'max' => 64],
            [['icon'], 'string', 'max' => 255]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%auth_item}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('rbac', 'ID'),
            'root' => Yii::t('rbac', 'Root'),
            'lft' => Yii::t('rbac', 'Lft'),
            'rgt' => Yii::t('rbac', 'Rgt'),
            'lvl' => Yii::t('rbac', 'Lvl'),
            'active' => Yii::t('rbac', 'Active'),
            'name' => Yii::t('rbac', 'Name'),
            'type' => Yii::t('rbac', 'Type'),
            'description' => Yii::t('rbac', 'Description'),
            'rule_name' => Yii::t('rbac', 'Rule Name'),
            'data' => Yii::t('rbac', 'Data'),
            'icon' => Yii::t('rbac', 'Icon'),
            'icon_type' => Yii::t('rbac', 'Icon Type'),
            'selected' => Yii::t('rbac', 'Selected'),
            'disabled' => Yii::t('rbac', 'Disabled'),
            'readonly' => Yii::t('rbac', 'Readonly'),
            'visible' => Yii::t('rbac', 'Visible'),
            'collapsed' => Yii::t('rbac', 'Collapsed'),
            'movable_u' => Yii::t('rbac', 'Movable U'),
            'movable_d' => Yii::t('rbac', 'Movable D'),
            'movable_l' => Yii::t('rbac', 'Movable L'),
            'movable_r' => Yii::t('rbac', 'Movable R'),
            'removable' => Yii::t('rbac', 'Removable'),
            'removable_all' => Yii::t('rbac', 'Removable All'),
        ];
    }

    /**
     * @inheritdoc
     * @return \derekisbusy\rbac\models\AuthItemQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \derekisbusy\rbac\models\AuthItemQuery(get_called_class());
    }
}
