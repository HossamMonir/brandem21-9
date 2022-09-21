function ajaxDelete(url)
{
    $(document).on('click', '.delete-row', function(e) {       
        // get the id of the select image for delete
        var id = $(this).attr('id');
        var confirmed = false;   

        // confirm your delete
        var $this = $(this);
        if (!confirmed) {
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Please confirm your delete action",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true,
                html: false
            }, function() {
                confirmed = true;

                // ajax call to delete the image
                $.ajax({
                    url: url,
                    type: "DELETE",
                    data: {
                        'id': id
                    },      
                    headers: {
                       'X-CSRF-Token': $('input[name=_token]').val()
                    },                      
                	dataType: "json",
                    success: function (data) {
                        // remove the deleted record
                        $('#rec_'+id).remove();
                        console.log(data);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                    	console.log('Status:'+jqXHR.status);
                    	console.log('Text status:'+textStatus);
                    	console.log('Error Thrown:'+errorThrown);
                    }
                });
            });
        }
    });
}