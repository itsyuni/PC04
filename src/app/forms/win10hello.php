<?php
namespace app\forms;

use std, gui, framework, app;


class win10hello extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        waitAsync(10000, function () { // через 5 сек загружаем форму 

             $this->loadForm('win10dekstop');
             
             }); 
    }

    /**
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $e = null)
    {    
        
    }

}
