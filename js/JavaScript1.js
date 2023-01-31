var produits =
    [
        "Avocat",
        "banane",
        "cheflour",
        "cherimoya",
        "dbinjal",
        "Btata",
        "flafal",
        "fraise",
        "kiwi",
        "orange",
        "pomme",
        "tomte"
    ];
var prix =
    [
        20,
        10,
        6,
        24,
        7,
        5,
        20,
        10,
        20,
        3,
        10,
        9
    ];
var photos =
    [
        "avocat.jpg",
        "banane.jpg",
        "cheflour.jpg",
        "cherimoya.jpg",
        "dbinjal.jpg",
        "btata.jpg",
        "falfal.jpg",
        "fraise.jpg",
        "kiwi2.jpg",
        "orange.jpg",
        "pomme.jpg",
        "tomat.jpg"
    ];
function afficherProduits() {
    var tt = "<div class='row mx-auto'>";
    var chercher = $("#txtSearch").val().toLowerCase();
    for (i = 0; i <= produits.length - 1; i++) {
        if (chercher.length > 0){
            if (produits[i].toLowerCase().indexOf(chercher) !== -1) {
                tt = tt + "<div class='col-auto sandok text-center mt-2 mx-2 p-2 shadow-sm'>";
                tt = tt + "<img class='imgPRODUIT' src='images/" + photos[i] + "' onclick='AjouterProduit(this)'/>";
                tt = tt + "<br>";
                tt = tt + "<span class='nomPRODUIT'>" + produits[i] + "</span>";
                tt = tt + "<br>";
                tt = tt + "<span class='badge bg-danger prixPRODUIT'>" + prix[i] + " dh</span>";
                tt = tt + "<span class='tamanPRODUIT' style='display:none'>" + prix[i] + "</span>";
                tt = tt + "</div>";
            }
        }
        else
        {
            tt = tt + "<div class='col-auto sandok text-center mt-2 mx-2 p-2 shadow-sm'>";
            tt = tt + "<img class='imgPRODUIT' src='images/" + photos[i] + "' onclick='AjouterProduit(this)'/>";
            tt = tt + "<br>";
            tt = tt + "<span class='nomPRODUIT'>" + produits[i] + "</span>";
            tt = tt + "<br>";
            tt = tt + "<span class='badge bg-danger prixPRODUIT'>" + prix[i] + " dh</span>";
            tt = tt + "<span class='tamanPRODUIT' style='display:none'>" + prix[i] + "</span>";
            tt = tt + "</div>";
        }
    }
    document.getElementById("dvPRODUIT").innerHTML = tt;
}

function AjouterProduit(o) {
    var dv = $(o).closest(".sandok");
    var nom = $(dv).find(".nomPRODUIT").text();
    var prix = $(dv).find(".tamanPRODUIT").text();
    var star = "<tr>";
    star = star+ "<td> " + nom + "</td> <td class='pP'>" + prix + "</td>"
    star = star + "<td><input type='number' value='1' class='qte' onchange='calculerTotal()'/></td>"
    star = star + "<td class='totalLigne'></td>"
    star = star + "</tr>";
    $("#tbFACTURE tbody").append(star);
    calculerTotal();
}
function calculerTotal() {
    var s = 0;
    var q = 0;
    $(".pP").each(function ()
    {
        var prix = $(this).text();
        var star = $(this).closest("tr");
        var qte = $(star).find(".qte").val();
        $(star).find(".totalLigne").text(prix * qte);
        q = q + qte / 1;
        s = s + prix * qte / 1;
    });
    //var sTotal = "<tr><td>TOTAL</td><td class='pP'>" + s + "</td></tr>";
    //$("#tbFACTURE tfoot").append(sTotal);
    
    $("#qTOTAL").text(q);
    $("#tTOTAL").text(s);
}

function printDiv(divName) {

    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}