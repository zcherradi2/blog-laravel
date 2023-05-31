@extends('layouts.app')

@section('content')
    <div>
        @include('layouts.grid_listing',['blogs'=>$blogs])
    </div>
@endsection