Chart.defaults.global.defaultFontFamily = 'Euclid Circular B Medium';
Chart.defaults.global.defaultFontSize = 13;
Chart.defaults.global.defaultFontColor = '#4b4004';



//MONETARY
var Offerings = document.getElementById("Offerings").value;
var Tithes = document.getElementById("Tithes").value;
var Expenses = document.getElementById("Expenses").value;
var Pledges = document.getElementById("Pledges").value;

window.onload = function()
{
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Offerings','Tithes','Expenses','Pledges'],
    datasets : [
        {
            label : 'Monetary',
            backgroundColor: 'seagreen',
            borderColor: 'seagreen',
            hoverBackgroundColor: '#24aa41',
            hoverBorderColor: 'white',
            data: [Offerings, Tithes, Expenses, Pledges]
        }
    ]
};
var CHART = $("#mycanvas");

var barGraph = new Chart(CHART, {
    type: 'bar',
    data: chardata
});








var Male = document.getElementById("Male").value;
var Female = document.getElementById("Female").value;

window.onload = function()
{
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Male','Female'],
    datasets : [
        {
            label : 'Gender',
            backgroundColor: ['orange','#112266'],
            borderColor: 'white',
            hoverBackgroundColor: '#24aa41',
            hoverBorderColor: 'white',
            data: [Male, Female]
        }
    ]
};
var CHART = $("#mycanvas2");

var graph = new Chart(CHART, {
    type: 'doughnut',
    data: chardata
});





//TITHES
var January = document.getElementById("January").value;
var February = document.getElementById("February").value;
var March = document.getElementById("March").value;
var April = document.getElementById("April").value;
var May = document.getElementById("May").value;
var June = document.getElementById("June").value;
var July = document.getElementById("July").value;
var August = document.getElementById("August").value;
var September = document.getElementById("September").value;
var October = document.getElementById("October").value;
var November = document.getElementById("November").value;
var December = document.getElementById("December").value;


window.onload = function()
{
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets : [
        {
            label : 'Tithes',
            backgroundColor: '#d9dcf7',
            borderColor: '#112266',
            hoverBackgroundColor: '#24aa41',
            hoverBorderColor: 'white',
            data: [January, February, March, April, May, June, July, August, September, October, November, December]
        }
    ]
};
var CHART = $("#mycanvas4");

var graph = new Chart(CHART, {
    type: 'line',
    data: chardata
});





var Overcomers = document.getElementById("Overcomers").value;
var OpenHeavens = document.getElementById("OpenHeavens").value;
var Breakthrough = document.getElementById("Breakthrough").value;
var BreadofLife = document.getElementById("BreadofLife").value;
var Dunamis = document.getElementById("Dunamis").value;
var Wellspring = document.getElementById("Wellspring").value;
var Passion = document.getElementById("Passion").value;
var HolyHill = document.getElementById("HolyHill").value;
var MorningStar = document.getElementById("MorningStar").value;
var GoodShepherd = document.getElementById("GoodShepherd").value;


window.onload = function()
{
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Ovcmrs', 'OpHn', 'Brkth', 'Brdlife', 'Dun', 'Welspg', 'Pas', 'Hill', 'MStar', 'GShpd'],
    datasets : [
        {
            label : 'Cells Offerings',
            backgroundColor: '#112266',
            borderColor: '#112266',
            hoverBackgroundColor: '#3a60b3',
            hoverBorderColor: 'white',
            data: [Overcomers, OpenHeavens, Breakthrough, BreadofLife, Dunamis, Wellspring, Passion, HolyHill, MorningStar, GoodShepherd]
        }
    ]
};
var CHART = $("#mycanvas3");

var graph = new Chart(CHART, {
    type: 'bar',
    data: chardata
});


/*
var Sunday = document.getElementById("Sunday").value;
var Thanksgiving = document.getElementById("Thanksgiving").value;
var Anoiniting = document.getElementById("Anointing").value;
var Special = document.getElementById("Special").value;
var Tuesday = document.getElementById("Tuesday").value;
var Friday = document.getElementById("Friday").value;


window.onload = function()
{
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Sun', 'Thks', 'Ano', 'Spe', 'Tues', 'Fri'],
    datasets : [
        {
            label : 'Expenses',
            backgroundColor: '#112266',
            borderColor: '#112266',
            hoverBackgroundColor: '#24aa41',
            hoverBorderColor: 'white',
            data: [Sunday, Thanksgiving, Anointing, Special, Tuesday, Friday]
        }
    ]
};
var CHART = $("#mycanvas5");

var graph = new Chart(CHART, {
    type: 'bar',
    data: chardata
});
*/


//EXPENSES
var january1 = document.getElementById("january1").value;
var february2 = document.getElementById("february2").value;
var march3 = document.getElementById("march3").value;
var april4 = document.getElementById("april4").value;
var may5 = document.getElementById("may5").value;
var june6 = document.getElementById("june6").value;
var july7 = document.getElementById("july7").value;
var august8 = document.getElementById("august8").value;
var september9 = document.getElementById("september9").value;
var october10 = document.getElementById("october10").value;
var november11 = document.getElementById("november11").value;
var december12 = document.getElementById("december12").value;


window.onload = function () {
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [
        {
            label: 'Expenses',
            backgroundColor: '#ffffb0',
            borderColor: '#8a8a00',
            hoverBackgroundColor: '#24aa41',
            hoverBorderColor: 'white',
            data: [january1, february2, march3, april4, may5, june6, july7, august8, september9, october10, november11, december12]
        }
    ]
};
var CHART = $("#mycanvas5");

var graph = new Chart(CHART, {
    type: 'line',
    data: chardata
});





var Empowerment = document.getElementById("Empowerment").value;
var Armour = document.getElementById("Armour").value;
var Missiles = document.getElementById("Missiles").value;


window.onload = function()
{
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Empowerment', 'Armour', 'Missiles'],
    datasets : [
        {
            label : 'Services',
            backgroundColor: '#112266',
            borderColor: '#112266',
            hoverBackgroundColor: '#3a60b3',
            hoverBorderColor: 'white',
            data: [Empowerment, Armour, Missiles]
        }
    ]
};
var CHART = $("#mycanvas6");

var graph = new Chart(CHART, {
    type: 'bar',
    data: chardata
});

