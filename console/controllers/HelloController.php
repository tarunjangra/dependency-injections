<?php
namespace console\controllers;

use yii\console\Controller;
use common\services\HelloService;

class HelloController extends Controller
{
    public $message;
    /** @var common\services\HelloService $helloService */
    private $helloService;

    public function __construct($id, $module, HelloService $helloService, $config = [])
    {
        $this->helloService = $helloService;
        parent::__construct($id, $module, $config);
    }
    
    public function actionIndex()
    {
        $this->helloService->dispatchMessage();
    }

    public function actionSub()
    {
        $this->helloService->subMessage();
    }
}
