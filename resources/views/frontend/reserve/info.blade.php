<tr class="profileTRstyle">
    <th class="profileTicket">نام و نام خانوادگی  :</th>
    <th class="profileTicket">{{$ticket->user->F_name}}</th>
</tr>
<tr class="profileTRstyle">
    <th class="profileTicket">نام کنسرت:</th>
    <th class="profileTicket">{{$ticket->concert->singer_Fname}}</th>
</tr>
<tr class="profileTRstyle">
    <th class="profileTicket">تاریخ برگزاری کنسرت : </th>
    <th class="profileTicket">{{$ticket->concert->date}}</th>
</tr>
<tr class="profileTRstyle">
    <th class="profileTicket">محل برگزاری  : </th>
    <th class="profileTicket">{{$ticket->concert->location}}</th>
</tr>
<tr class="profileTRstyle">
    <th class="profileTicket">مقدار پرداختی شما : </th>
    <th class="profileTicket">{{$ticket->concert->price}}</th>
</tr>