@extends('layouts/frontend')

@push('css')
    
<link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />

@endpush

@section('content')
    

<h1>Learn DOM Manipulation using PyScript</h1>

<h2>Simple String Counter using Python 🐍</h2>

<br>

<p>Input Text</p>

<textarea name="input_text" id="input_text" placeholder="Enter your text...."></textarea>

<br>

<button id="run" type="button" class="button is-primary" pys-onClick="count">Count</button>
<button id="clear" type="button" class="button is-danger" pys-onClick="clear">Clear</button>

<p>Output from 🐍</p>

<p id = 'output'></p>

@endsection


@push('js')
<script defer src="https://pyscript.net/alpha/pyscript.js"></script>


<py-script>

    input_text = Element("input_text")    

    op = Element("output")

    def clear(*args, **kwargs):
        input_text.clear()

    def count(*args, **kwargs):
        number = len(input_text.value)
        op.write(number)

</py-script>

@endpush