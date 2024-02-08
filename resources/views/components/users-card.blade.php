@props(['userinfo'])

<tr>
    <td class="data-list">{{$userinfo['id']}}</td>
    <td class="data-list">{{$userinfo['name']}}</td>
    <td class="data-list">{{$userinfo['email']}}</td>
    <td class="data-list">{{$userinfo['created_at']}}</td>
</tr>

