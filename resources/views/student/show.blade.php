<table border="1">
    <tr>
    <th>name</th>
    <th>age</th>
    <th>gender</th>
    <th>qual</th>
    <th>spec</th>
    <th>dob</th>
    <th>photo</th>
    </tr>
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->gender}}</td>
        <td>{{$student->qual}}</td>
        <td>{{$student->hobbies}}</td>
        <td>{{$student->dob}}</td>
        <td><img src="{{ url('storage/images/'.$student->photo_url) }}" width="50" height="50" alt="images"></td>
    </tr>
</table>