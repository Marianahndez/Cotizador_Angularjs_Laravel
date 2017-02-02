<ul>
@foreach($costos as $costo)
	<li>{{ $costo->porcentaje }}</li>
	<li>{{ $costo->enefeb }}</li>
	<li>{{ $costo->paneles }}</li>
@endforeach	
</ul>