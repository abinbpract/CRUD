<form action="{{route('employees.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    name: <input type="text" name="name" id="" value="{{old('name')}}">
    @error('name')
    <div>{{$message}}</div>
    @enderror
    <br>
    age: <input type="text" name="age" id="" value="{{old('age')}}">
    @error('age')
    <div>{{$message}}</div>
    @enderror
    <br>
    gender: <input type="radio" name="gender" id="gender" value="male">
    <label for="gender">male</label>
    <input type="radio" name="gender" id="gender" value="female">
    <label for="gender">female</label>
    @error('gender')
    <div>{{$message}}</div>
    @enderror<br>
    qual: <select name="qual" id="qual">
        <option value="pg">pg</option>
        <option value="ug">ug</option>
        <option value="hss">hss</option>
    </select>
    @error('qual')
    <div>{{$message}}</div>
    @enderror
    <br>
    spec: <input type="checkbox" name="spec" id="spec" value="course1">
    <label for="spec">course1</label>
    <input type="checkbox" name="spec" id="spec" value="course2">
    <label for="spec">course2</label>
    <input type="checkbox" name="spec" id="spec" value="course3">
    <label for="spec">course3</label>
    <br>
    dob: <input type="date" name="dob" id="dob">
    @error('dob')
    <div>{{$message}}</div>
    @enderror
    <br>
    photo: <input type="file" name="photo" id="photo"><br>
    <button type="submit">submit</button>
</form>