$(document).on('change', 'form', function(){    // 2nd (B)
    let argument_1 = $('form #argument1').val();
    let aritmetic_operation = $('form #aritmetic_operation').val();
    let argument_2 = $('form #argument2').val();
    if(argument_1 && argument_2 && aritmetic_operation)
    {
        $.ajax({
            url: '/math/'+argument_1+'/'+aritmetic_operation+'/'+argument_2,
            method: 'POST'
        }).then(function(data) {
            $('#answer').text(data.answer);
        });
    }
    else
    {
        $('#answer').text("");
    }
});