@extends('templates.default')

@section('content')
    <h3> Your Searc result for {{ Request::input('query') }}</h3>
    @if( !$users->count())
        <p> No results found, Sorry.</p>
    @else
    <div class="row">
        <div class="col-md-12">

            @foreach($users as $user)
                @include('user.partials.userblock')
            @endforeach

        </div>
    </div>
    @endif
@stop