@extends('layouts/frontend')

@push('css')
    
<link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />

@endpush

@section('content')
   <h1>pyscript 2 page</h1> 

@endsection


@push('js')
<script defer src="https://pyscript.net/alpha/pyscript.js"></script>


<py-script>

</py-script>

@endpush