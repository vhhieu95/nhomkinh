@extends('frontend.layouts.master')
@section('title', __('Tuyển Dung'))
@section('content')
<div class="container">
    <div class="row">
        <!-- About Section -->
        <section id="abt_sec" class="col-md-8">
            <h1>Tuyển dụng của HouseDoor</h1>

        </section>

        <!-- Sidebar Section -->
        @include('frontend.layouts.partials.aside')

        <div class="spacer-60"></div>

    </div>
</div>
@endsection
