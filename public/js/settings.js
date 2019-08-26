$.ajaxSetup({
  headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
//update  studio
$("#update-studio").click(function(e){
    e.preventDefault();
    if(!$(this).hasClass('loading') && !$(this).hasClass('disabled')){
      btn = $(this);
      btn.addClass('loading');

      $('.has-error').removeClass('alert alert-danger help-block p-width u-mt-xsmall u-p-xsmall');
      $('.help-block').remove();

      var formdata=new FormData();
      formdata.append("studio_id",$("#studio_id").val());
      formdata.append("studio_name",$("#studio_name").val());
      formdata.append("studio_short_name",$("#studio_short_name").val());
      formdata.append("studio_phone",$("#studio_phone").val());
      formdata.append("studio_email",$("#studio_email").val());
      formdata.append("studio_time_out",$("#studio_time_out").val());
      formdata.append("studio_website",$("#studio_website").val());
      formdata.append("studio_address_line1",$("#studio_address_line1").val());
      formdata.append("studio_address_line2",$("#studio_address_line2").val());
      formdata.append("studio_state",$("#studio_state").val());
      formdata.append("studio_city",$("#studio_city").val());
      formdata.append("studio_zip_code",$("#studio_zip_code").val());
      formdata.append("studio_logo",$("#studio_logo").get(0).files[0]);
      
      $.ajax({
         type:'POST',
         dataType:"json",
         url:'settings/update',
         contentType: false,
         processData: false,
         data: formdata,
         success:function(data){
            btn.removeClass('loading');

            if(data.errors){
              $.each(data.errors, function(index, error){
                $('#form_'+index).addClass('has-error');
                
                $('#form_'+index).append('<div class="alert alert-danger help-block p-width u-mt-xsmall u-p-xsmall">'+error+'</div>');
              });
            } else if(data.status == "error" || data.status == "warning"){
              // show message
              console.log(data.status, data.message);
            } else {
              // show message
              var studio=data.studio;
               $("#studio_id").val(studio["studio_id"]);
              $("#studio_name").val(studio["studio_name"]);
              $("#studio_short_name").val(studio["studio_short_name"]);
              $("#studio_email").val(studio["studio_email"]);
              $("#studio_phone").val(studio["studio_phone"]);
              $("#studio_time_out").val(studio["studio_time_out"]);
              $("#studio_website").val(studio["studio_website"]);
              $("#studio_address_line1").val(studio["studio_address_line1"]);
              $("#studio_address_line2").val(studio["studio_address_line2"]);
              $("#studio_state").val(studio["studio_state"]);
              $("#studio_city").val(studio["studio_city"]);
              $("#studio_zip_code").val(studio["studio_zip_code"]);
              
              if(studio["studio_logo"]!=null){
                $("#studio_logo").attr("src", "uploads/photo/"+studio["studio_logo"]);
                
              }else{
                $("#studio_logo").attr("src", "img/studio.jpg");
                
              }
             
              
              console.log(data.status, data.message);
            }
         }
      });
    }
}); //end update  studio


// upload user photo
//function upload photo
function ekUpload() {
   function Init() {

      console.log("Upload Initialised");

      var fileSelect = document.getElementById('studio_logo'),
         fileDrag = document.getElementById('file-drag'),
         submitButton = document.getElementById('submit-button');

      fileSelect.addEventListener('change', fileSelectHandler, false);

      // Is XHR2 available?
      var xhr = new XMLHttpRequest();
      if (xhr.upload) {
         // File Drop
         fileDrag.addEventListener('dragover', fileDragHover, false);
         fileDrag.addEventListener('dragleave', fileDragHover, false);
         fileDrag.addEventListener('drop', fileSelectHandler, false);
      }
   }

   function fileDragHover(e) {
      var fileDrag = document.getElementById('file-drag');

      e.stopPropagation();
      e.preventDefault();

      fileDrag.className = (e.type === 'dragover' ? 'hover' : ' file-upload');
   }

   function fileSelectHandler(e) {
      // Fetch FileList object
      var files = e.target.files || e.dataTransfer.files;

      // Cancel event and hover styling
      fileDragHover(e);

      // Process all File objects
      for (var i = 0, f; f = files[i]; i++) {
         parseFile(f);
         uploadFile(f);
      }
   }

   // Output
   function output(msg) {
      // Response
      var m = document.getElementById('messages');
      m.innerHTML = msg;
   }

   function parseFile(file) {

      console.log(file.name);
      // output(
      //      '<strong>' + encodeURI(file.name) + '</strong>'
      // );

      // var fileType = file.type;
      // console.log(fileType);
      var imageName = file.name;

      var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
      if (isGood) {
         document.getElementById('start').classList.add("hidden");
         document.getElementById('response').classList.remove("hidden");
         document.getElementById('notimage').classList.add("hidden");
         // Thumbnail Preview
         document.getElementById('studio-logo').classList.remove("hidden");
         document.getElementById('studio-logo').src = URL.createObjectURL(file);
      }
      else {
         document.getElementById('studio-logo').classList.add("hidden");
         document.getElementById('notimage').classList.remove("hidden");
         document.getElementById('start').classList.remove("hidden");
         document.getElementById('response').classList.add("hidden");
         document.getElementById("file-upload-form").reset();
      }
   }
/*
   function setProgressMaxValue(e) {
      var pBar = document.getElementById('file-progress');

      if (e.lengthComputable) {
         pBar.max = e.total;
      }
   }

   function updateFileProgress(e) {
      var pBar = document.getElementById('file-progress');

      if (e.lengthComputable) {
         pBar.value = e.loaded;
      }
   }*/

   function uploadFile(file) {

      var xhr = new XMLHttpRequest(),
         fileInput = document.getElementById('class-roster-file'),
        // pBar = document.getElementById('file-progress'),
         fileSizeLimit = 1024; // In MB
      if (xhr.upload) {
         // Check if file is less than x MB
         if (file.size <= fileSizeLimit * 1024 * 1024) {
          // Progress bar
           // pBar.style.display = 'inline';
           /* xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
          xhr.upload.addEventListener('progress', updateFileProgress, false);*/

          // File received / failed
          xhr.onreadystatechange = function (e) {
             if (xhr.readyState == 4) {
                // Everything is good!

                // progress.className = (xhr.status == 200 ? "success" : "failure");
                // document.location.reload(true);
             }
          };

          // Start upload
          /*xhr.open('POST', document.getElementById('file-upload-form').action, true);
          xhr.setRequestHeader('X-File-Name', file.name);
          xhr.setRequestHeader('X-File-Size', file.size);
          xhr.setRequestHeader('Content-Type', 'multipart/form-data');
          xhr.send(file);*/
         } else {
          output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
         }
      }
   }

   // Check for the various File API support.
   if (window.File && window.FileList && window.FileReader) {
      Init();
   } else {
      document.getElementById('file-drag').style.display = 'none';
   }
}
ekUpload();

// delete avatar
$('#delete_avatar').on('click', function(){
  $('#user-photo').attr('src','img/default.jpg');
  }
);