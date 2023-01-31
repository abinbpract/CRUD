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
age:
<input type="number" name="age" id="age" min="10" max="50" value="10">
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
    <option value=" ">select</option>
    <option value="pg">pg</option>
    <option value="pg">ug</option>
    <option value="pg">hss</option>
</select>
@error('qual')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror<br>
<br>
hobbies:<input type="checkbox" name="hobbies" value="tv">
<label for="">tv</label>
<input type="checkbox" name="hobbies" value="music">
<label for="">music</label>
<input type="checkbox" name="hobbies" value="sports">
<label for="">sports</label>
@error('hobbies')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror<br>
<br>
dob: <input type="date" name="dob" id="dob">
    @error('dob')
    <div>{{$message}}</div>
    @enderror
    <br>
photo: <input type="file" name="photo" id="photo">
@error('photo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror<br><br>
fathername:<input type="text" name="fathername" value="{{old('fathername')}}">

<div>
    <button type="submit">submit</button>
</div>
</form>