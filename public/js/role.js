// get all users (team)
function all_roles(role_id, role_name, role_description, role_date_added)
{
  $("#roles-list").append('<div class="c-pipeline__card u-width-100">\
                            <div class="o-media__body u-p-small d-flex">\
                              <div class="o-media__body">\
                                <h4>'+role_name+'</h4>\
                                <p class="c-pipeline__card-subtitle u-mb-small u-mt-xsmall">'+role_description+'</p>\
                                <p class="c-pipeline__card-subtitle">'+role_date_added+'</p>\
                              </div>\
                              \
                              <div class="o-media__body u-m-auto">\
                                  <div class="dropdown u-text-right u-pr-small">\
                                    <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">\
                                    <i class="feather icon-more-horizontal" style="color: #768093de;"></i>\
                                    </span>\
                                    <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1" x-placement="bottom-end" style="position: absolute; transform: translate3d(-130px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">\
                                      <a href="#" class="btnSelect c-dropdown__item dropdown-item">Permissions</a>\
                                      <a href="#" class="btnSelect c-dropdown__item dropdown-item" data-toggle="modal" data-target="#modal2" roleid="'+role_id+'" action="edit">Edit</a>\
                                      <a href="#" class="btnSelect c-dropdown__item dropdown-item" data-toggle="modal" data-target="#modal3" roleid="'+role_id+'" action="delete">Delete</a>\
                                    </div>\
                                  </div>\
                              </div>\
                            </div>\
                          </div>');
}

///////////////////////////////////

//get info of selected role studio in modal and update or delete
$("#roles-list").on("click",".btnSelect",function(e){
    e.preventDefault();
    var action = $(this).attr('action');
    var roleid = $(this).attr('roleid');

    $.ajax({
      type : "POST",
      dataType:"json",
      url: 'role/show',
      data: {role_id:roleid,action:action},
      async: true,
      success:function(data){
        if(data.errors){
          $.each(data.errors, function(index, error){
            $('#form_'+index).addClass('has-error');
            $('#form_'+index).append('<span class="help-block">'+error+'</span>');
          });
        } else if(data.status == "error" || data.status == "warning"){
          // show message
          console.log(data.status, data.message);
        } else {  

          if(action == 'edit'){
            var role=data.role;

            //put role information in inputs
            $("#update-role").attr("roleid",role["role_id"]);
            $("#role_name2").val(role["role_name"]);
            $("#role_description2").val(role["role_description"]);

            /* update role */
            $('#modal2').on('click','#update-role',function(e){
                e.preventDefault();
                if(!$(this).hasClass('loading') && !$(this).hasClass('disabled')){
                    btn = $(this);
                    btn.addClass('loading');
                    var role_id = btn.attr("roleid");
                    $('.alert.alert-danger').removeClass('alert alert-danger');
                    $('.help-block').remove();

                    var formData=new FormData();
                    formData.append("role_name",$("#role_name2").val());
                    formData.append("role_id",role_id);
                    formData.append("role_description",$("#role_description2").val());

                    $.ajax({
                        type : "POST",
                        dataType:"json",
                        url :  'role/update',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data){
                            btn.removeClass('loading');

                            if(data.errors){
                                $.each(data.errors, function(index, error){
                                    $('#form2_'+index).append('<div class="alert alert-danger help-block p-width u-mt-xsmall u-p-xsmall">'+error+'</div>');
                                    $('#'+index+'2').addClass('c-input--danger');
                                });
                            } else if(data.status == "error" || data.status == "warning"){
                              $('#modal2 .o-line').before('<div class="alert alert-danger help-block col-xl-12 fc-left">'+data.message+'</div>');

                              setTimeout(function() {
                                $('.help-block').remove();
                              }, 5000);//fin setimeout
                                // show message
                                console.log(data.status, data.message);
                            } else {
                              $('#modal2 .o-line').before('<div class="alert alert-success help-block col-xl-12 fc-left">'+data.message+'</div>');

                              $("#roles-list").empty();
                              $.each(data.roles, function(){
                                var roles=$(this);
                                var role=roles[0];
                                all_roles(role["role_id"],role["role_name"], role["role_description"],role["role_date_added"]);
                              });

                              setTimeout(function() { 
                                $("#modal2 .c-modal__close").trigger( "click" );
                                $('.help-block').remove();
                              }, 5000);//fin setimeout
                              // show message
                              console.log(data.status, data.message);
                            }
                        }
                    });
                }
            });
          }

          else if(action== 'delete'){
            var role=data.role;
            $(".role_name").text(role["role_name"]);
            $("#delete-role").attr("roleid",role["role_id"]);

            /* delete role */
            $('#modal3').on('click','#delete-role',function(e){
              e.preventDefault();

              if(!$(this).hasClass('loading') && !$(this).hasClass('disabled')){
                btn = $(this);
                btn.addClass('loading');
                var role_id = btn.attr("roleid");
                
                var formdata = new FormData();
                formdata.append("role_id", role_id);

                $.ajax({
                    type : "POST",
                    dataType:"json",
                    url : 'role/delete',
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        btn.removeClass('loading');

                        if(data.status == "error" || data.status == "warning"){
                          $('#modal3 .o-line').before('<div class="alert alert-danger help-block u-m-small u-p-xsmall">'+data.message+'</div>');

                          setTimeout(function() {
                            $('.help-block').remove();
                          }, 5000);//fin setimeout
                            // show message
                            console.log(data.status, data.message);
                        } else {
                          $('#modal3 .o-line').before('<div class="alert alert-success help-block u-m-small u-p-xsmall">'+data.message+'</div>');

                          $("#roles-list").empty();
                          $.each(data.roles, function(){
                            var roles=$(this);
                            var role=roles[0];
                            all_roles(role["role_id"],role["role_name"], role["role_description"],role["role_date_added"]);
                          });

                          setTimeout(function() { 
                            $("#modal3 .c-modal__close").trigger( "click" );
                            $('.help-block').remove();
                          }, 5000);//fin setimeout
                          // show message
                          console.log(data.status, data.message);
                        }
                    }
                });
              }
            });

          }
        }
      }
    });    
});
// end get info of selected roles studio in modal and update or delete

