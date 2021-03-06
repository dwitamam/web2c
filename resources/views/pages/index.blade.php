@extends('layouts.app') @section('content')


<div class="jumbotron text-center" id="staff-ahli">
    <h1>Staf Ahli Kami</h1>
    <p>Kami memiliki beberapa Staf yang sangat ahli di bidangnya masing - masing</p>

    <div class="row">
        <div class="col-sm-4"  >
            <h4>Hardware and Gadget</h4>
            <img src=" {{asset('images/staff_mandr.jpeg')}} " alt="" style="height: 170px; width: 125px;" >
            <p>Staff Ahli Hardware dan Gadget kami <b>Eka Prayudi S.Kom</b> a.k.a <b>MandR</b> .</p>
        </div>
        <div class="col-sm-4">
            <h4>Software</h4>
            <img src=" {{asset('images/staff_dojR.jpeg')}} " alt="" style="height: 170px; width: 125px;" >
            <p>Staff Ahli dalam bidang Software <b>Ozi Fahrur S.Kom</b> a.k.a <b>DojR</b> .</p>
        </div>
        <div class="col-sm-4">
            <h4>Web dan Networking</h4>
            <img src=" {{asset('images/staff_ryen.jpeg')}} " alt="" style="height: 170px; width: 125px;" >
            <p>Staff Ahli dalam bidang Web dan Jaringan Komputer, yaitu <b>Ryen Wosilo Putro S.Kom</b> a.k.a <b>RyenN</b> . </p>
        </div>
    </div>
</div>

<div class="container text-center" id="konsultasi" >
    <h2> Konsultasikan Masalah Anda</h2>

    <div class="row">
        
        <div class="col-sm-6 align-self-center">
            
            <p>Belum Punya Akun ? Segera Mendaftar !</p>
            <a href="/register" class="btn btn-info">Daftar</a>
            
        </div>
        <div class="col-sm-6">
            
            <p>Sudah Ada ? Langsung Login !</p>
            <a href="/login" class="btn btn-primary">Login</a>
            
        </div>
    </div><br>

</div>

<div class="jumbotron">
    <div class="container">
        <h2>Blog Posts, free tips buat pengunjung</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
        <ul>
            <li>Tips Backup Data</li>
            <li>Instalasi Laravel di Windows</li>
            <li>Buat Website Gratis 100%!</li>
        </ul>
        <h1>Posts</h1>
            @if(count($posts)>0)
                @foreach($posts as $post)
                    <div class="card card-body">
                        <h3> <a href="/posts/{{$post->id}}">{{$post->title}}
                        </a>  </h3>
                    </div>
                @endforeach
                {{$posts->links()}}
            @else
                <p>No Post Found</p>
            @endif
    </div>
</div>

 @endsection