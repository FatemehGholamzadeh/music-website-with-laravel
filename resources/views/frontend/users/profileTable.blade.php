<table class="profileTable" align="center">
    <thead style="border-bottom: 1px solid rgb(31, 31, 31);">
    <tr class="profileTRstyle">
        <th class="profileTicket">نام کاربری :</th>
        <th class="profileTicket">{{$user -> username}}</th>
    </tr>
    <tr class="profileTRstyle">
        <th class="profileTicket">نام و نام خانوادگی :</th>
        <th class="profileTicket">{{$user -> F_name}}</th>
    </tr>

    <tr class="profileTRstyle">
        <th class="profileTicket">تلفن :</th>
        <th class="profileTicket">{{$user -> phone}}</th>
    </tr>
    <tr class="profileTRstyle">
        <th class="profileTicket">استان :</th>
        <th class="profileTicket">{{$user -> state}} </th>
    </tr>
    <tr class="profileTRstyle">
        <th class="profileTicket">شهر :</th>
        <th class="profileTicket">{{$user -> city}}</th>
    </tr>
    </thead>
</table>