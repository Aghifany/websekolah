@extends('_layout.with-sidebar')

@section('content')
  <div class="container">
    <h1>{{ $item->judul }}</h1>
  <div class="card">
    <div class="card-body">
      <div>{!! $item->isi !!}</div>
    </div>
  </div>
  </div>
@endsection

