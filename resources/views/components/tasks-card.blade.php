@props(['info'])

<tr>
    <td class="data-list"><a href="orderissues/{{$info['id']}}">{{$info['id']}}</a></td>
    <td class="data-list">{{Str::limit($info['task'], 30)}}</td>
    <td class="data-list">{{Str::limit($info['description'], 30)}}</td>
    <td class="data-list">{{$info['priority']}}</td>
    <td class="data-list">{{$info['department']}}</td>
    <td class="data-list">{{$info['status']}}</td>
    <td class="data-list">{{$info['created_at']}}</td>
    <td class="data-list">{{$info['updated_at']}}</td>
</tr>

