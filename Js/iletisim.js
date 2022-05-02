function isItEmpty() {
    var a = document.forms["Form"]["isim"].value;
    var b = document.forms["Form"]["soyisim"].value;
    var c = document.forms["Form"]["telefon"].value;
    var d = document.forms["Form"]["cinsiyet"].value;
    var e = document.forms["Form"]["amaç[]"].value;
    var f = document.forms["Form"]["konu"].value;
    var g = document.forms["Form"]["kime"].value;
    var h = document.forms["Form"]["mesaj"].value;
    if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "" , e == null || e == "" , f == null || f == "" , g == null || g == "" , h == null || h == "") {
      alert("Tüm alanlar dolu olmalıdır!");
      return false;
    }
    return true;
  }