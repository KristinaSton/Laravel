<h1>List</h1>
<form type="get" action="{{url('/search')}}">
    <input type="search" placeholder="search" name="searchshops"></input>
    <button type="submit">Search</button>
</form>
<form type="get" action="{{url('/home')}}">
<button type="submit" ><-</button>
</form>
<table>
    @foreach($shoplist as $shop)
    <tr>
        <td><a href="{{ url('menu', [$shop->id]) }}">{{$shop['name']}}</a></td>
        <td><img alt="" src="{{$shop['image']}}"></td>
    </tr>
    @endforeach
</table>
