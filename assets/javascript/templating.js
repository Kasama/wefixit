$.fn.changeVal = function (v) {
    return $(this).val(v).trigger("change");
};

$(document).ready(function(){

    function fillBody(body) {
        $('main.ajax-body').load(body);
    }

    function updatePage(event){
        var page, body;
        page = $(this).val();
        body = '_main.html';
        fillBody(page + body);
        $('.is-active').each(function(){$(this).removeClass('is-active')});
        $('a[data-link='+page+']').addClass('is-active');
        event.preventDefault();
    }

    function fillDOM(){

        var body;
        body = 'index_main.html';
        fillBody(body);

    }

    function setupLink(){
        $(this).click(function(event){
            var destination = $(this).data('link');
            $('input[type=hidden].page-holder').changeVal(destination);
            event.preventDefault();
        });
    }

    var input = $('input[type=hidden].page-holder');
    input.on('change', updatePage);
    input.trigger('change');
    $('a.link-to').each(setupLink);
});
