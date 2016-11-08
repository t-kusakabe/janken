window.addEventListener("load", function () {
  var form = document.getElementsByClassName('icon');

  for (var i = 0; i < form.length; i++) {
    form[i].addEventListener("click", function (current_form) {
      if (current_form.target.checked) {
        var hands = document.getElementsByClassName('hand');
        for (var i = 0; i < hands.length; i++) {
          hands[i].classList.remove('emphasis');
        }
        document.getElementById(current_form.target.value).classList.add("emphasis");
      }
    })
  }
});
