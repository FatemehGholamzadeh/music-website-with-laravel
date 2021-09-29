<tr>
    <td>{{$concert->id}}</td>
    <td>{{$concert->singer_Fname}}</td>
    <td>{{$concert->singer_Ename}}</td>
    <td>{{$concert->location }}</td>
    <td>{{$concert->date}}</td>
    <td>{{$concert->price}}</td>
   <td>
       @include('admin.concert.operations',$concert)

   </td>
</tr>