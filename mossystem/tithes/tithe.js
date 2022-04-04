$(document).ready( function () {
    $('#contable').DataTable();
});

$(document).ready( function () {
    $('#indietable').DataTable();
});

$(document).ready( function () {
    $('#jointable').DataTable();
});


document.querySelector("#show-login").addEventListener("click",function()
{document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventListener("click",function()
{document.querySelector(".popup").classList.remove("active");
});



document.querySelector("#overalltab").addEventListener("click",function()
{document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventListener("click",function()
{document.querySelector(".popup").classList.remove("active");
});


document.querySelector("#indietab").addEventListener("click",function()
{document.querySelector(".spopup").classList.add("active");
});

document.querySelector(".spopup .close-btn").addEventListener("click",function()
{document.querySelector(".spopup").classList.remove("active");
});


document.querySelector("#jointab").addEventListener("click",function()
{document.querySelector(".jpopup").classList.add("active");
});

document.querySelector(".jpopup .close-btn").addEventListener("click",function()
{document.querySelector(".jpopup").classList.remove("active");
});





        function openPage(pageName, element, color) {
            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }

            document.getElementById(pageName).style.display = "block";
            element.style.backgroundColor = color;
        }
        document.getElementById("active").click();




