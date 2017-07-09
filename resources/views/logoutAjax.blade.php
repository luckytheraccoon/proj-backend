<input value="{{ csrf_token() }}" id="yo">
LOGOUT!
<script>
var xhr = new XMLHttpRequest();
xhr.open("POST", 'http://myproject.app/logout', true);
xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
xhr.setRequestHeader("Content-type", "application/json charset=UTF-8");
xhr.setRequestHeader("X-CSRF-TOKEN", document.getElementById("yo").value);
xhr.send();
</script>