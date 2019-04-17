/*let test = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
function showError(container, errorMessage) {
    container.className = 'error';
    var msgElem = document.createElement('span');
    msgElem.className = "error-message";
    msgElem.innerHTML = errorMessage;
    container.appendChild(msgElem);
}

function resetError(container) {
    container.className = '';
    if (container.lastChild.className == "error-message") {
        container.removeChild(container.lastChild);
    }
}

function validate(form) {
    var elems = form.elements;

    resetError(elems.firstname.parentNode);
    if (!elems.firstname.value) {
        showError(elems.firstname.parentNode, ' Введите имя');
    }

    resetError(elems.lastname.parentNode);
    if (!elems.lastname.value) {
        showError(elems.lastname.parentNode, ' Введите имя');
    }

    resetError(elems.password.parentNode);
    if (!elems.password.value) {
        showError(elems.password.parentNode, ' Укажите пароль.');
    } else if (elems.password.value.match(test)) {
        showError(elems.password.parentNode, ' Пароль слишком слаб');
    }

    resetError(elems.email.parentNode);
    if (!elems.email.value) {
        showError(elems.email.parentNode, ' Введите имейл');
    }

}*/


#firstname
{
    width: 100%;
}
#lastname
{
    width: 100%;
}
