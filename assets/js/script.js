//collapsible

var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
//Top page
$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {
      $('#return-to-top').fadeIn(200);
  } else {
      $('#return-to-top').fadeOut(200);
  }
});
$('#return-to-top').click(function() {
  $('body,html').animate({
      scrollTop : 0
  }, 500);
});

 