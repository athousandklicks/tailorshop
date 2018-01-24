@extends('vue_main')

@section('title', '| Vue Example')

@section('content')

<example :current_order_id="{{ $shirts->id }}"></example>

{{-- <example :current_order_id="{{ $shirts->id }}"></example> --}}
@endsection
