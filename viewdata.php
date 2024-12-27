<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<table border="1">
    <tr>
        <td>name</td>
        <td>Email</td>
        <td>Password</td>
        <td>DELETE</td>
        <td>EDIT</td>
    </tr>
    <tbody id="showData">

    </tbody>


</table>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="editData">
                <form action="" method="POST" id="getData">
                    <table>
                        <tr>
                            <input type="hidden" name="id" id="id">
                            <td>Name</td>
                            <td><input type="text" id="name" name="name"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" id="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="password" name="password"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submit">Update</button>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {

    function viewData() {
        $.ajax({
            url: "viewcheck.php",
            type: "POST",
            data: {
                'view': '1'
            },
            success: function(response) {
                var data = $.parseJSON(response)
                var html = ''
                $.each(data, function(key, value) {
                    html += '<tr><td>' + value.name + '</td><td>' + value.email +
                        '</td><td>' + value.password +
                        '</td><td><button type="button" class="dataDelete" data-did=' +
                        value.id +
                        '>DELETE</button></td><td><button type="button" class="dataEdit" data-edit=' +
                        value.id +
                        ' data-toggle="modal" data-target="#staticBackdrop">EDIT</button></td></tr>'
                })

                $('#showData').html(html)
            }
        })
    }

    viewData()

    $(document).on('click', '.dataDelete', function() {

        var deleteid = $(this).data('did')
        // alert(deleteid)

        $.ajax({
            url: "deletedata.php",
            type: "POST",
            data: {
                'delete': deleteid
            },
            success: function(response) {
                viewData()
            }
        })
    })


    $(document).on('click', '.dataEdit', function() {
        var Edit_id = $(this).data('edit')

        $.ajax({
            url: "editdata.php",
            type: "POST",
            data: {
                'edit': Edit_id,
            },
            success: function(response) {

                var data = $.parseJSON(response)

                var id = $('#id').val(data.id);
                var name = $('#name').val(data.name);
                var email = $('#email').val(data.email);
                var password = $('#password').val(data.password);

            }
        })


        $(document).on('click', '#submit', function() {
            var formdata = new FormData($('#getData')[0])
            // alert(Edit_id)
            $.ajax({
                url: "update.php",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {

                }
            })
        })
    })

})
</script>