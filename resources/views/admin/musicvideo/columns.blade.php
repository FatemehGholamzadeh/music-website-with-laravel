<tr>
    <td>{{$musicvideo->id}}</td>
    <td>{{$musicvideo->F_name}}</td>
    <td>{{$musicvideo->singer_Fname}}</td>
    <td>{{$musicvideo->subject }}</td>
    <td>{{$musicvideo->category}}</td>
    <td>{{$musicvideo->type}}</td>
    <td>{{$musicvideo->file_name }}</td>
    <td>
    @include('admin.musicvideo.operations',$musicvideo)

    <!-- <a href="{{route('admin.musicvideo.edit',[$musicvideo->id])}}">Edit</a>
        <a href="{{route('admin.musicvideo.remove',[$musicvideo->id])}}">Remove</a>-->
    </td>
</tr>