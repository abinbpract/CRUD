

<div>
    <a href="{{route('students.create')}}">new</a>
</div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

<table>
    <tr>
    <th>id<th>
    <th>name<th>
    <th>age<th>
    </tr>
    @foreach($students as $student)
    <tr>
    <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->age}}</td>
        <td>
        <a href="{{route('students.show',$student->id)}}">show</a>
        <a href="{{route('students.edit',$student->id)}}">edit</a>
            <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                @csrf
                @method('DELETE')   
                <button type="submit">delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>