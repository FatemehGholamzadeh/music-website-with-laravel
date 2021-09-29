<tr>
    <td>{{$about_us->id}}</td>
    <td>{{$about_us->full_name}}</td>
    <td>{{$about_us->email }}</td>
    <td>{{$about_us->phone}}</td>
    <td>{{$about_us->text}}</td>
    <td>{{$about_us->status}}</td>

    <td>
        @include('admin.about_us.operations',$about_us)
    </td>
</tr>