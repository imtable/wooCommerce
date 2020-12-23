jQuery(document).ready(function () {
    // FORMS
    jQuery('form button').click( function() {
    	var form = jQuery(this).closest('form');
    	
    	if ( form.valid() ) {
    		form.css('opacity','.5');
    		var actUrl = form.attr('action');

    		jQuery.ajax({
    			url: actUrl,
    			type: 'post',
    			dataType: 'html',
    			data: form.serialize(),
    			success: function(data) {
    				form.html(data);
    				form.css('opacity','1');
    			},
    			error:	 function() {}
    		});
    	}
    });


    // скрипт табов //
    $('ul.tabs__caption').on('click', 'li:not(.active)', function () {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
    });
    // скрипт табов //



    jQuery(".anchor-1").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".section-doc").offset().top - 45
        }, 400);
    });jQuery(".anchor-2").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".section-trusted").offset().top + 200
        }, 400);
    });jQuery(".anchor-3").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".section-people").offset().top
        }, 400);
    });

});

var burgerCtr = document.querySelector("#burger-menu");
        var menuCtr = document.querySelector("#mobile-menu");
        burgerCtr.addEventListener("click", function() {
            this.classList.toggle("active");
            menuCtr.classList.toggle("show_mobile_menu");
        });