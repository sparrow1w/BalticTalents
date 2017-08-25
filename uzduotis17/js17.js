
function onFormSubmit() {
  $('#login').hide();
  if (document.forms['forma']['password1'].value !== document.forms['forma']['password2'].value) {
    var elementas = document.getElementById('p1').innerHTML = "Slaptažodžiai nesutampa - pakartokite dar kartą!";
    elementas = document.getElementById('p1').className = "raudonas";
    return false;

  } if (document.forms['forma']['password1'].value == 0) {
    elementas = document.getElementById('p2').innerHTML = "Slaptažodis neįvestas";
    elementas = document.getElementById('p2').className = "geltonas";
    return false;
  } else {
    elementas = document.getElementById('p3').innerHTML = "Slaptažodis keičiamas";
    elementas = document.getElementById('p3').className = "zalias";
    elementas = document.getElementById('p4').className = "loader";
    return true;

  }

}