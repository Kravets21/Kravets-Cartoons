$('#auth_user').click(function ()
{
    let name = $('#email').val();
    let password = $('#password').val();
    

    $.ajax({

    url: 'ajax/auth.php',
    type: "POST",
    cache: false,
    data: {'name': name , 'password': password},
    dataType: 'html',
    success: function (data) {
      data = data.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');
        if(data == 'done')
        {
            document.location.reload(true);
            $('#errorBlock2').hide();
        }
        else
        {
            $('#errorBlock2').show();
            $('#errorBlock2').text(data);
        }
    }

        });
});

  $('#sec_btn').click(function(){
      $(this).next().toggleClass('open');
  });


  $('#exit_btn').click(function ()
  {

      $.ajax({

          url: 'ajax/exit.php',
          type: "post",
          cache: false,
          data: {},
          dataType: 'html',
          success: function (data) {
              document.location.reload(true);
          }

      });
  });

  $(window).scroll(function() {
    let height = $(window).scrollTop();
    if (height > 900) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "fast");
        return false;
    });

});


  $('.slider').slick({
    dots: false,
    infinite: true,
    speed: 700,
    slidesToShow: 5,
    slidesToScroll: 4,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });


  $('.accordion').click(function(){
      $('.accordion-content').toggleClass('open');
  });
  
  $('.settings-tab-btn').click(function(){
      $('.settings-tab').toggleClass('open');
      $('.profile-tab').toggleClass('open');
  });
  
  $('.profile-tab-btn').click(function(){
      $('.settings-tab').toggleClass('open');
      $('.profile-tab').toggleClass('open');
  });

    $('.show-more_btn').on('click', function() {
    $.ajax({
      url: 'ajax/show-more.php',
      success: function(data) {
	   document.getElementById('for_show_more').innerHTML = data;
      }
     });
    });
  