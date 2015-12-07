    ;
(function (window) {

    'use strict';


    function init() {
        initEvents();
    }

    // event binding
    function initEvents() {


        $('.Nav-button').on('click', function () {
            $('.Nav').toggleClass('Nav--open');
            $(this).toggleClass('Nav-button--open')
        });


    }

    init();

})(window);
/**
 * Created by juan2ramos on 30/11/15.
 */
