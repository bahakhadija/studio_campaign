
//add new studio account
$("#new-studio").on("click",function(e){
  
  $("#studio_name").val("");
  $("#studio_website").val("");
  $("#user_full_name").val("");
  $("#user_email").val("");
  $("#user_phone").val("");
  $("#user_position").val("");

  $("#add-studio").click(function(e){

    e.preventDefault();
    if(!$(this).hasClass('loading') && !$(this).hasClass('disabled')){
      btn = $(this);
      btn.addClass('loading');

      $('.alert.alert-danger').removeClass('alert alert-danger');
      $('.help-block').remove();

      var formData=new FormData();
      formData.append("user_full_name",$("#user_full_name").val());
      formData.append("user_email",$("#user_email").val());
      formData.append("user_phone",$("#user_phone").val());
      formData.append("user_position",$("#user_position").val());
      formData.append("user_location",$("#user_location").val());
      formData.append("studio_name",$("#studio_name").val());
      formData.append("studio_website",$("#studio_website").val());

      $.ajax({
         type:'POST',
         dataType:"json",
         url:'studio/save',
         cache:false,
         contentType: false,
         processData: false,
         data:formData,
         success:function(data){
          btn.removeClass('loading');

          if(data.errors){
            var err="";
            $.each(data.errors, function(index, error){
              /*$('#form_'+index).append('<div class="alert alert-danger help-block p-width u-mt-xsmall u-p-xsmall">'+error+'</div>');
              $('#'+index).addClass('c-input--danger');*/
              err +=error + "<br/>";

            });
            $('#form1 p').after('<div class="alert alert-danger help-block u-m-small u-p-xsmall">'+err+'</div>');

          } else if(data.status == "error" || data.status == "warning"){

            $('#form1 p').after('<div class="alert alert-danger help-block u-m-small u-p-xsmall">'+data.message+'</div>');

            setTimeout(function() {
              $('.help-block').remove();
            }, 5000);//fin setimeout
            // show message
            console.log(data.status, data.message);
          }else{  
            $("#div1").hide();
            $("#div2").show();
            setTimeout(function() { 
              $("#modal1 .c-modal__close").trigger( "click" );
              $("#div1").show();
              $("#div2").hide();
            }, 5000);//fin setimeout
          }
         }
      });
    }
  }); 
});
//fin add studio account