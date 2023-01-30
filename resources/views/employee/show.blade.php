<table border="1">
    <tr>
    <th>name</th>
    <th>age</th>
    <th>gender</th>
    <th>qual</th>
    <th>spec</th>
    <th>photo</th>
    </tr>
    <tr>
        <td>{{$employee->name}}</td>
        <td>{{$employee->age}}</td>
        <td>{{$employee->gender}}</td>
        <td>{{$employee->qual}}</td>
        <td>{{$employee->spec}}</td>
        <td> <img src="{{ url('storage/images/'.$employee->photo_url) }}" width="50" height="50" alt="images"></td>
    </tr>
</table>