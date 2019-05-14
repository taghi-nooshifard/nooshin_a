jQuery(document).ready(function ($) {

    // alert('ddddd');

    $(document).on("click", ".upload_image_button", function (e) {
        e.preventDefault();
        var $button = $(this);


        // Create the media frame.
        var file_frame = wp.media.frames.file_frame = wp.media({
            title: 'Select or upload image',
            library: { // remove these to show all
                type: 'image' // specific mime
            },
            button: {
                text: 'انتخاب'
            },
            multiple: false  // Set to true to allow multiple files to be selected
        });

        // When an image is selected, run a callback.
        file_frame.on('select', function () {
            // We set multiple to false so only get one image from the uploader

            var attachment = file_frame.state().get('selection').first().toJSON();

            $button.siblings('input').val(attachment.url);

        });

        // Finally, open the modal
        file_frame.open();
    });


    $("#dialog1" ).dialog({
        autoOpen: false,
        open:function () {
            $(".svg-inline--fa").hover(
                function () {
                    $(this).css('border','solid blue 1px');

                },function () {
                    $(this).css('border','solid white 0px');

                });
            $(".svg-inline--fa").click(function () {
                $("#"+$("#dialog1").data('caller_name')).removeAttr('class');
                $("#"+$("#dialog1").data('caller_name')).attr('class','');
                $("#"+$("#dialog1").data('caller_name'))[0].className.baseVal = this.className.baseVal;
                var mytext = $("#dialog1").data('caller_name').replace('_mycustom_field_1','_mycustom_field_2')
                $("#"+mytext).attr('value',this.className.baseVal);
                $("#dialog1" ).dialog('close');
            });
            // alert($("#dialog1").data('caller_name'));
        }
    });
    $("#tab1").tabs();


    $("[for^='edit-_mycustom_field_1']").click(function () {

       // alert('ddddd');
        $("#dialog1").data('caller_name', $(this).attr('for')).dialog('open');
    });


});

