<?php

namespace derekisbusy\rbac;

/**
 * rbac module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'derekisbusy\rbac\controllers';
    
    /**
     * @inheritdoc
     */
    public $defaultRoute = 'auth-tree';

    
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
