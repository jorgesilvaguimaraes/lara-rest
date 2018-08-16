@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group"> 
                            <label for="inputThought" class="">O que está pensando neste momento?</label>
                            <input type="text" id="inputThought" class="form-control" name="thought">
                        </div>
                        <button type="submit" class="btn btn-primary" >Enviar pensamento</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

    
    <thought-component> </thought-component>

</div>


@endsection
