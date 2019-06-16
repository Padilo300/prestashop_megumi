$(function () {
    $('.clear_log').live('click', function () {
        $.ajax({
            url: document.location.href.replace('#'+document.location.hash, ''),
            type: 'POST',
            data: {
                ajax: true,
                action: 'clear_cdek_log'
            },
            success: function () {
                var table = $('.cdek_logger tbody');
                table.html('');
                pages = [];
                checkPagination();
            }
        });
    });

    $('.show_more').live('click', function () {
        var table = $('.cdek_logger tbody');
        var page = pages.shift();
        $.ajax({
            url: document.location.href.replace('#'+document.location.hash, ''),
            type: 'POST',
            dataType: 'json',
            data: {
                ajax: true,
                action: 'get_cdek_log',
                page: page
            },
            success: function (json) {
                checkPagination();
                table.append(json.html);
                highlightJSON();
            }
        });
    });

    highlightJSON();
});


function checkPagination() {
    if (!pages.length) {
        $('.show_more').hide();
    }
}

function highlightJSON() {
    $('code').each(function(i, block) {
        hljs.highlightBlock(block);
    });
}
