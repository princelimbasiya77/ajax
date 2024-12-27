<table border="1">
    <tr>
        <td>name</td>
        <td>name</td>
        <td>name</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
    <tbody id="showData">

    </tbody>
</table>



<!-- encode => {"key" : "value"} -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
$(document).ready(function() {

    alert()
    function viewData() {
        $.ajax({
            url: "viewcheck.php",
            type: "POST",
            data: {
                'view' : '1'
            },
            success: function(response) {

                console.log(response);
                
                var data = JSON.parse(response)
                // var data = $.parseJSON(response)
                // console.log(st);
                // console.log(data);

                var html = ''
                $.each(data , function(key , value){
                    html += '<tr><td>'+value.name+'</td><td>'+value.email+'</td><td>'+value.password+'</td></tr>'
                })
                

                $('#showData').html(html)
            }
        })
    }

    viewData()
})
</script>