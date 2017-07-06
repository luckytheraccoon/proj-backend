<input value="{{ csrf_token() }}" id="yo">
LOGIN!
<script>
var xhr = new XMLHttpRequest();
xhr.open("POST", 'http://homestead.app/login', true);
xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
xhr.setRequestHeader("Content-type", "application/json charset=UTF-8");
xhr.setRequestHeader("X-CSRF-TOKEN", document.getElementById("yo").value);
xhr.send(JSON.stringify({
    email: 'pedro.ferreira@headitdigital.com',
    password: '123456789'
}));
</script>