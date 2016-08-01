$(document).ready(function() {

    $('.reset').click(function(){
        var name = $('#name');
        name.css("border-color","lightgrey");
        var email = $('#email');
        email.css("border-color","lightgrey");
        return confirm('RESET FORM?');
    });

    $('.article-reset').click(function(){
        var title = $('#title');
        title.css("border-color","lightgrey");
        var text = $('#text');
        text.css("border-color","lightgrey");
        var description = $('#description');
        description.css("border-color","lightgrey");
        return confirm('RESET FORM?');
    });

    $('.article-submit').click(function(){
        var articleError = false;
        var title = $('#title');
        var titleVal = title.val().trim();
        title.val(titleVal);
        if (titleVal.length < 3) {
            title.css("border-color","red");
            articleError = true;
        } else {
            title.css("border-color","lightgreen");
        }

        var description = $('#description');
        var descriptionVal = description.val().trim();
        description.val(descriptionVal);
        if (descriptionVal.length < 1) {
            description.css("border-color","red");
            articleError = true;
        } else {
            description.css("border-color","lightgreen");
        }

        var text = $('#text');
        var textVal = text.val().trim();
        text.val(textVal);
        if (textVal.length < 1) {
            text.css("border-color","red");
            articleError = true;
        } else {
            text.css("border-color","lightgreen");
        }

        if (articleError) {
            return false;
        } else {
            return confirm('ADD NEW ARTICLE?');
        }
    });

    $('.user-submit').click(function(){

        var nameError = false;
        var name = $('#name');
        var nameVal = name.val().trim();
        name.val(nameVal);
        if (nameVal.length < 3) {
            name.css("border-color","red");
            nameError = true;
        } else {
            name.css("border-color","lightgreen");
            nameError = false;
        }

        var emailError = false;
        var email = $('#email');
        var emailVal = email.val().trim();
        email.val(emailVal);
        var rem = /\S+@\S+\.\S+/;
        if ( !(rem.test(emailVal) ) ) {
            email.css("border-color","red");
            emailError = true;
        } else {
            email.css("border-color","lightgreen");
            emailError = false;
        }

        if (nameError || emailError) {
            return false;
        } else {
            return confirm('ADD NEW USER?');
        }

    });

});
