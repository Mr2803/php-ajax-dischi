function printAlbum(album) {
    var target = $(".song-global");
    var template = $("#hb-song").html();
    var compiled = Handlebars.compile(template);
    var cd = album;
    var compiledCd = compiled(cd);
    target.append(compiledCd);
}

function printData(data) {
    var target = $(".song-global");

    var template = $("#hb-song").html();
    var compiled = Handlebars.compile(template);

    for (var i = 0; i < data.length; i++) {
        var songs = data[i];

        var compiledSong = compiled(songs);

        target.append(compiledSong);

    }
}

function getData() {
    $.ajax({
        url: "getAllDisc.php",
        method: "GET",
        success: function (data) {
            printData(data);
            filter();
        },
        error: function (error) {
            console.log("error", error);
        }
    });
}


function filter(){

    $(".search-input").keyup(function () {
    
        //salvo una variabile che include il valore da me inserito
        var txtInserito = $(".search-input").val().toLowerCase();
    
        var listaAutori = $(".song p:nth-child(3)");
    
        //apro una funzione each per listare tutti i miei span primi figli(quindi i nomi degli autori)
        listaAutori.each(function () {
            var elemento = $(this);
            var nomeAutore = elemento.text().toLowerCase();
    
            var parent = elemento.parents(".song");
    
            //pongo la mia condizione e dico che se la mia var nome INDEXOF/INCLUDES il testo inserito dall'utente allora il mio parent viene mostrato , altrimenti viene nascosto
            if (nomeAutore.includes(txtInserito)) {
                parent.show();
            } else {
                parent.hide();
            }
        });
    
    
    })
}

function init() {
    console.log("hello world");
    getData();
}

$(document).ready(init);