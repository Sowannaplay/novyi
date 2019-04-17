$('#firstname').on('input invalid', function() {
    this.setCustomValidity('')
    if (this.validity.valueMissing) {
        this.setCustomValidity("Введите имя")
    }
    if (this.validity.typeMismatch) {
        this.setCustomValidity("Не соответствует типу")
    }
    if (this.validity.patternMismatch) {
        this.setCustomValidity("Неправильный вид")
    }
});

$('#lastname').on('input invalid', function() {
    this.setCustomValidity('')
    if (this.validity.valueMissing) {
        this.setCustomValidity("Введите фамилию")
    }
    if (this.validity.typeMismatch) {
        this.setCustomValidity("Не соответствует типу")
    }
    if (this.validity.patternMismatch) {
        this.setCustomValidity("Неправильный вид")
    }
});

$('#password').on('input invalid', function() {
    this.setCustomValidity('')
    if (this.validity.valueMissing) {
        this.setCustomValidity("Введите пароль")
    }
    if (this.validity.patternMismatch) {
        this.setCustomValidity("Минимум 8 символов, 1 специальный, 1 заглавная буква")
    }
});

$('#email').on('input invalid', function() {
    this.setCustomValidity('')
    if (this.validity.valueMissing) {
        this.setCustomValidity("Введите имейл")
    }
    if (this.validity.typeMismatch) {
        this.setCustomValidity("Проверьте правильность ввода")
    }
    if (this.validity.patternMismatch) {
        this.setCustomValidity("Неправильный вид")
    }
});





