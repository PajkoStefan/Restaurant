window.addEventListener('load', (event) => {
    console.log('page is fully loaded');
});

var bodyDelId = $('#body-del');
// var orderDiv = $('.order');
var btnOrder = $('.btn-order');

btnOrder.on('click', (event) => {
    var div = $('<div>');
    div.addClass('order-window box-70 flex-del flex-dir-column');
    var escapeX = $('<div>');
    escapeX.addClass('closePage');
    escapeX.text('X');
    bodyDelId.append(div);
    div.append(escapeX);
    escapeX.on('click', (event) => {
        div.remove();
    });
    var eventReturn = event.target.id;
    // console.log(eventReturn);
    var mealBreakfast = {
        'Cake Caramel1': '2',
        'Cake Caramel2': '3',
        'Cake Caramel3': '4',
        'Cake Caramel4': '5',
        'Cake Caramel5': '6',
        'Cake Caramel6': '7',
    };

    // console.log(mealBreakfast);
    // console.log(Object.keys(mealBreakfast));
    var mealLunch = {
        'Cake Caramel1': '2',
        'Cake Caramel2': '3',
        'Cake Caramel3': '4',
        'Cake Caramel4': '5',
        'Cake Caramel5': '6',
        'Cake Caramel6': '7',
    };

    var mealDinner = {
        'Cake Caramel1': '2',
        'Cake Caramel2': '3',
        'Cake Caramel3': '4',
        'Cake Caramel4': '5',
        'Cake Caramel5': '6',
        'Cake Caramel6': '7',
    };
    keysBreakfast = Object.keys(mealBreakfast);
    keysLunch = Object.keys(mealLunch);
    keysDinner = Object.keys(mealDinner);
    var header1 = $('<h1>');
    var divMenu = $('<div>');
    var ulEl = $('<ul>');
    var mealPrice;

    function deliveryFood(typeMeal, keysMeal) {
        // meal = Object.keys(mealBreakfast);
        header1.text(typeMeal);
        div.append(header1);
        div.append(divMenu.addClass('dailyMenu'));
        ulEl.addClass('flex-del flex-dir-column flex-justify-spacebetween');
        ulEl.attr({
            style: "font-size: 25px"
        });
        divMenu.append(ulEl);
        var span1 = $('<span>');
        var span2 = $('<span>');
        var span3 = $('<span>');
        var liEl = $('<li>').addClass('flex-del flex-justify-spacebetween');
        liEl.attr({style: "margin-bottom:10px"});
        ulEl.append(liEl);
        liEl.append(span1.text('Select'), span2.text('Meal name'), span3.text('Price'));
        var totalPrice = 0;
        //for kreiranje elementi i sablon
        for (var i = 0; i < keysMeal.length; i++) {
            mealPrice = mealBreakfast[keysMeal[i]] + '$';
            var liEl = $('<li>').addClass('flex-del flex-justify-spacebetween');
            let checkBox = $('<input>');
            checkBox.attr({
                type: 'checkbox',
                name: `meal${i + 1}`,
                class: `meal${i + 1}`,
                value: `${mealBreakfast[keysMeal[i]]}`,
                id: "false"
            });
            var span1 = $('<span>');
            var span2 = $('<span>');
            var span3 = $('<span>');
            // console.log(span1);
            // `Meal: ${keysBreakfast[i]}`
            //     `Price: ${meal}`
            ulEl.append(liEl);
            span1.addClass('select-meal');
            span2.addClass('meal-name');
            span3.addClass('meal-price');

            liEl.append(span1, span2, span3);
            span1.append(checkBox);
            span2.append(keysMeal[i]);
            span3.append(mealPrice);

        }
        var span1 = $('<span>');
        var liEl = $('<li>').addClass('flex-del');
        liEl.attr({
            style: "margin-top:10px;" +
                "justify-content : flex-end;"
        });
        ulEl.append(liEl);
        liEl.append(span1.text('Result: '));
        var result = $('<div>').attr({
            style: "padding:0 5px;" +
                "background-color: grey;" +
                "text-align:center;" +
                "margin-left:30px",
            id: "resultOrder"
        });
        liEl.append(result.text(totalPrice + '$'));

        //for event listener i presmetka
        for (var i = 0; i < keysMeal.length; i++) {
            var meal = '.meal' + (i + 1);
            let checkBox = $(meal);
            checkBox.on('click', event => {
                var checkBoxId = checkBox.attr('id');
                if (checkBoxId === "false") {
                    checkBox.attr({
                        id: "true"
                    });
                    totalPrice += parseInt(event.target.value);
                    result.text(totalPrice + '$');
                } else {
                    checkBox.attr({
                        id: "false"
                    });
                    totalPrice -= parseInt(event.target.value);
                    result.text(totalPrice + '$');

                }

            });
        }

        let deliveryInfo = document.createElement('div');
        deliveryInfo.setAttribute("id", "delivery-info");
        deliveryInfo.setAttribute("class", "flex-del flex-dir-column");
        let deliveryFullName = document.createElement('input');
        deliveryFullName.setAttribute("id", "delivery-fullname");
        deliveryFullName.setAttribute("type", "text");
        deliveryFullName.setAttribute("placeholder", "Full Name");
        let deliveryAddress = document.createElement('input');
        deliveryAddress.setAttribute("id", "delivery-addres");
        deliveryAddress.setAttribute("type", "text");
        deliveryAddress.setAttribute("name", "deliveryaddres");
        deliveryAddress.setAttribute("placeholder", "Delivery Address");
        let deliveryPhoneNumber = document.createElement('input');
        deliveryPhoneNumber.setAttribute("id", "delivery-phone");
        deliveryPhoneNumber.setAttribute("type", "text");
        deliveryPhoneNumber.setAttribute("name", "deliveryphone");
        deliveryPhoneNumber.setAttribute("placeholder", "Your Phone Number");
        let deliveryOrder = document.createElement('button');
        deliveryOrder.setAttribute("id", "delivery-order");
        deliveryOrder.setAttribute("type", "submit");
        deliveryOrder.setAttribute("class", "btn");
        deliveryOrder.innerHTML = "ORDER";

        divMenu.append(deliveryInfo);
        deliveryInfo.append(deliveryFullName);
        deliveryInfo.append(deliveryAddress);
        deliveryInfo.append(deliveryPhoneNumber);
        deliveryInfo.append(deliveryOrder);


    }

    if (eventReturn === 'btn-breakfast')
        deliveryFood('Breakfast', keysBreakfast);
    else if (eventReturn === 'btn-lunch')
        deliveryFood('Lunch', keysLunch);
    else if (eventReturn === 'btn-dinner')
        deliveryFood('Dinner', keysDinner);
});

