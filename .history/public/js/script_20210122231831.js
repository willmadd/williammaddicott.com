function onSubmit(token) {
  submitForm(token);
}

function submitForm(token){
  $('#contact__form').hide();
  $('#loader').show();
  axios({
    method: 'post',
    url: '/api/form',
    data: {
      name: $('#name').val(),
      email: $('#email').val(),
      message: $('#message').val(),
      token,
    }
  })
  .then((response) => {
    console.log(response);
    $('#loader').hide();
    $('#status__message').prepend('<div id="new_div">Hello</div>');
    $('#status__message').show();
  }, (error) => {
    console.log(error);
  });
}

$( document ).ready(function() {
    console.log( "ready!" );
    var $inputItem = $(".js-inputWrapper");
    $inputItem.length && $inputItem.each(function() {
        var $this = $(this),
            $input = $this.find(".formRow--input"),
            placeholderTxt = $input.attr("placeholder"),
            $placeholder;
        
        $input.after('<span class="placeholder">' + placeholderTxt + "</span>"),
        $input.attr("placeholder", ""),
        $placeholder = $this.find(".placeholder"),
        
        $input.val().length ? $this.addClass("active") : $this.removeClass("active"),
            
        $input.on("focusout", function() {
            $input.val().length ? $this.addClass("active") : $this.removeClass("active");
        }).on("focus", function() {
            $this.addClass("active");
        });
    });

 // Basice Code keep it 
 $(document).ready(function () {
  $(document).on("scroll", onScroll);

  //smoothscroll
  $('a[href^="#"]').on('click', function (e) {
      e.preventDefault();
      $(document).off("scroll");

      $('a').each(function () {
          $(this).removeClass('active');
      })
      $(this).addClass('active');

      var target = this.hash,
          menu = target;
      $target = $(target);
      $('html, body').stop().animate({
          'scrollTop': $target.offset().top+2
      }, 500, 'swing', function () {
          window.location.hash = target;
          $(document).on("scroll", onScroll);
      });
  });
});

// Use Your Class or ID For Selection 

function onScroll(event){
  console.log('scoll');
  var scrollPos = $(document).scrollTop();
  $('#menu-center a').each(function () {
      var currLink = $(this);
      var refElement = $(currLink.attr("href"));
      if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
          $('#menu-center ul li a').removeClass("active");
          currLink.addClass("active");
      }
      else{
          currLink.removeClass("active");
      }
  });
}

    $('#contact__form').on('submit', (e)=>{
      // console.log('jquery submit');
      //   e.preventDefault();
        // axios({
        //     method: 'post',
        //     url: '/api/form',
        //     data: {
        //       name: $('#name').val(),
        //       email: $('#email').val(),
        //       message: $('#message').val()
        //     }
        //   })
        //   .then((response) => {
        //     console.log(response);
        //   }, (error) => {
        //     console.log(error);
        //   });
          
    })
});