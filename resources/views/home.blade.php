@extends('template')

@section('nav')
    <nav id="navbar">
        <ul>
            <div id="website-title">
                <h1>HAPPY BOOK STORE</h1>
            </div>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Category <i class="fas fa-angle-down"></i>
                <ul>
                    @for($i = 0; $i < count($dataC); $i++)
                        <li><a href="/category-{{$i}}">{{$dataC[$i]->category}}</a></li>
                    @endfor
                </ul>
            </li>
            <li><a href="{{url('/contact')}}">Contact</a></li>
        </ul>
    </nav>
@endsection

@section('content')
<h1 style="background: #ff9c01">Book List</h1>
<table id="customers" style="border: 1px solid #ddd;">

    <tr>
        <th width="400px">Title</th>
        <th width="610px">Author</th>
    </tr>

    @forelse($data as $dataBook)
        <tr>
            <td><a href="/detail-{{$dataBook->id-1}}">{{$dataBook->title}}</a></td>
            <td>{{$dataBook->details->author}}</td>
        </tr>
    @empty
        <tr>
            <td colspan="2" style=" background: goldenrod"><center>No data..</center></td>
        </tr>
    @endforelse

</table>

<div class="buttonPn">
    <h2>{{ $data->links() }}</h2>
</div>
@endsection

@section('category')
    <h1 style="background: #ff9c01">Category</h1>
    <table id="customers">
        @forelse($dataC as $datakategori)
            <tr>
                <td style="padding: 10px; width: 20px;" ><a href="/category-{{$datakategori->id-1}}">{{$datakategori->category}}</a></td>
            </tr>
        @empty
            <tr>
                <td style=" background: goldenrod"><center>No data..</center></td>
            </tr>
        @endforelse
    </table>
@endsection
