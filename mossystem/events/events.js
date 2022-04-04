$(document).ready( function () {
    $('#contable').DataTable();
});

document.querySelector("#show-login").addEventListener("click",function()
{document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventListener("click",function()
{document.querySelector(".popup").classList.remove("active");
});


$(document).ready(function(){
    $('#eventkind').change(function(){
        var kindno = $(this).val();
        $.ajax({
            url: "fetch.php",
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