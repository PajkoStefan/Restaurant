var url = $(location).attr('href');

if (url.includes("reservation=success")) {
    console.log("la");
    let reservation = $('form');
    var resSuccess = $('<div>');
    var pTag = $('<p>');
    pTag.css({

        width: "100%",
        "padding-top" : "20px",
        "text-align" : "center",
        "font-size" : "24px"
    });
    pTag.attr({
        class: "reservation-id success"
    });
    resSuccess.insertAfter(reservation);
    resSuccess.append(pTag.text("Reservation successful!"));

}