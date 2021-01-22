    $('#reg_user').click(function () {
    var name = $('#email2').val();
    var password = $('#password2').val();
    
    $.ajax({
    url: 'ajax/reg.php',
    type: "POST",
    cache: false,
    data: {'name': name , 'password': password},
    dataType: 'html',
    success: function(data) {
      data = data.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');

        if(data == 'Вы успешно зарегестрировались!') {
          $('#successBlock').show();
          $('#successBlock').text(data);
          $('#errorBlock').hide();

        }
        else{
          $('#successBlock').hide();
          $('#errorBlock').show();
          $('#errorBlock').text(data);
        }

            
        }

        });
});


