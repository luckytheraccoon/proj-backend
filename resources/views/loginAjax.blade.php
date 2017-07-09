<input value="{{ csrf_token() }}" id="yo">
LOGIN!
<script>
var xhr = new XMLHttpRequest();
xhr.open("POST", 'http://myproject.app/login', true);
xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
xhr.setRequestHeader("Content-type", "application/json charset=UTF-8");
xhr.setRequestHeader("X-CSRF-TOKEN", document.getElementById("yo").value);
xhr.send(JSON.stringify({
    email: 'luckytheraccoon@gmail.com',
    password: '123'
}));
</script>