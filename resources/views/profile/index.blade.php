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
                                <h3>https://codepen.io/siremilomir/pen/jBbQGo</h3>
                                <div class="posts-section">
                                    <div class="post-bar" style="border:none;">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                <img src="{{asset('mosaconnect/images/default.jpg')}}" alt="" width=120 height=140>
                                                <div class="usy-name">
                                                    <h3>{{Auth::user()->name}}</h3>
                                                    <span><img src="{{asset('mosaconnect/images/clock.png')}}" alt="">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="ed-opts">
                                                <a href="#">Edit<i class="fa fa-pencil fa-fw"></i> </a>
                                            </div>
                                        </div>

                                        <div class="job_descp">
                                            <ul>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Nama</td>
                                                                <td>Yadda</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Tempat/Tanggal Lahir</td>
                                                                <td>15/10/1978</td>
                                                            </tr>



                                                            <tr>
                                                                <td>Pekerjaan</td>
                                                                <td>Programmer</td>
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