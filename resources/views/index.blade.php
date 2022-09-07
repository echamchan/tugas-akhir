@extends('navbar.layout')

@section('content')
	
	<form action="/logout" method="POST" style="margin-top: 250px; margin-bottom: 250px;">
            @csrf
            <div class="col-lg-20 margin-tb">
                <div style="margin-top: 20px;">
                    <button type="submit" class="btn btn-warning">
                        <i class="material-icons">logout</i>
                        <span class="button-text">Keluar</span>
                    </button>
                </div>
            </div>
        </form>

@endsection