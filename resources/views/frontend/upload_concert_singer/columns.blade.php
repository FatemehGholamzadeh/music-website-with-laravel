<tr>
    <td>{{$concert->id}}</td>
    <td>{{$concert->singer_Fname}}</td>
    <td>{{$concert->singer_Ename}}</td>
    <td>{{$concert->location }}</td>
    <td>{{$concert->date}}</td>
    <td>{{$concert->clock}}</td>
    <td>{{$concert->price}}</td>
    <td>{{$concert->like_count}}</td>
   <td>
       @include('frontend.upload_concert_singer.operations',$concert)

   </td>
</tr>