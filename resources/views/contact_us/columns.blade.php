<tr>
    <td>{{$contact_us->id}}</td>
    <td>{{$contact_us->full_name}}</td>
    <td>{{$contact_us->email }}</td>
    <td>{{$contact_us->phone}}</td>
    <td>{{$contact_us->text}}</td>
    <td>{{$contact_us->status}}</td>

    <td>
        @include('admin.contact_us_us.operations',$contact_us)
    </td>
</tr>