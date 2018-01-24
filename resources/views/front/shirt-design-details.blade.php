@extends('vue_main')

@section('title', '| Shirt Design')

@section('content')

<shirt-design-details :current_order_id="{{ $shirts->id }}"></shirt-design-details>

{{-- <example :current_order_id="{{ $shirts->id }}"></example> --}}
@endsection