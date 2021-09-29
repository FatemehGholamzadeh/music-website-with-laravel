<a href="{{route('admin.album.edit',$album->id)}}"><i class="glyphicon glyphicon-edit"></i> </a>
<a href="#" onclick="del({{$album->id}})"><i class="glyphicon glyphicon-trash"></i> </a>

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
                    $(window).attr('location','albums/remove/'+id)

                }

            });

    }
</script>