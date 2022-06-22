@extends ('home')
@section('content')

<table>
    @foreach($shoplist as $shop)
    <tr>
        <td>{{$shop['name']}}</td>
        <td><img alt="" src="{{$shop['image']}}"></td>
    </tr>
    @endforeach
</table>
@endsection