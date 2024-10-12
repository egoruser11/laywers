function showErrorModal(message, id = 'errorModal') {
    $('#'+id+' #errorText').html(message);
    $('#'+id).modal('show');
}

function showConfirmModal(message) {
    $('#confirmModal #confirmText').html(message);
    $('#confirmModal').modal('show');
}

function showInfoModal(message) {
    $('#infoModal #infoText').html(message);
    $('#infoModal').modal('show');
}

function hideConfirmModal() {
    $('#confirmModal').modal('hide');
}

function autoGrow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}

function genPassword() {
    return Array(10).fill("2345kfw6789kfabcdez23456789")
        .map(function(x) { return x[Math.floor(Math.random() * x.length)] }).join('');
}

function isValidEmail(email) {
    const re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function getRandomInt(max) {
    // 0, 1, ..., max - 1
    return Math.floor(Math.random() * max);
}

function translit(str) {
    const ru = {
        'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd',
        'е': 'e', 'ё': 'e', 'ж': 'j', 'з': 'z', 'и': 'i',
        'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n', 'о': 'o',
        'п': 'p', 'р': 'r', 'с': 's', 'т': 't', 'у': 'u',
        'ф': 'f', 'х': 'h', 'ц': 'c', 'ч': 'ch', 'ш': 'sh',
        'щ': 'shch', 'ы': 'y', 'э': 'e', 'ю': 'u', 'я': 'ya'
    }, n_str = [];

    str = str.replace(/[ъь]+/g, '').replace(/й/g, 'i');

    for (let i = 0; i < str.length; ++i) {
        n_str.push(
            ru[str[i]]
            || ru[str[i].toLowerCase()] == undefined && str[i]
            || ru[str[i].toLowerCase()].toUpperCase()
        );
    }

    return n_str.join('');
}

function setLocaleStorage(project, name, value) {
    localStorage.setItem(project + '_' + name, JSON.stringify(value));
}

function getLocaleStorage(project, name) {
    return JSON.parse(localStorage.getItem(project + '_' + name));
}

function clearLocaleStorage(project, name) {
    localStorage.removeItem(project + '_' + name);
}

function isExistsLocaleStorage(project, name) {
    return getLocaleStorage(project, name) !== null;
}

function copyToClipboard(text) {
    if (navigator.clipboard) {
        navigator.clipboard.writeText(text);
    } else {
        const $temp = $("<input>");
        $("body").append($temp);
        $temp.val(text).select();
        document.execCommand("copy");
        $temp.remove();
    }
}

//

function options(data, method = 'POST') {
    return {
        method: method,
        body: JSON.stringify(data),
        credentials: 'same-origin',
        headers: _headers,
    };
}

function showError(id, message) {
    $('#' + id).text(message).show();
}

function hideError(id) {
    $('#' + id).hide();
}
