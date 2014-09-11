<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Zfc607Snap for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zfc607Snap\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class HomeController extends AbstractActionController
{
    public function indexAction()
    {
        return array();
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /home/home/foo
        return array();
    }
}
