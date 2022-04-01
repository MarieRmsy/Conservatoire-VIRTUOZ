
    $('#search').on('keyup', function() {
  
      if(query.length < 1) {
        $('.users>.user').slideDown();
        $('[data-filter=all]').addClass('selected');
      }
      else {
        $('.menu>.selected').removeClass('selected');
        $('.users>.user').each(function(){
          if($(this).attr('data-username').indexOf(query) !== 0)
          {
            $(this).slideUp();
          }
          else {
            $(this).slideDown();
          }
        });
        //$("[data-username^='"+$(this).val().toLowerCase()+"']").slideDown();
      }
    });

    $('.menu>li').on('click', function() {
      $('#search').val('');
      if (!$(this).hasClass('selected')) {
        $('.menu>.selected').removeClass('selected');
        $(this).addClass('selected');
        if($(this).attr('data-filter') == 'all'){
          $('.users>.user').slideDown();
        }
        else if($(this).attr('data-filter') == 'online'){
          $('[data-status=offline]').slideUp();
          $('[data-status=online]').slideDown();
        }
        else if($(this).attr('data-filter') == 'offline'){
          $('[data-status=online]').slideUp();
          $('[data-status=offline]').slideDown();
        }
      }
    });