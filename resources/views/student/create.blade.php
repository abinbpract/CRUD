<div>
    <a href="{{route('students.index')}}">back</a>
</div>
<form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
@csrf
name:<input type="text" name="name" value="{{old('name')}}">
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
age:<input type="text" name="age" value="{{old('age')}}">
@error('age')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror<br>
gender:<input type="radio" name="gender" id="gender" value="male">
<label>male</label>
<input type="radio" name="gender" id="gender" value="female">
<label>female</label>
@error('gender')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror<br>
qual: <select name="qual" id="qual">
    <option value="pg">pg</option>
    <option value="pg">ug</option>
    <option value="pg">hss</option>
</select>
<br>
hobbies:<input type="checkbox" name="hobbies" value="tv">
<label for="">tv</label>
<input type="checkbox" name="hobbies" value="music">
<label for="">music</label>
<input type="checkbox" name="hobbies" value="sports">
<label for="">sports</label>
<br>
photo: <input type="file" name="photo" id="photo"><br>

<div>
    <button type="submit">submit</button>
</div>
</form>