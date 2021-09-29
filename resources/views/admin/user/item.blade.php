<tr>
    <td>{{$user -> id}}</td>
    <td>{{$user -> username}}</td>
    <td>{{$user -> F_name }}</td>
    <td>{{$user -> phone}}</td>
    <td>{{$user -> email}}</td>
    <td>{{$user -> role}}</td>
    <td>{{$user -> city}}</td>
    <td>{{$user -> state}}</td>
    <td style="text-align: center;">
        @include('admin.user.operations',$user)
    </td>
</tr>
