<?php /*<ul>
@foreach ($tasks as $task)
<li>
<a href="/tasks/{{$task->id}}">{{$task->body}}</a>
</li>
@endforeach
</ul>*/ ?>

<input value="{{ csrf_token() }}" id="yo">

<script>
/*
var myInit = { 
	method: 'POST', 
	body: {'email':'pedro.ferreira@headitdigital.com', 'password':'123456789'},
	headers: {
		"X-CSRF-TOKEN":document.getElementById("yo")
	}
};

fetch('http://homestead.app/login', myInit)
.then((resp) => resp.json())
.then(function(data) {
    console.log(data);
})
.catch(function(error) {
    alert(error);
});*/
/*
var payload = {
    email: 'pedro.ferreira@headitdigital.com',
    password: '123456789',
	headers: {
		"X-CSRF-TOKEN":"xx"//document.getElementById("yo")
	}
};

var data = new FormData();
data.append( "json", JSON.stringify( payload ) );

fetch("http://homestead.app/login",
{
    method: "POST",
    body: data
})
.then(function(res){ return res.json(); })
.then(function(data){ alert( JSON.stringify( data ) ) })
*/

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