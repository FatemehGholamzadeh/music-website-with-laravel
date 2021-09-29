<a href="{{route('frontend.concert.edit',$concert->id)}}"><i class="glyphicon glyphicon-edit"></i> </a>
<a href="#" onclick="del({{$concert->id}})"><i class="glyphicon glyphicon-trash"></i> </a>

<script>
    function  del(id) {
        swal({
            title: "آیا مطمئن هستید؟",
            text: "اگر حذف کنید دیگر نمیتوانید فایل را برگردانید!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $(window).attr('location','users/delete/'+id)

                }

            });

    }
</script>