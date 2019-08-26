//setup csrf-token to header
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function(){
  $('.input-group-addon').click(function() {
    $('.input-group.date').datepicker({
        calendarWeeks: true,
        todayHighlight: true,
        autoclose: true
    });  
  });
});

var slider = document.getElementById("myRange");
//var output = document.getElementById("demo");
//output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
/*slider.oninput = function() {
  output.innerHTML = this.value;
}*/

//////////////////////////////
/*
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});*/
/*$(function() {
    //----- OPEN
    $('[data-popup-open]').on('click', function(e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
        e.preventDefault();
    });

    //----- CLOSE
    $('[data-popup-close]').on('click', function(e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

        e.preventDefault();
    });
});*/

function switch_form()
{
  if (document.getElementById("form1").style.display == 'none')
  {
       document.getElementById("form1").style.display = 'block';
       document.getElementById("form2").style.display = 'none';
  }
  else 
  {
       document.getElementById("form1").style.display = 'none';
       document.getElementById("form2").style.display = 'block';
  }
}
function showSearch()
{
  if (document.getElementById("search").style.display == 'none')
  {
       document.getElementById("search").style.display = 'block';
  }
  else 
  {
       document.getElementById("search").style.display = 'none';
  }
}
function suivant(div1,div2,div3){
  if (document.getElementById(div1).style.display == 'block')
  {
       document.getElementById(div1).style.display = 'none';
       document.getElementById(div2).style.display = 'block';
       document.getElementById(div3).style.display = 'none';
  }
  else if(document.getElementById(div2).style.display == 'block')
  {
       document.getElementById(div1).style.display = 'none';
       document.getElementById(div2).style.display = 'none';
       document.getElementById(div3).style.display = 'block';
  }
}
function precedent(div1,div2,div3){
  if (document.getElementById(div2).style.display == 'block')
  {
       document.getElementById(div1).style.display = 'block';
       document.getElementById(div2).style.display = 'none';
       document.getElementById(div3).style.display = 'none';
  }
  else if(document.getElementById(div3).style.display == 'block')
  {
       document.getElementById(div1).style.display = 'none';
       document.getElementById(div2).style.display = 'block';
       document.getElementById(div3).style.display = 'none';
  }
}
function afficher(){
  if (document.getElementById('switch-link').checked){
    document.getElementById("div-link").style.display = 'block'; 
  }
  else{
    document.getElementById("div-link").style.display = 'none';
  }
}


