@props(['info'])

<tr>
    <td class="data-list"><a href="lte/{{$info['id']}}">{{$info['id']}}</a></td>
    <td class="data-list">{{$info['lteordertype']}}</td>
    <td class="data-list">{{$info['vendor']}}</td>
    <td class="data-list">{{$info['opco']}}</td>
    <td class="data-list">{{$info['street']}}</td>
    <td class="data-list">{{$info['city']}}</td>
    <td class="data-list">{{$info['state']}}</td>
    <td class="data-list">{{$info['zip']}}</td>
    <td class="data-list">{{$info['created_at']}}</td>
    <td class="data-list">{{$info['updated_at']}}</td>
</tr>

