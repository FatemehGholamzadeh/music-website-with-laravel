<tr>
<td>{{$ticket->concert->singer_Fname}}</td>
<td>{{$ticket->concert->date}}</td>
<td>{{$ticket->concert->location}}</td>
<td>{{$ticket->concert->price }}</td>
<td>{{$ticket->seat_num }}</td>
<td>{{$ticket->status}}</td>
<td>{{$ticket->returnedMoney}}</td>
<td>  <a href="{{route('frontend.users.cancel',$ticket)}}">کنسل</a>
</td>
</tr>

<!-- -->