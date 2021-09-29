<tr>
    <td>{{$file->id}}</td>
    <td>{{$file->F_name}}</td>
    <td>{{$file->singer_Fname}}</td>
    <td>{{$file->subject }}</td>
    <td>{{$file->category}}</td>
    <td>{{$file->type}}</td>
    <td>{{$file->file_size}}</td>
    <td>{{$file->file_name}}</td>

    <td>
        @include('admin.music.operations',$file)
    </td>
</tr>