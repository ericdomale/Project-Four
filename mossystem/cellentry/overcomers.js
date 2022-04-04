$(document).ready( function () {
    $('#contable').DataTable();
});


document.querySelector("#show-login").addEventListener("click",function()
{document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventListener("click",function()
{document.querySelector(".popup").classList.remove("active");
});

document.querySelector("#sho-login").addEventListener("click",function()
{document.querySelector(".viewmembers").classList.add("active");
});

document.querySelector(".viewmembers .close-btn").addEventListener("click",function()
{document.querySelector(".viewmembers").classList.remove("active");
});


/*document.querySelector("#sho-login").addEventListener("click",function()
{document.querySelector(".pop").classList.add("active");
});

document.querySelector(".pop .close-btn").addEventListener("click",function()
{document.querySelector(".pop").classList.remove("active");
});*/
