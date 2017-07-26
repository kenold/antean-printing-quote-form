//Print sizes
var print_sizes = new Array();
print_sizes["none"] = 0;
print_sizes["4x5"] = 20;
print_sizes["8x11"] = 95;

//Paper stock
var stocks = new Array();
stocks["none"] = 0;
stocks["14pt"] = 10;
stocks["16pt"] = 20;
stocks["17pt"] = 25;

//Back side
var back_sides = new Array();
back_sides["none"] = 0;
back_sides["full"] = 30;
back_sides["bw"] = 25;

//Coating
var coatings = new Array();
coatings["none"] = 0;
coatings["high"] = 98;
coatings["matt"] = 120;

//Corner
var corners = new Array();
corners["none"] = 0;
corners["rounded"] = 25;
corners["standard"] = 20;

//Quantity
var quantities = new Array();
quantities["none"] = 0;
quantities["100qty"] = 10;
quantities["250qty"] = 20;
quantities["500qty"] = 30;
quantities["1000qty"] = 40;
quantities["2000qty"] = 50;
quantities["2500qty"] = 60;
quantities["3000qty"] = 70;

//Printing turnaround
var ship_options = new Array();
ship_options["3day"] = 10;
ship_options["7day"] = 15;
ship_options["next"] = 50;
ship_options["today"] = 80;

//Shipping locations
var ship_locations = new Array();
ship_locations["jax"] = 10;
ship_locations["orlando"] = 15;
ship_locations["miami"] = 40;
ship_locations["atlanta"] = 55;

// ********************* GET SIZE PRICE ********************* //
//finds the print size price based on the
//drop down selection
function getSizePrice() {
    var printSizePrice = 0;
    var theForm = document.forms["printform"];
    //Get a reference to the select id="print_sizes"
    var selectedSize = theForm.elements["print_sizes"];

    //set print size Price equal to value user chose
    //For example print_sizes["4x5".value] would be equal to 5
    printSizePrice = print_sizes[selectedSize.value];

    return printSizePrice;
}

// ********************* GET STOCK PRICE ********************* //
function getStockPrice() {
    var stockPrice = 0;
    var theForm = document.forms["printform"];
    var selectedStock = theForm.elements["stocks"];

    stockPrice = stocks[selectedStock.value];

    return stockPrice;
}

// ********************* GET BACK PRICE ********************* //
function getBackPrice() {
    var backPrice = 0;
    var theForm = document.forms["printform"];
    var selectedBack = theForm.elements["back_sides"];

    backPrice = back_sides[selectedBack.value];

    return backPrice;
}

// ********************* GET COATING PRICE ********************* //
function getCoatingPrice() {
    var coatingPrice = 0;
    var theForm = document.forms["printform"];
    var selectedCoating = theForm.elements["coatings"];

    coatingPrice = coatings[selectedCoating.value];

    return coatingPrice;
}

// ********************* GET CORNERS PRICE ********************* //
function getCornersPrice() {
    var cornersPrice = 0;
    var theForm = document.forms["printform"];
    var selectedCorners = theForm.elements["corners"];

    cornersPrice = corners[selectedCorners.value];

    return cornersPrice;
}

// ********************* GET QUANTITIES PRICE ********************* //
function getQuantitiesPrice() {
    var quantitiesPrice = 0;
    var theForm = document.forms["printform"];
    var selectedQuantity = theForm.elements["quantities"];

    quantitiesPrice = quantities[selectedQuantity.value];

    return quantitiesPrice;
}

// ***************** GET SHIP OPTION PRICE // RADIO  ***************** //
function getShipOptionsPrice() {
    var shipOptionsPrice = 0;
    //Get a reference to the form id="printform"
    var theForm = document.forms["printform"];
    //Get a reference to the print option the user Chooses name=selectedship":
    var selectedShip = theForm.elements["selectedship"];

    //We loop through each radio buttons
    for (var i = 0; i < selectedShip.length; i++) {
        //if the radio button is checked
        if (selectedShip[i].checked) {
            shipOptionsPrice = ship_options[selectedShip[i].value];
            break;
        }
    }
    //We return the shipOptionsPrice
    return shipOptionsPrice;
}

function calculateTotal() {
    var printPrice = getSizePrice() + getStockPrice() + getShipOptionsPrice()
        + getBackPrice() + getCoatingPrice() + getCornersPrice()
        + getQuantitiesPrice();

    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display = 'block';
    divobj.innerHTML = "Total Price For this print job $" + printPrice;

}

function hideTotal() {
    var divobj = document.getElementById('totalPrice');
    divobj.style.display = 'none';
}
