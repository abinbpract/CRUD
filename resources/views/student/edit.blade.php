<form action="{{route('students.update',$student->id)}}" method="post">
    @csrf
    @method('PUT')
<div>
Name:<input type="text" name="name" value="{{$student->name}}"><br>
Age:<input type="text" name="age" value="{{$student->age}}"><br>
gender: <label for="">{{$student->gender}}</label>
<input type="radio" name="gender" id="gender" value="male">
<label>male</label>
<input type="radio" name="gender" id="gender" value="female">
<label>female</label>
<br>
qual: <label for="">{{$student->qual}}</label>
<select name="qual" id="qual">
    <option value="pg">pg</option>
    <option value="ug">ug</option>
    <option value="hss">hss</option>
</select>
    <br>
hobbies: <label for="">{{$student->hobbies}}</label>
<input type="checkbox" name="hobbies" value="tv">
<label for="">tv</label>
<input type="checkbox" name="hobbies" value="music">
<label for="">music</label>
<input type="checkbox" name="hobbies" value="sports">
<label for="">sports</label>
<br>
photo: <img src="{{$student->photo}}" width="50" height="50" alt="">
<input type="file" name="photo">
<br>
</div>
<div><button type="submit">submit</button></div>
</form>