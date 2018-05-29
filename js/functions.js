// FUNCTIONS
function animation(selector, animate, time = 2000, option) {
    $(selector).addClass('animated ' + animate + '');
    setTimeout(function() {
        $(selector).removeClass('animated ' + animate + '');
        switch (option) {
            case 'remove':
                $(selector).remove();
                break;
            case 'hide':
                $(selector).hide();
                break;
            case 'show':
                $(selector).show();
                break;
        }
    }, time);
}
