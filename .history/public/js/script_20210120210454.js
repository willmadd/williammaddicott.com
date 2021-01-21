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

    const onSubmit = (token) {
      // document.getElementById("demo-form").submit();
      console.log(token);
      console.log('ggkkggk');
    }

    // $('#contact__form').on('submit', (e)=>{
    //     e.preventDefault();
    //     axios({
    //         method: 'post',
    //         url: '/api/form',
    //         data: {
    //           name: $('#name').val(),
    //           email: $('#email').val(),
    //           message: $('#message').val()
    //         }
    //       })
    //       .then((response) => {
    //         console.log(response);
    //       }, (error) => {
    //         console.log(error);
    //       });
          
    // })
});