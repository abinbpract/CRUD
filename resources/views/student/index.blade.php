

<div>
    <a href="{{route('students.create')}}">new</a>
</div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

<table border="1">
    <tr>
    <th>name</th>
    <th>age</th>
    <th>gender</th>
    <th>qual</th>
    <th>hobbies</th>
    <th>dob</th>
    <th>photo</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->gender}}</td>
        <td>{{$student->qual}}</td>
        <td>{{$student->hobbies}}</td>
        <td>{{$student->dob}}</td>
        <td> <img src="{{ url('storage/images/'.$student->photo_url) }}" width="50" height="50" alt="images"></td>
        <td><a href="{{route('students.show',$student->id)}}">show</a></td>
        <td><a href="{{route('students.edit',$student->id)}}">edit</a></td>
            <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                @csrf
                @method('DELETE')   
                <td><button type="submit">delete</button></td>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $students->links() !!}