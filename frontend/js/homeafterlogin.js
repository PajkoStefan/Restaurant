var url = $(location).attr('href');
if (url.includes("login=success")) {

    let reviewDiv = $('div.review');
    reviewDiv.children().not(':first-child').remove();

    let textareaFormDiv = $('<div>');
    textareaFormDiv.attr({
        'class': 'textarea-form',
        'margin-top' : '5px'
    });
    reviewDiv.append(textareaFormDiv);
    selectTextareaFormDiv = $('div.textarea-form');
    let pSuccessCreate = $('<p>').attr('class', 'success');
    selectTextareaFormDiv.prepend(pSuccessCreate);

    let textareaForm = $('<form>');
    textareaForm.attr({
        method: "POST",
        action: "../../backend/homePHP.php"
    });
    let textareaField = $('<textarea></textarea>');
    textareaField.attr({
        maxlength: '400',
        name: 'review',
        rows: '7',
        placeholder: 'Review',
        id: 'review-textarea'
    }).css('width', '100%');
// <input id="review-rating" name="rating" type="number" placeholder="Rating[1-5]" maxlength="1"
//         min="1" max="5">
    let inputReviewRating = $('<input>');
    inputReviewRating.attr({
        id: 'review-rating',
        name: 'rating',
        type: 'number',
        placeholder: 'Rating[1-5]',
        maxlength: "1",
        min: "1",
        max: "5",
        class: 'circle'
    }).css({
        'width': '100%',
        'padding': '10px'
    });
    let buttonReview = $('<button>');
    buttonReview.attr({
        type: "submit",
        name: "review-btn",
        value: "Logout",
        class: "btn circle attr-crusor"
    }).text('Send');
    textareaForm.append(textareaField);
    textareaForm.append(inputReviewRating);
    textareaForm.append(buttonReview);
    textareaFormDiv.append(textareaForm);


    //logout
    var logoutDiv = $('<div>').attr('class', 'log-out');
    reviewDiv.append(logoutDiv);
    var formField = $('<form>');
    formField.attr({
        method: "POST",
        action: "../../backend/homePHP.php"
    });

    var buttonLogout = $('<button>');
    buttonLogout.css({
        width: "100%"
    });
    buttonLogout.attr({
        type: "submit",
        name: "logout",
        value: "Logout",
        class: "btn circle"
    }).text('Logout');
    logoutDiv.append(formField);
    formField.append(buttonLogout);


}

// <div class="hidden-before-signup" style="display: none">
//     <form id="review-show" method="POST" action="../../backend/homePHP.php" class="flex-del flex-dir-column">
//         <textarea maxlength="400" name="review" cols="50" id="comment" placeholder="Comment" rows="7"></textarea>
//         <input id="review-rating" name="rating" type="number" placeholder="Rating[1-5]" maxlength="1"
//         min="1" max="5">
//         <button class="btn attr-cursor" type="submit" name="review-btn">Send</button>
//     </form>
// </div>