$(document).ready(function() {
    $('.js-attend-toggle').on('click', function(e) {
        // prevents the browser from "following" the link
        e.preventDefault();
        var $anchor = $(this);
        var url = $(this).attr('href')+'.json';

        $.post(url, null, function(data) {
            if (data.admit) {
                var message = '<i class="fa fa-check"></i> Validé';
                var btn = 'success';
            }else {
                var message = '<i class="fa fa-remove"></i> Non Validé';
                var btn = 'danger';
            }

            $anchor.after('<button class="btn btn-'+btn+' js-attend-toggle"> '+message+'</button>');
            $anchor.hide();
        });
    });
});
