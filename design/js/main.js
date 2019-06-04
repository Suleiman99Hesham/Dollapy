$(function(){
  console.log("amr");

  // Adjust Categories choice
  $(".filters li").on("click",function(){
    $(this).addClass("active").siblings().removeClass("active");
  })
  if($('div').hasClass('mixItUp')){
    var mixer = mixitup('.mixItUp');
  }

  // Adjust Team Hover
  $(".ourTeam .row >div").on({
    'mouseenter' : function(){$(this).addClass("active").siblings().removeClass("active")},
  })

  // Preview Image Before Update
  function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});

})
