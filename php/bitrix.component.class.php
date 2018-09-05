<?php
/**
* Класс CBitrixComponent
* Предназначен 
*
* @author Vladimir Shapovalov <gyogas@gmail.com>
* @date 
*/

class CBitrixComponent {
    
    var $com;
    var $arParams;
    var $arResult;
    
    /**
    * Конструктор
    * @return void
    */
    function __construct($com) {        
        $this->com = $com;
        $this->arParams = &$com->arParams;
        $this->arResult = &$com->arResult;
    }
    
    /**
    * Вывод в json
    * @return void
    */
    public function json($data) {
        global $APPLICATION;
        $APPLICATION->RestartBuffer();
        die(json_encode($data));
    }
    
    /**
    * Выполнение работы компонента
    * @return void
    */
    public function execute() {

    }
}