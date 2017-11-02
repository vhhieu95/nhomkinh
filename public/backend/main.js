$(document).ready(function() {
    $('#data-table').DataTable( {
        "paging": false,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
         aaSorting: [[0, 'desc']],
        "info": true,
        "autoWidth": false,
    } );

    $('.btn-delete-item').bind('click',function(e){
        e.preventDefault();
        var form = $(this.form);
        var title = $(this).attr('data-title');
        var body = '<i>' + $(this).attr('data-confirm') + '</i>';
        $('#title-content').html(title);
        $('#body-content').html(body);
        $('#confirm').modal('show');
        $('#delete-btn').one('click', function(){
            form.submit();
            $('#confirm').modal('hide');
        })
    });

    $('#preview-image').change( function(event) {
        var select_input_file = $(this).val();
        if (select_input_file) {
            var imgpath = URL.createObjectURL(event.target.files[0]);
            $("#showImage").fadeIn("fast").attr('src',imgpath);
        } else {
            $("#showImage").fadeIn("fast").attr('src','/images/default/no_image.png');
        }
    });

    /**
     * Show multiple image when choose image
     */
    $('#multiple-image').change( function(event) {
        var files = event.target.files;
        var result = $("#showImage");
        result.empty();  
        $.each(files, function(i, file) {
            var imgpath = URL.createObjectURL(file);    
            result.add("<img class='img-product  mr-10' src='" + imgpath + "'>").appendTo('#showImage');
        });
    });


    /**
     * remove image when click button remove image
     */
    $('.btn-remove-img').bind('click',function(e){
        e.preventDefault();
        var img_container = $('#old-images');
        var img_item = $(this).parent();
        var title = img_container.data('title');
        var token = img_container.data('token');
        var url = $(this).data('url');
        var body = '<i>' + img_container.data('confirm') + '</i>';
        $('#title-content').html(title);
        $('#body-content').html(body);
        $('#confirm').modal('show');
        $('#delete-btn').one('click', function(){
            $.ajax({
                url: url,
                type: 'POST',
                data: {_method: 'delete', _token :token},
                success: function( msg ) {
                    if (msg.result) {
                        img_item.remove()
                    }
                    if (img_container.children().length == 0) {
                        img_container.add('<div id="old-images" class="text-info">Không có ảnh</div>').appendTo('#old-images');
                    }
                }
            });
            $('#confirm').modal('hide');
        })
    });
});

