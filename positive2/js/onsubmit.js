
    function submit_form(callback){
      var errors = 0;
      var fields = document.querySelectorAll('.et_pb_contact_form input');
      fields.forEach(function(field){
        if (jQuery.trim(field.value)==""){
          errors ++;
        }
      });
      if (errors > 0){
        return false;
      }else{
        callback();
      }
    }

    function send_data(e){
      var form = jQuery('form')[1];
      var button = document.querySelector('.et_pb_contact_submit');
      var form_data = jQuery('form').serialize();
      
      //loading state
      button.textContent = "wacht";
      button.disabled = true;
      form.style.opacity = "0.4";

      function getLocaleDateTime(){
          var now  = new Date();
          var YYYY = now.getFullYear();
          var MM   = String(now.getMonth()+1).length > 1? now.getMonth()+1 : '0'+String(now.getMonth()+1);
          var DD   = String(now.getDate()).length > 1? now.getDate() : '0'+String(now.getDate());
          var hh   = String(now.getHours()).length > 1? now.getHours() : '0'+String(now.getHours());
          var mm   = String(now.getMinutes()).length > 1? now.getMinutes() : '0'+String(now.getMinutes());
          var ss   = String(now.getSeconds()).length > 1? now.getSeconds() : '0'+String(now.getSeconds());
          var tz   = now.getTimezoneOffset()/60;
          var sign = "";

          if(tz < 0) sign = '+'; if(tz > 0) sign = '-';
          tz = String(Math.abs(tz)).length > 1? sign+Math.abs(tz)+':00' : sign+'0'+Math.abs(tz)+':00';

          var format = YYYY+'-'+MM+'-'+DD+' '+hh+':'+mm+':'+ss+' UTC'+tz;

          return format;
      }
      jQuery.ajax({
        method: 'GET',
        url: 'https://script.google.com/macros/s/AKfycbw9pbSDI5mNCdSkjN4UeraxaTA2qqmRFTkjrosmC_MAzC3HVqcN/exec',
        data: form_data+'&date='+getLocaleDateTime(),
        error: function(jqXHR,textStatus,errorThrown){
            gtag_report_conversion('https://dianeticsboek.nl/thank-you-extract/');
        },
        success: function(response) {
            gtag_report_conversion('https://dianeticsboek.nl/thank-you-extract/');
        }
    });
    }