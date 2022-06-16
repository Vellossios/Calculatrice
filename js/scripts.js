// ADDITION

$('.Add').on('submit', function(e)
{
    e.preventDefault();

    let add1 = $('.Add1').val()
    let add2 = $('.Add2').val()

    let resultadd = parseFloat(add1) + parseFloat(add2)

    $('.resultadd').html(add1 + ' + ' + add2 + ' = ' + resultadd)
})


// MULTIPLICATION

$('.Mul').on('submit', function(e)
{
    e.preventDefault();

    let mul1 = $('.Mul1').val()
    let mul2 = $('.Mul2').val()

    let resultmul = parseFloat(mul1) * parseFloat(mul2)

    $('.resultmul').html(mul1 + ' x ' + mul2 + ' = ' + resultmul)
})


// SOUSTRACTION

$('.Sou').on('submit', function(e)
{
    e.preventDefault();

    let sou1 = $('.Sou1').val()
    let sou2 = $('.Sou2').val()

    let resultsou = parseFloat(sou1) - parseFloat(sou2)

    $('.resultsou').html(sou1 + ' - ' + sou2 + ' = ' + resultsou)
})


// DIVISION

$('.Div').on('submit', function(e)
{
    e.preventDefault();

    let div1 = $('.Div1').val()
    let div2 = $('.Div2').val()

    let resultdiv = parseFloat(div1) / parseFloat(div2)

    $('.resultdiv').html(div1 + ' / ' + div2 + ' = ' + resultdiv)
})