//-------------
    //  Navbar js
//  --------------

$(function () {
    $(document).scroll(function(){
        var $nav = $("#mainNav");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });
});


// ------------
//   flip card
//   ----------

$(function () {
    $('.flip').hover(function(){
$(this).find('.card').toggleClass('flipped');
    });
});

// ----------------------
//   password Validation
// ---------------------

function passValidate() {
    var name = document.registration.user_name;
    var uid = document.registration.user_email;
    var user_cont = document.registration.user_phone;
    var password1 = document.registration.pass_1;
    var password2 = document.registration.pass_2;
    var dOB = document.registration.user_dob;

    if(allLetter(name)){
        if(uid_validation(uid,5,40)){
            if(ValidateEmail(uid)){
                if(pass_validation(password1,password2,7,15)){
                    return true;
                }
            }
        }
    }
    return false;
}

function uid_validation(uid,mx,my) {
    var uid_len = uid.value.length;
    if(uid_len == 0 || uid_len >= my || uid_len < mx) {
        alert("User Id should not be empty or length between " +mx+ " to "+my);
        uid.focus();
        return false;
    }
    return true;
}

function pass_validation(password1,password2,mx,my){
    var pass1_len = password1.value.length;
    var pass2_len = password2.value.length;
    if(pass1_len == 0 || pass2_len == 0 || pass1_len >= my || pass2_len >= my || pass1_len < mx || pass2_len < mx){
        alert("Password should not be empty / length must be between " +mx+ " to " +my);
        password1.focus();
        password2.focus();
        return false;
    }
    else if(password1.value == password2.value) {
        return true;
    }
    else{

 alert("Password do not match.")
    return false;
    }
}

// function pass_Match(password1, password2){
//     if(password1 != password2) {
//         alert("Password do not match.");
//         return false;
//     }
//     else{
//     return true;
//     }
// }

function allLetter(name)
{
    var letters = /^[A-Za-z ]+$/;
    if(name.value.match(letters))
        {
            return true;
        }
    else
    {
        alert('Name must have alphabet characters only');
        name.focus();
        return false;
    }
}

function ValidateEmail(uid)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(uid.value.match(mailformat))
        {
            return true;
        }
    else
        {
            alert("You have entered an invalid email address!");
            uid.focus();
            return false;
        }
}

// $("#submit_form").click(function() {
//     var dataString = $('#register').serialize();
//     $.ajax({
//                     type: "POST",
//                     url: "html/signup.php",
//                     data: dataString
//             });

// });
