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
} );

