@extends('layouts.web')

@section('content')
<div class="text-center">
  <h1 class="text-3xl text-gray-700 mb-2 uppercase">Últimos cursos</h1>
  <h2 class="text-xl text-gray-600">Fórmate como profesional en tecnología duplica sus ingresos</h2>
  <h3 class="text-lg text-gray-600">70% de los graduados</h3>
</div>

{{-- Componente --}}
<livewire:course-list>

@endsection