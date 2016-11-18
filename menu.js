/**
* @Author: Julien SOBRITZ
* @Date:   2016-11-17T09:07:36+01:00
* @Email:  julien.s@codeur.online
* @Filename: test.js
* @Last modified by:   Julien SOBRITZ
* @Last modified time: 2016-11-18T11:50:19+01:00
*/

var data = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

function redecale(arg) {
  var item = document.getElementById("t" + arg);
  var item2 = document.getElementById("t" + (arg - 1)).getElementsByTagName("ul");
  var i = 0;

if (arg != 17)
  item.style.marginTop = 0;
  while (i < item2.length)
    item2[i++].style.display = "none";
}

function decale(arg, nombre) {
  var value = 20;
  var item = document.getElementById("t" + arg);
  var item2 = document.getElementById("t" + (arg - 1)).getElementsByTagName("ul");
  var i = 0;

  value = value * nombre;
  if (arg != 17)
    item.style.marginTop = value;
  while (i < item2.length)
  {
    item2[i++].style.display = "block";
  }
}

function move(arg, nombre) {
  if (data[arg] == 0) {
    data[arg] = 1;
    decale(arg, nombre);
  }
  else {
    data[arg] = 0;
    redecale(arg);
  }
}
