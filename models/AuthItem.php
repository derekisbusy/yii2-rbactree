<?php

namespace derekisbusy\rbac\models;

use \derekisbusy\rbac\models\base\AuthItem as BaseAuthItem;

/**
 * This is the model class for table "auth_item".
 */
class AuthItem extends BaseAuthItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['root', 'lft', 'rgt', 'lvl', 'active', 'type', 'created_at', 'updated_at', 'icon_type', 'selected', 'disabled', 'readonly', 'vidible', 'collapsed', 'movable_u', 'movable_d', 'movable_l', 'movable_r', 'removeable', 'removeable_all'], 'integer'],
            [['lft', 'rgt', 'lvl', 'active', 'name', 'type', 'icon', 'removeable_all'], 'required'],
            [['description', 'data'], 'string'],
            [['name'], 'string', 'max' => 60],
            [['rule_name'], 'string', 'max' => 64],
            [['icon'], 'string', 'max' => 255]
        ]);
    }
	
}
