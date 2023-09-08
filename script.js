function callwater() {
  var day = document.getElementById("day_input").value;
  var water = 5832;
  var deatil = "";

  for (var i = 1; i <= day; i++) {
    water = water / 3;
    deatil += "วันที่ :" + i + "น้ำคงเหลือ :" + water + " ลิตร " + "<br>";
  }
  document.getElementById("showDetailWater").innerHTML = deatil;
}
function square() {
    var input = document.getElementById("square").value;
  $.ajax({
      type: "POST",
      url: "func.php",
      data: {
          function: "generatePattern",
          inp: input,
        },
        success: function(data) {
          document.getElementById("showsquare").innerHTML = data;
    },
    error: function(err) {
        console.log("bad", err);
    },
});
}
