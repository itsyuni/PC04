<?php
namespace app\forms;

use std, gui, framework, app;


class Win10Loading1 extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        waitAsync(10000, function () { // через 5 сек загружаем форму 

             $this->loadForm('win10hello');
             
             }); 
    }

}
