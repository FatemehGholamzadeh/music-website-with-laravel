<tr>
    <td>{{$album->id}}</td>
    <td>{{$album->F_name}}</td>
    <td>{{$album->singer_Fname}}</td>
    <td>{{$album->subject }}</td>
    <td>{{$album->category}}</td>
    <td>{{$album->type}}</td>
    <td>{{$album->file_size}}</td>
    <td>{{$album->file_name}}</td>

    <td>
        <a href="{{route('admin.albums.edit',[$album->id])}}">Edit</a>
    </td>
</tr>