@extends('layouts.app')

@section('contenido_interno')
<br/><h1>Nuestros Cines</h1><br/>
@foreach ($cines as $cine)
				<div class="contenido-cine">
	        	    <img src="{{asset('img/cine/'.$cine->id . '.1.jpg')}}" width="227" height="170"/>
            	   	<div class="datos-cine">
       				   	<h4>{{$cine->RazonSocial}}</h4><br/>
                		<span>{{$cine->Direccion}} - {{$cine->Distrito}}<br/><br/>Teléfono: {{$cine->Telefonos}}</span>
                	</div>
                	<br/>
                	<a href="{{ route('cine', ['id' => $cine->id]) }}">
                		<img src="{{asset ('img/varios/ico-info2.png')}}" width="150" height="40"/>
                	</a>
				</div>
@endforeach
@endsection

