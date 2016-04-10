function validaForm() {

    $('#send').attr('disabled', 'disabled');

    var stats = true;
    var errorText = [];

    if ($('#year_start').val() > $('#year_final').val()) {
        errorText.push('ANO DE ENTRADA DEVE SER MENOR QUE O ANO FINAL!');
        stats = false;
    }

    if ($('#month_start').val() === '' || $('#month_start').val() === '0') {
        errorText.push('SELECIONE O MES DE ENTRADA!');
        stats = false;
    }

    if ($('#year_start').val().length !== 4) {
        errorText.push('PREENCHA O ANO DE ENTRADA CORRETAMENTE!');
        stats = false;
    }

    if ($('#month_final').val() === '' || $('#month_final').val() === '0') {
        errorText.push('SELECIONE O MES DE SAIDA!');
        stats = false;
    }

    if ($('#year_final').val().length !== 4) {
        errorText.push('PREENCHA O ANO DE SAIDA CORRETAMENTE!');
        stats = false;
    }

    if (errorText.length > 0) {

        var erro = '';

        for (var i = 0; i <= 2; i++) {
            if (errorText[i] !== undefined) {
                erro += errorText[i] + "  ";
            }
        }

        alert(erro);
        $("#send").removeAttr("disabled", "disabled");

    } else {
        $('#send').val('ENVIANDO...');
    }
    return stats;
}