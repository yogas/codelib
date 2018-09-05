/**
* Класс
* Предназначен
*
* @author Vladimir Shapovalov <gyogas@gmail.com>
* @date 
*/

function JSClass(target) {
    "use strict";
    
    this.$com = $(target);
    
    /**
    * Конструктор
    * @return {Void}
    */
    this.init = function() {
        this.$com.data("com", this);
        this.initEvents();
    };
    
    /**
    * Инициализация событий
    * @return {Void}
    */
    this.initEvents = function() {
        
    };
    
    this.init(); // Вызов конструктора
}

$(function(){
    "use strict";
    
    $(".selector").each(function(){
        new JSClass(this);
    });
});