<?php

namespace derekisbusy\rbactree\models;

use \derekisbusy\rbactree\models\base\AuthItem as BaseAuthItem;

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
            [['root', 'lft', 'rgt', 'lvl', 'active', 'type', 'created_at', 'updated_at', 'icon_type', 'selected', 'disabled', 'readonly', 'visible', 'collapsed', 'movable_u', 'movable_d', 'movable_l', 'movable_r', 'removable', 'removable_all'], 'integer'],
            [['lft', 'rgt', 'lvl', 'active', 'name', 'type', 'icon', 'removable_all'], 'required'],
            [['description', 'data'], 'string'],
            [['name'], 'string', 'max' => 60],
            [['rule_name'], 'string', 'max' => 64],
            [['icon'], 'string', 'max' => 255]
        ]);
    }
	
}
