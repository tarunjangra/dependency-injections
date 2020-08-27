<?php

namespace common\services;

use common\services\messenger\SmsNotification;
use common\services\messenger\SmsNotificationFactory;
use common\services\messenger\SmsNotificationHandler;
use yii\di\Container;

class HelloService extends Container
{
    public function dispatchMessage() {
        $this->get(SmsNotificationFactory::class)
          ->dispatch(new SmsNotification('this is my sms'));
    }

    public function subMessage()
    {
       $this->set(SmsNotificationHandler::class)->__invoke();
    }
}