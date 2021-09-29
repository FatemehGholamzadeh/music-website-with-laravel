<a href="{{route('admin.contact_us.okey',$about_us->id)}}"><i class="glyphicon glyphicon-ok"></i> </a>
<a href="#" onclick="del({{$about_us->id}})"><i class="glyphicon glyphicon-remove"></i> </a>

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
                    $(window).attr('location','contact/remove/'+id)

                }

            });

    }
</script>