<tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>
         <a href="{{route('admin.categories.edit',[$category->id])}}">ویرایش</a>
        <a href="{{route('admin.categories.remove',[$category->id])}}">حذف</a>
        </td>
</tr>


