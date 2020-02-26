let menusDiv = $('.menu-sel');

var bodyDelId = $('#body-del');

gallaryArray = ["../images/breakfastmenu.png", "../images/lunchmenu.png", "../images/dinnermenu.jpg"];



menusDiv.on('click', (event) => {
    var divMenu = $('<div>');
    divMenu.addClass('menuPicture box-70 flex-del');
    var escapeX = $('<div>');
    escapeX.addClass('closePage');
    escapeX.text('X');
    bodyDelId.append(divMenu);
    divMenu.append(escapeX);
    escapeX.on('click', (event) => {
        divMenu.remove();
    });
    var eventReturn = event.target.textContent;
    var imgTag = $('<img />');
    if(eventReturn==="Breakfast"){
        imgTag.attr({
            style : "width:95%; height: 95%;",
            src : gallaryArray[0],
            alt : "Error",
            class : "menuImg"
        });
    }
    else if(eventReturn ==="Lunch"){
        imgTag.attr({
            style : "width:95%; height: 95%;",
            src : gallaryArray[1],
            alt : "Error",
            class : "menuImg"
        });
    }
    else if(eventReturn ==="Dinner"){
        imgTag.attr({
            style : "width:95%; height: 95%;",
            src : gallaryArray[2],
            alt : "Error",
            class : "menuImg"
        });
    }
    divMenu.append(imgTag);

});