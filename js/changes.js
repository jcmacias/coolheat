/**
 * Created by 508 on 7/27/2016.
 */
$(function () {
    $(document).on('click', '.language',function () {
        var lang = $(this).attr('id');
        $.post('index.php?r=site/language', {'lang': lang}, function (data) {
            location.reload();
        });
    });
});
