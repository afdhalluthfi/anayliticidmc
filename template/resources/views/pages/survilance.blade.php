@extends('layout.master')
@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endpush
@push('style')
    
@endpush

@section('content')
    <div class="row">
        @php
            foreach ($getBodyShaming['data'] as $key)
            {
                echo "<pre>";
                    var_dump($key);
                echo "</pre>";
            }
        @endphp
    </div>
    <div class="row d-none">
        @foreach ($getBodyShaming['data'] as $key )
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body"></div>
                    <div class="card-header">Titel</div>
                </div>
            </div>    
        @endforeach
    </div>
@endsection


@push('plugin-scripts')
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush
@push('custom-scripts')

@endpush