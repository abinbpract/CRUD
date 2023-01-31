

<div>
    <a href="{{route('employees.create')}}">new</a>
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
    <th>spec</th>
    <th>dob</th>
    <th>photo</th>
    </tr>
    @foreach($employees as $employee)
    <tr>
        <td>{{$employee->name}}</td>
        <td>{{$employee->age}}</td>
        <td>{{$employee->gender}}</td>
        <td>{{$employee->qual}}</td>
        <td>{{$employee->spec}}</td>
        <td>{{$employee->dob}}</td>
        <td> <img src="{{ url('storage/images/'.$employee->photo_url) }}" width="50" height="50" alt="images"></td>
        <td><a href="{{route('employees.show',$employee->id)}}">show</a></td>
        <td><a href="{{route('employees.edit',$employee->id)}}">edit</a></td>
            <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
                @csrf
                @method('DELETE')   
                <td><button type="submit">delete</button></td>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $employees->links() !!}