<?php

namespace Dashboard\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends \BaseX\Controller\BaseController {

    protected $_need_auth = true;

    public function indexAction() {

        var_dump($this->getSessionStorage()->isAuthenticate());
        var_dump($this->getSessionStorage()->get('user'));
//        $writer = new \Zend\Log\Writer\Stream('log/app.log');
//        $logger = new \Zend\Log\Logger();
//        $logger->addWriter($writer);
//
//        $logger->info('Informational message XD1 ');
//        $logger->log(\Zend\Log\Logger::INFO, 'Informational message XD2');
//
//        $logger->log(\Zend\Log\Logger::INFO, 'Informational message');
//        $logger->info('Informational message 3');
//
//        $logger->log(\Zend\Log\Logger::EMERG, 'Emergency message');
//        $logger->emerg('Emergency message 4');
    
        
        
    }

}
