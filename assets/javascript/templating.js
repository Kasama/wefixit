$(document).ready(function(){

    function fillHeader(header){
        $('.ajax-header').load(header);
    }
    function fillFooter(footer){
        $('.ajax-footer').load(footer);
    }
    function fillHead(head) {
        $('head').load(head);
    }
    function fillDOM(){

        var header, footer, head;
        head = 'head.html';
        header = 'header.html';
        footer = 'footer.html';

        fillHead(head);
        fillHeader(header);
        fillFooter(footer);
    }

    fillDOM();

});
