<?php

namespace derekisbusy\rbactree;

/**
 * rbac module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'derekisbusy\rbactree\controllers';
    
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
