function onSubmit(token) {
  $("#recaptcha__input").val(token);
  $("#contact__form").submit();
}
$(document).ready(function () {

  $('.grecaptcha-badge').hide();

  $("#contact__form").on("submit", (event) => {
    event.preventDefault();
  });
  $("#contact__form").validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
      },
      email: {
        required: true,
        email: true,
      },
      message: {
        required: true,
        minlength: 2,
      },
    },
    messages: {
      name: {
        required: "Please enter your name",
      },
      email: {
        required: "Please enter your email",
        email: "Are you sure your email address is valid?",
      },
      message: {
        required: "Please enter a message",
      },
    },
    errorElement: "div",
    errorLabelContainer: ".error__text",
    submitHandler: function (form) {
      formAPI();
    },
  });
});

function formAPI(token) {
  $("#contact__form").hide();
  $("#loader").css("display", "flex");
  axios({
    method: "post",
    url: "/api/form",
    data: {
      name: $("#name").val(),
      email: $("#email").val(),
      message: $("#message").val(),
      token: $("#recaptcha__input").val(),
    },
  }).then(
    (response) => {
      console.log(response);
      const message = response.data.result;
      $("#loader").hide();
      $("#status__message").prepend(
        `<div class="success"><p>${message}</p></div>`
      );
      $("#status__message").show();
    },
    (error) => {
      console.log(error);
      $("#loader").hide();
      $("#contact__form").show();
      $("#form__error").show();
    }
  );
}

$(document).ready(function () {
  var $inputItem = $(".js-inputWrapper");
  $inputItem.length &&
    $inputItem.each(function () {
      var $this = $(this),
        $input = $this.find(".formRow--input"),
        placeholderTxt = $input.attr("placeholder"),
        $placeholder;

      $input.after(
        '<span class="placeholder">' + placeholderTxt + "</span>"
      ),
        $input.attr("placeholder", ""),
        ($placeholder = $this.find(".placeholder")),
        $input.val().length
          ? $this.addClass("active")
          : $this.removeClass("active"),
        $input
          .on("focusout", function () {
            $input.val().length
              ? $this.addClass("active")
              : $this.removeClass("active");
          })
          .on("focus", function () {
            $this.addClass("active");
          });
    });

  $(document).ready(function () {
    $(document).on("scroll", onScroll);
    $('a[href^="#"]').on("click", function (e) {
      e.preventDefault();
      $(document).off("scroll");
      $("a").each(function () {
        $(this).removeClass("active");
      });
      $(this).addClass("active");

      var target = this.hash,
        menu = target;
      $target = $(target);
      $("html, body")
        .stop()
        .animate(
          {
            scrollTop: $target.offset().top + 2,
          },
          500,
          "swing",
          function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
          }
        );
    });
  });

  function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $("nav a").each(function () {
      var currLink = $(this);
      var refElement = $(currLink.attr("href"));
      if (
        refElement.position().top <= scrollPos &&
        refElement.position().top + refElement.height() > scrollPos
      ) {
        $("#menu-center ul li a").removeClass("active");
        const title = $(this).html();
        currLink.addClass("active");
        $("#menu__title").html(title);
      } else {
        currLink.removeClass("active");
      }
    });
  }

  $("#phone__form").on("submit", (e) => {
    e.preventDefault();
    axios({
      method: "get",
      url: "/api/phone",
    }).then(
      (response) => {
        $("#phone__container").html(`<p>${response.data}</p>`);
        $("#phone__submit").prop("disabled", true);
      },
      (error) => {
        console.log(error);
        $("#phone__container").html(
          `<p class="warning">Could not fetch phone number, please try again</p>`
        );
      }
    );
  });
});

$(window).scroll(function() {
  checkRecaptcha();
});

const checkRecaptcha = () => {
  if($(window).scrollTop() + $(window).height() >= $(document).height()-200) {
    if( $('.grecaptcha-badge').is(":hidden")){
     $('.grecaptcha-badge').show();
    }
   }else{
     if($('.grecaptcha-badge').is(":visible")){
       $('.grecaptcha-badge').hide();
 
     }
   }
}


// $("#home__arrow").click(function() {
//   console.log('click');
//   $([document.documentElement, document.body]).animate({
//       scrollTop: $("#services").offset().top
//   }, 2000);
// });

const scrollButton = () => {
    $([document.documentElement, document.body]).animate({
      scrollTop: $("#about").offset().top - 56
  }, 1000);
  $('#scroll__button').hide();
}