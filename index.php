<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
    .contact {
        text-align: center;
        width: 200px;
        border: 3px #31BCC6 solid;
        border-radius: 10px;
        padding: 0px 10px 15px;
        transition: .3s all;
        cursor: pointer;
    }
    .contact:hover {
        border: 3px #228F97 solid;
    }
</style>
<script>
    $(document).ready(function () {
        $("#search").keyup(function () {
            $.ajax({
                url: "backend.php",
                type: 'post',
                data: {search: $(this).val()},
                success: function (result) {
                    $("#result").html(result);
                }
            })
        })
    })
</script>

<input type="text" id="search"/>
</p>
<span id="result"></span>
<?php

