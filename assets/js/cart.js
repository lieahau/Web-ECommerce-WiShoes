$(document).ready(function(){
    // OPEN MODAL
    $('#checkout').click(function(){
        var buttonId = $(this).attr('id');
        $('#modal-container').removeAttr('class').addClass(buttonId);
        $('body').addClass('modal-active');

        $(".check-icon").hide();
        setTimeout(function () {
            $(".check-icon").show();
        }, 1000);
    });

});