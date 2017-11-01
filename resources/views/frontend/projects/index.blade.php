@extends('frontend.layouts.master')
@section('title', __('Dự án'))
@section('content')
<div class="spacer-60"></div>
<div class="container">
    <div class="row">
        <!-- Agent Section -->
        <section id="agent_sec" class="col-md-8">
            <!-- Agent 1 -->
            @foreach($projects as $project)
            <div class="spacer-30"></div>
            <div class="row">
              <div class="agen_info">
                <div class="col-md-4">
                  <a href="agents_single.html"><img class="img-responsive cls-img-project" src="{{asset($project->image)}}" alt="">
                  </a>
                </div>
                <div class="col-md-8">
                  <div class="panel panel-default">
                    <div class="panel-body cls-img-project">
                      <div class="row agen_desc">
                        <div class="col-md-8">
                          <h3 class="sec_titl"><a href="{{route('du-an.show', $project->slug)}}">{{$project->title}}</a></h3>
                        </div>
                        <div class="col-md-4">
                          <div class="soc_icon">
                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </div>
                        </div>
                      </div>
                      <p class="sec_desc">
                        {{contentLimit($project->description)}}
                      </p>
                      <div class="panel_bottom">
                        <div class="agen_feat">
                          <p class="area">
                              <a href="tel:910-213-7890"> <i class="fa fa-phone"></i> 910-213-7890 </a>
                          </p>
                          <p class="bedrom">
                              <a href="mailto:scott@berends.com?Subject=Agent%20enquiry"> <i class="fa fa-envelope"></i> scott@berends.com </a>
                          </p>
                          <p class="bedrom"><a href="skype:-scottberends1-?chat"><i class="fa fa-skype"></i> scottberends1 </a> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <div class="spacer-30"></div>
            <div> {{$projects->render()}}</div>
        </section>

        <!-- Sidebar Section -->
        @include('frontend.layouts.partials.aside')

        <div class="spacer-60"></div>

    </div>
</div>
@endsection