<div>
    <a href="{{route('students.index')}}">back</a>
</div>
<form action="{{route('students.store')}}" method="POST">
@csrf
name:<input type="text" name="name"><br>
age:<input type="text" name="age">
<div>
    <button type="submit">submit</button>
</div>
</form>