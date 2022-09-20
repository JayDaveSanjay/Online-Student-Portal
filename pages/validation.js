var nameError = document.getElementById('name-error');
var ennoError = document.getElementById('enno-error');
var contactError = document.getElementById('contact-error');
var emailError = document.getElementById('email-error');
var addError = document.getElementById('add-error');


function validateName()
{
    var name=document.getElementById('name').value;
    if(name.length==0)
    {
        nameError.innerHTML='Please enter name!';
        return false;
    }
    if(!name.match(/^\S[a-zA-Z]+ [a-zA-Z]+$/)){
        nameError.innerHTML='Please enter valid and Full name!';
        return false;
    }
    nameError.innerHTML='<i class="fa-solid fa-check"></i>';
    return true;
}
function validateNumber ()
{
    var number=document.getElementById('contact').value;
    if(number.length!==10)
    {
        contactError.innerHTML='Number should be of 10 digits!';
        return false
    }
    if(!number.match(/^[6-9]\d{9}$/))
    {
        contactError.innerHTML='Please enter valid and full number!';
        return false;
    }
    numberError.innerHTML='<i class="fa-solid fa-check"></i>';
    return true;
}
function validateEnno ()
{
    var number=document.getElementById('enno').value;
    if(number.length!==15)
    {
        ennnoError.innerHTML='Number should be of 15 digits!';
        return false
    }
    if(!number.match(/^[2]\d{14}$/))
    {
        ennoError.innerHTML='Please enter valid and full enrollment number!';
        return false;
    }
    numberError.innerHTML='<i class="fa-solid fa-check"></i>';
    return true;
}
function validateEmail()
{
    var email=document.getElementById('email').value;
    if(email.length==0)
    {
        emailError.innerHTML='Please enter email!';
        return false;
    }
    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/))
    {
        emailError.innerHTML='Please enter valid email address! ';
        return false;
    }
    emailError.innerHTML='<i class="fa-solid fa-check"></i>';
    return true;
}
function validateForm(){
    if(!validateName() || !validateEmail() || !validateNumber() || validateEnno())
    {
        addError.innerHTML='Please enter all data correctly';
        return false;
    }
}
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});