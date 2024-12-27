<form action="" method="POST" id="getData">
    <table border="1">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><button type="button" id="submit">Submit</button></td>
        </tr>
    </table>
</form>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {

    $(document).on('click', '#submit', function() {
        var formdata = new FormData($('#getData')[0])
        $.ajax({
            url: "check.php",
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function(response) {

            }
        })
    })

})
</script>

<!-- 
function viewData()
{
$.ajax({

})
}
viewData() -->