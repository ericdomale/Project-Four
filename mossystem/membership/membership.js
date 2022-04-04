$(document).ready( function () {
    $('#contable').DataTable();
});



document.querySelector("#show-login").addEventListener("click",function()
{document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventListener("click",function()
{document.querySelector(".popup").classList.remove("active");
});





document.getElementById("submit").addEventListener("click",function(){
    document.getElementsByClassName("popip")[0].classList.add("active");
});

document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
    document.getElementsByClassName("popip")[0].classList.remove("active");
});


