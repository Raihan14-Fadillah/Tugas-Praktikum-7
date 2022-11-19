@extends('layout.tampilan')
@section('konten')
<head>
 <title>Home</title>
</head>
<body>
    <div class="container">
        <h1 style="margin: 0 20px;">Data Mahasiswa</h1><br>
        <div class="container-flex">
        @foreach ($mahasiswa as $ms)
            <div class="container-view">
                <div class="left text-white">
                    <h6>{{$ms->nama}}</h6>
                    <p>{{$ms->nrp}}</p>
                    <p>{{$ms->alamat}}</p>
                </div>
                <div class="right text-white">
                    <a href="/edit/{{$ms->nrp}}"><img src="img/edit.png" alt="edit" style="height: 20px;width:20px;"></a>
                    <a href="/delete/{{$ms->nrp}}"><img src="img/trash.png" alt="delete" style="height: 20px;width:20px;"></a>
                        <p style="margin-top: 10px;">{{$ms->email}}</p>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</body>
</html>
<style>
    .container-flex{
        display: flex;
        margin: 0 auto;
        flex-wrap: wrap;
    }
    .table{
        background-color: #1c2331;
    }
    .container-view{
        background-color: #1c2331;
        width: 350px;
        height: 100px;
        border-radius: 10px; 
        display: flex;
        margin: 19px;
    }
    .left{
        padding: 7px;
        margin: 1px 13px;
        font-size: 12;
        width: 40%;
    }
    .right{
        text-align: right;
        width: 175px;
        font-size: 12;
        margin:10px ;
    }
 </style>
@endsection