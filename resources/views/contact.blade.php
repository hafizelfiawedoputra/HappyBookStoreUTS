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
<h1 style="background: #ff9c01">Contact</h1>
<table id="customers" >
    <tr>
        <td width="1010px">
            <br><h2>Store Address :</h2><br>
            Jalan Pembangunan Baru Raya,<br><br>Kompleks Pertokoan Emerald Blok III/12 Bintaro,<br><br>Tangerang, Selatan<br><br> Indonesia<br><br><br>
            <h2>Open Daily :</h2><br>
            08.00 - 20.00<br><br><br>
            <h2>Contact :</h2><br>
            Phone : 021-08782374<br><br> Email : happybookstore@happy.com<br>
        </td>
    </tr>
</table>
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
