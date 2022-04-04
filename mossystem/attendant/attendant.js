$(document).ready( function () {
    $('#contable').DataTable();
});


document.querySelector("#show-login").addEventListener("click",function()
{document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventListener("click",function()
{document.querySelector(".popup").classList.remove("active");
});




  //auto-addition
  var total = function() {

    var sum = 0;

    $('.amount').each(function(){

       var num = $(this).val().replace(',','');

       if(num != 0) {
           sum += parseFloat(num);
       }
    });

    $('#overtotal').val(sum);

}



$('.amount').keyup(function(){

total();

});