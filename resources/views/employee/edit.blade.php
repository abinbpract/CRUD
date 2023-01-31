<form action="{{route('employees.update',$employee->id)}}" method="post">
    @csrf
    @method('PUT')
    name: <input type="text" name="name" id="" value="{{$employee->name}}"><br>
    age: <input type="text" name="age" id="" value="{{$employee->age}}"><br>
    gender: <label for="">{{$employee->gender}}</label>
    <input type="radio" name="gender" id="gender" value="male">
    <label for="gender">male</label>
    <input type="radio" name="gender" id="gender" value="female">
    <label for="gender">female</label>
    <br>
    qual: <label for="">{{$employee->qual}}</label>
    <select name="qual" id="qual">
        <option value="pg">pg</option>
        <option value="ug">ug</option>
        <option value="hss">hss</option>
    </select> 
    <br>
    spec: <label for="">{{$employee->spec}}</label>
    <input type="checkbox" name="spec" id="spec" value="course1">
    <label for="spec">course1</label>
    <input type="checkbox" name="spec" id="spec" value="course2">
    <label for="spec">course2</label>
    <input type="checkbox" name="spec" id="spec" value="course3">
    <label for="spec">course3</label>
    <br>
    dob: <label for="">{{$employee->dob}}</label>
    <input type="date" name="dob" id="dob">
    <br>
    photo: <img src="{{ url('storage/images/'.$employee->photo_url) }}" width="50" height="50" alt="images">
    <input type="file" name="photo" id="photo">
    <br>
    <button type="submit">submit</button>
</form>