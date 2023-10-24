function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

$(document).ready(function () {
  var list = $('ul li');
  if ($(list).has('ul')) {
    //console.log('child ul');
    list.find('ul').addClass('collapse');
  }

  $('li.expand').on("click", function (e) {
    if ($(this).find('ul').hasClass('collapse')) {
      $(this).find('ul').collapse('toggle');
      $(this).toggleClass('open');
    }
  });
});