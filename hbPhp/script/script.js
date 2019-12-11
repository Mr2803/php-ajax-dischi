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
        },
        error: function (error) {
            console.log("error", error);
        }
    });
}

function init() {
    console.log("hello world");
    getData();
}

$(document).ready(init);