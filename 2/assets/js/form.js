var message_box = {
    open : function(message){
        var sb_width = window.innerWidth - document.body.offsetWidth;
        $("body").css({"padding-right":sb_width+"px"});
        $("#modal_message").css({"display":"block"});
        $("#modal_message .text").text(message);
        $("#modal_message button").unbind('click').click(message_box.close);
        $("body").addClass("noscroll");
    },
    close : function(){
        $("body").removeClass("noscroll");
        $("#modal_message").css("display","none");
        $("body").css({"padding-right":0+"px"});
    }
}

;(function($){
    var form = $("#order_form form");

    // Init Error UIs.
    form.find(".form-input").each(function(){
        var input = $(this).children('input');
        var text = input.attr('data-error');
        $(this).append('<div class="label"> <span class="text">'+text+'</span> </div>');
    });
    // Validation functions.
    function checkEmail(input){return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test($.trim(input));}
    function checkPhone(input){return /^[+\-\(\)\s0-9]+$/.test($.trim(input));}
    function checkName(input){return /[^0-9]/.test($.trim(input));}
    function checkText(input){return ($.trim(input.length) > 2);}

    form.submit(function(e){
        e.preventDefault();
        var error = 0;
        var form = $(this);
        var data = form.serialize();
        var urls = {
            "en": "https://script.google.com/macros/s/AKfycbyIg57MoqgCvXOq4ZmoyKEb45rzs-JPPYjcvqKvH2GRWuANe71L/exec",
            "fr": "https://script.google.com/macros/s/AKfycbwzwatitW1Y-eI2ZPASUPj1x_6fKz3mAUq3KxRkKr8dDZCt1JI/exec",
            "de": "https://script.google.com/macros/s/AKfycbzHJOamgdRJO752bFVoFAWr_LzEZ04xNt7nvaH_VM8c00Prpxk/exec",
            "nl": "https://script.google.com/macros/s/AKfycby6-44SDZVUAC_dqkd-lZaB7lcKGK12QlRTYZGpGsmfbsqBw9M/exec",
            "dk": "https://script.google.com/macros/s/AKfycbwQBvPbtdJ0Zyy2eiOws69i4ngpZa1bIyNF3x6iWybAczoV5wc/exec",
        }

        // Validate Inputs
        form.find('.form-input input').each(function(){
            var data_type = $(this).attr('data-required');
            var parent = $(this).parents('.form-input');
            if(data_type){
                var valid = false;
                if(data_type === "text"){valid = checkText($(this).val());}
                if(data_type === "name"){valid = checkName($(this).val());}
                if(data_type === "email"){valid = checkEmail($(this).val());}
                if(data_type === "phone"){valid = checkPhone($(this).val());}
                if(valid){
                    $(this).parents('.form-input').removeClass('error');
                }else{
                    error++;
                    $(this).parents('.form-input').addClass('error');
                }
            }
        });

        function working(){
            form.find('input').prop("disabled", true);
            form.find('button[type="submit"]').prop("disabled", true);
        }
        function done(){
            form.find('input').prop("disabled", false);
            form.find('button[type="submit"]').prop("disabled", false);
            form.get(0).reset();
            message_box.open(form.attr('data-success'));
        }

        if(error == 0){
            working();
            $.ajax({
                method : "post",
                url : "http://lat.com.es/new_era/mail.php",
                data : data,
                success : function processResponse(response){
                    $.ajax({
                        method : "post",
                        url : urls[$('input[name="lang"]').val()],
                        data : data,
                        success : function processResponse(response){
                            console.log('success');
                        }
                    })
                    setTimeout(done,1000);
                }
            });
        }
    });
}(jQuery));
