$(function () {
    $("#data").mask("99/99/9999", {placeholder: "99/99/9999"});
    $("#ano").mask("9999", {placeholder: "9999"});
    $("#rg").mask("99.999.999-9", {placeholder: "99.999.999-9"});
    $("#cpf").mask("999.999.999-99", {placeholder: "999.999.999-99"});
    $("#telefone").mask("(99) 9999-9999", {placeholder: "(99) 9999-9999"});
    $("#cnpj").mask("99.999.999/9999-99", {placeholder: "99.999.999/9999-99"});
    $("#valor").maskMoney({showSymbol: true, symbol: "R$", decimal: ",", thousands: "."});
});