// add role studio
$("#new-role").on("click",function(e){
  
  $("#role_name").val("");
  $("#role_description").val("");

  $("#add-role").on("click",function(e){
      e.preventDefault();
      if(!$(this).hasClass('loading') && !$(this).hasClass('disabled')){
        btn = $(this);
        btn.addClass('loading');

        $('.alert.alert-danger').removeClass('alert alert-danger');
        $('.help-block').remove();

        var formData=new FormData();
        formData.append("role_name",$("#role_name").val());
        formData.append("role_description",$("#role_description").val());

        $.ajax({
          type : "POST",
          dataType:"json",
          url: 'role/save',
          cache:false,
          contentType: false,
          processData: false,
          data: formData,
          success:function(data){
            
            btn.removeClass('loading');

            if(data.errors){
              $.each(data.errors, function(index, error){
                $('#form_'+index).append('<div class="alert alert-danger help-block p-width u-mt-xsmall u-p-xsmall">'+error+'</div>');
                $('#'+index).addClass('c-input--danger');
              });
            } else if(data.status == "error" || data.status == "warning"){
              $('#modal1 .o-line').before('<div class="alert alert-danger help-block u-m-small u-p-xsmall">'+data.message+'</div>');

              setTimeout(function() {
                $('.help-block').remove();
              }, 5000);//fin setimeout
              // show message
              console.log(data.status, data.message);
            } else {
              $('#modal1 .o-line').before('<div class="alert alert-success help-block u-m-small u-p-xsmall">'+data.message+'</div>');

              $("#roles-list").empty();
              $.each(data.roles, function(){
                var roles=$(this);
                var role=roles[0];
                all_roles(role["role_id"],role["role_name"], role["role_description"],role["role_date_added"]);
              });

              setTimeout(function() { 
                $("#modal1 .c-modal__close").trigger( "click" );
                $('.help-block').remove();
              }, 5000);//fin setimeout
              
              console.log(data.status, data.message);
            }
          }
        });
      }
  });
});
//end add role studio