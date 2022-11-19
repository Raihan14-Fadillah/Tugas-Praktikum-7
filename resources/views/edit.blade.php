@extends('layout.tampilan')
@section('konten')
<head>
 <title>Home</title>
 <style>
 </style>
</head>
<body>
    <div class="container">
        <div class="container mt-3">
            <div class='cntr'>
                <h1 style="margin: 0 20px;">Detail Data Mahasiswa</h1>
            </div>
            <br>
            <form action="/editAct" method="">
                @foreach($mahasiswa as $ms)
                <div class="row">
                    <div class="col">
                        <h6>Nama Mahasiswa</h6>
                        <input type="text" class="form-control" placeholder="Masukan Nama Mahasiswa" name="nama" value="{{$ms->nama}}">
                    </div>
                    <div class="col">
                        <h6>Alamat Email</h6>
                        <input type="text" class="form-control" placeholder="Masukan Email Mahasiswa" name="email" value="{{$ms->email}}">    
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <h6>NIM</h6>
                        <input type="text" class="form-control" placeholder="Masukan NRP Mahasiswa" name="nrp" value="{{$ms->nrp}}">
                    </div>
                    <div class="col">
                        <h6>Alamat Rumah</h6>
                        <input type="text" class="form-control" placeholder="Masukan Alamat Mahasiswa" name="alamat" value="{{$ms->alamat}}">    
                    </div>
                </div>
                <br>
                <div style="text-align: right">
                <input type="reset" class="btn btn-outline-dark text-dark" name="reset" value="RESET">
                <button type="submit" class="btn text-white" style="background-color: #1c2331">EDIT</button> 
                </div>
                @endforeach
            </form>
        </div>
    </div>
</body>
</html>
<style>
    .navbar-brand{
    background: #ffc905;
    border-radius: 10px;
    padding: 5;
}
.navbar{
    background-color: #1c2331;
}
.container-fluid{
    margin: 0 auto;
    width: 1200px;
    height: 30px;
}
.container{
    margin-top: 75px;
    width: 800px;
    text-align: justify;
}
.nav-item{
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    background: rgb(33, 33, 41);
    border-radius: 20px;
}
.row.mt-3 {
    width: 1000px;
    margin: 0 auto;
}
.bawah{
    margin-top: 20px;
}

/* NAVIGATION */
nav {
    margin: 0 auto;
    background: #fff;
    padding: 50px 0;
    box-shadow: 0px 5px 0px #dedede;
  }
  nav ul {
    list-style: none;
    text-align: center;
  }
  nav ul li {
    display: inline-block;
  }
  nav ul li a {
    display: block;
    padding: 15px;
    text-decoration: none;
    color: #aaa;
    font-weight: 800;
    text-transform: uppercase;
    margin: 0 10px;
  }
  nav ul li a,
  nav ul li a:after,
  nav ul li a:before {
    transition: all .5s;
  }
  nav ul li a:hover {
    color: #555;
  }
  
  /* SHIFT */
  nav.shift ul li a {
    position:relative;
    z-index: 1;
  }
  nav.shift ul li a:hover {
    color: white;
  }
  nav.shift ul li a:after {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    width: 100%;
    height: 1px;
    content: '.';
    color: transparent;
    background: #ffc905;
    visibility: none;
    opacity: 0;
    z-index: -1;
    border-radius: 20px;
  }
  nav.shift ul li a:hover:after {
    opacity: 1;
    visibility: visible;
    height: 100%;
  }
  
  
  
 
</style>
@endsection