function getir(value)
{
  $.ajax({
 type: 'post',
 url: 'bilgigetir.php',
 data: {
  data:value
 },
 success: function (response) {

   var degerler=response.split("/");
  document.getElementById('soyad').value=degerler[0];
  document.getElementById('unvan').value=degerler[1];
  document.getElementById('eposta').value=degerler[2];
  document.getElementById('username').value=degerler[3];
  document.getElementById('password').value=degerler[4];

}
 });
}


function submitForm(action) {
    var form = document.getElementById('guncelle');
    form.action = action;
    form.submit();
  }
