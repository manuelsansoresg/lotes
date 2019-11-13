if ($("#gallery").length > 0) {
    window.typeGallery = function(){
        var type = $('#type').val();
        if( type == 1){
            $('#div-imagen').show();
            $('#div-video').hide();
        }else{
            $('#div-imagen').hide();
            $('#div-video').show();
        }
    }
}