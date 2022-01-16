//slideshow of servives

var item = 1;
var di = 1;
function slidshow() {
  if (item < 9) {
    item++;
    last = item - 1;
    document.getElementById("item" + item).classList.add("active");
    document.getElementById("item" + last).classList.remove("active");
  } else {
    document.getElementById("item1").classList.add("active");
    document.getElementById("item9").classList.remove("active");
    item = 1;
  }

  if (di < 9) {
    di++;
    lastdi = di - 1;
    document.getElementById("dic" + di).classList.add("active");
    document.getElementById("dic" + lastdi).classList.remove("active");
  } else {
    document.getElementById("dic1").classList.add("active");
    document.getElementById("dic9").classList.remove("active");
  }

  setTimeout(function () {
    slidshow();
  }, 5000);
}

//hover on title's paralex
