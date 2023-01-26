

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
    <th>name<th>
    <th>age<th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->age}}</td>
        <td>
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