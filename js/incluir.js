function validaForm() {

    $('#salvar').attr('disabled', 'disabled');

    var stats = true;
    var errorText = [];
    checked = $('input[name=radio]:checked', '#myForm').val();

    if (!checked) {
        errorText.push('SELECIONE UMA DESCRICAO OU A DIGITE-A');
        stats = false;
    }

    if (checked == 'Nova') {
        if ($('#descricao').val() == '' || $('#descricao').val() === '0') {
            errorText.push('DIGITE UMA DESCRICAO NOVA');
            stats = false;
        }
    } else {
        if ($('#descricao_existente').val() === '0') {
            errorText.push('SELECIONE A DESCRICAO EXISTENTE');
            stats = false;
        }
    }
    if ($('#ano').val() === '' || $('#ano').val() === '0' || $('#ano').val().length !== 4) {
        errorText.push('PREENCHA O ANO');
        stats = false;
    }

    if ($('#valor').val() === '' || $('#valor').val() === '0') {
        errorText.push('PREENCHA O VALOR');
        stats = false;
    }

    if (errorText.length > 0) {

        var erro = '';

        for (var i = 0; i <= 2; i++) {
            if (errorText[i] !== undefined) {
                erro += errorText[i] + ' , ';
            }
        }

        alert(erro);
        $("#salvar").removeAttr("disabled", "disabled");

    } else {
        $('#salvar').val('SALVANDO...');
    }

    return stats;
}

$('#myForm input').on('change', function () {
    checked = $('input[name=radio]:checked', '#myForm').val();
    if (checked == 'Nova') {
        $('#descricao_existente').attr('disabled', 'disabled');
        $('#descricao').removeAttr('disabled', 'disabled');
    } else {
        $('#descricao_existente').removeAttr('disabled', 'disabled');
        $('#descricao').attr('disabled', 'disabled');
    }
});