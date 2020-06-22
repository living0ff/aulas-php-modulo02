'use scrict'

function validar() {

    var obj = {
        nome: document.getElementById('txtNome').value,
        email: document.getElementById('txtEmail').value,
        telefone: document.getElementById('txtTel').value,
        tipocontato: document.getElementById('tipoContato').value,
        infousuario: document.getElementById('txtMensagem').value
    }

    let filtroemail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    let filtrotel = /^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/;

    if (obj.nome.length < 3 || obj.nome.length > 50) {
        alert('Digite um nome válido. Minimo de 3 e máximo de 50 caracteres.');
        return false;
    } if (!filtroemail.test(obj.email)) {
        alert('Digite um email válido.');
        return false;
    } if (!filtrotel.test(obj.telefone)) {
        alert('Digite um telefone válido.');
        return false;
    } if (obj.tipocontato < 1 || obj.tipocontato > 4) {
        alert('Informe um tipo de contato válido.');
        return false;
    }
    if (obj.infousuario.length < 10) {
        alert('Digite uma mensagem de ao menos 10 caracteres.')
        return false
    }
}
