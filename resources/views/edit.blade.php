<form action="{{route('students.update',$student->id)}}" method="post">
    @csrf
    @method('PUT')
<div>
Name:<input type="text" name="name" value="{{$student->name}}"><br>
Age:<input type="text" name="age" value="{{$student->age}}"><br>
</div>
<div><button type="submit">submit</button></div>
</form>