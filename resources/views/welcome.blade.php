@extends("layouts.plantilla")

@section("header")
    @include("layouts.nav")
@endsection

@section("main")
    @if(Session::has('todook'))
        <div class='alert-info'>
            {{Session::get('todook')}}
        </div>                    
    @endif
    @include("layouts.body")
@endsection

@section("footer")
<footer class="bg-dark" style="width: 100%;color:white;">
    <p style="text-align: right;width:100%;margin: 0;padding: 15px;">LaravelCEPI 2020</p>
</footer>

@endsection