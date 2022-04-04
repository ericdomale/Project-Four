Chart.defaults.global.defaultFontFamily = "Euclid Circular B Medium";
Chart.defaults.global.defaultFontSize = 13;
Chart.defaults.global.defaultFontColor = 'seagreen';



var Marriage = document.getElementById("Marriage").value;
var Bible = document.getElementById("Bible").value;
var Shepherd = document.getElementById("Shepherd").value;
var Ministry = document.getElementById("Ministry").value;

window.onload = function()
{
    return Math.round(Math.random() * 100);
};

var chardata = {
    labels: ['Marriage','Bible','Shepherd','Ministry'],
    datasets : [
        {
            label : 'Schools',
            backgroundColor: '#112266',
            borderColor: 'seagreen',
            hoverBackgroundColor: '#24aa41',
            hoverBorderColor: 'white',
            data: [Marriage, Bible, Shepherd, Ministry]
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
            label : 'Revenue',
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
            label : 'Services',
            backgroundColor: '#112266',
            borderColor: '#112266',
            hoverBackgroundColor: '#24aa41',
            hoverBorderColor: 'white',
            data: [Sunday, Thanksgiving, Anointing, Special, Tuesday, Friday]
        }
    ]
};
var CHART = $("#mycanvas6");

var graph = new Chart(CHART, {
    type: 'bar',
    data: chardata
});

