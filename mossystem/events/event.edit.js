$(document).ready(function(){
    $('#eventkind').change(function(){
        var kindno = $(this).val();
        $.ajax({
            url: "editfetch.php",
            method: "POST",
            data: {kindno:kindno},
            dataType: "text",
            success: function(data)
            {
                $('#eventype').html(data);
            }
        });
    });
});