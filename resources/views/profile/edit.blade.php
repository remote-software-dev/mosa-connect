@extends('layouts.app')
@section('content')
<main>
    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">

                    <div class="col-lg-9 col-md-8 no-pd">
                        <div class="main-ws-sec">
                            <div class="post-topbar">
                                <div class="posts-section">
                                    <div class="post-bar" style="border:none;">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                @if(Auth::user()->profile()->exists())
                                                <img src="{{Auth::user()->profile->thumbnail}}" alt="" width=120 height=140>
                                                @else
                                                <img src="{{asset('mosaconnect/images/default.jpg')}}" width=120 height=140 alt="">
                                                @endif
                                                <div class="usy-name">
                                                    <h3>{{Auth::user()->username}}</h3>
                                                    <span><img src="{{asset('mosaconnect/images/clock.png')}}" alt="">3 min ago</span>
                                                </div>
                                            </div>

                                            <div class="ed-opts">
                                                <!-- if first time login then do create profile -->
                                                @if(Auth::user()->profile()->exists())
                                                <a href="{{route('/profile-edit')}}">Edit Profil<i class="fa fa-pencil fa-fw"></i> </a>
                                                <!-- else if returning login, then edit profile -->
                                                @else
                                                <a href="{{route('/profile-create')}}">Buat Profil<i class="fa fa-pencil fa-fw"></i> </a>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="job_descp">
                                            <ul>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Nama</td>
                                                                @if(Auth::user()->profile()->exists())
                                                                <td>{{Auth::user()->profile->name}}</td>
                                                                @else
                                                                <td>Silakan isi nama anda</td>
                                                                @endif
                                                            </tr>

                                                            <tr>
                                                                <td>Tanggal Lahir</td>
                                                                @if(Auth::user()->profile()->exists())                                        
                                                                <td>{{date('d/m/Y', strtotime(Auth::user()->profile->dob))}}</td>
                                                                @else
                                                                <td>Silakan isi nama anda</td>
                                                                @endif
                                                            </tr>

                                                            <tr>
                                                                <td>Pekerjaan</td>
                                                                @if(Auth::user()->profile()->exists())
                                                                <td>{{Auth::user()->profile->occupation}}</td>
                                                                @else
                                                                <td>Silakan isi nama anda</td>
                                                                @endif
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <a href="{{route('home')}}">Kembali</a>
                                                </div>

                                            </ul>
                                        </div>


                                    </div>
                                    <!--post-bar end-->




                                </div>
                                <!--post-bar end-->

                            </div>
                            <!--posts-section end-->
                        </div>
                        <!--post-topbar end-->

                    </div>
                    <!--main-ws-sec end-->
                </div>

            </div>
        </div><!-- main-section-data end-->
    </div>
    </div>
</main>
@endsection