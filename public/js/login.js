

//verify email and password of login
$("#login").on("click",function(e){
    e.preventDefault();
    if(!$(this).hasClass('loading') && !$(this).hasClass('disabled')){
      btn = $(this);
      btn.addClass('loading');

      $('.alert.alert-danger').removeClass('alert alert-danger');
      $('.c-input--danger').removeClass('c-input--danger');
      $('.help-block').remove();

      var formData=new FormData();
      formData.append("user_email",$("#user_email").val());
      formData.append("user_password",$("#user_password").val());

      $.ajax({
         type:'POST',
         dataType: 'json',
         url:'postlogin',
         cache:false,
         contentType: false,
         processData: false,
         data: formData,
         success:function(data){

          btn.removeClass('loading');

          if(data.errors){
            $.each(data.errors, function(index, error){
              $('#form_'+index).append('<div class="alert alert-danger help-block p-width u-mt-xsmall u-p-xsmall">'+error+'</div>');
              $('#'+index).addClass('c-input--danger')
            });
            

          } else if(data.status == "error" || data.status == "warning"){

            $('#user_email').before('<div class="alert alert-danger help-block">'+data.message+'</div>');

            setTimeout(function() {
              $('.help-block').remove();
            }, 5000);//fin setimeout
            // show message
            console.log(data.status, data.message);
          }
          else{
            console.log(data.success);
            window.location = "home";
          }
         }
      });
    }
});