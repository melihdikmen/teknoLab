function labbilgi(value)
{
   $.ajax({
 type: 'post',
 url: 'labbilgiget.php',
 data: {
  data:value
 },
 success: function (response) {


  document.getElementById('bilgi').value=response;


}
 });


}



function submitForm(action) {
    var form = document.getElementById('labform');
    form.action = action;
    form.submit();
  }
