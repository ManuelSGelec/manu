@extends('layouts.base')

@section('title', 'Curriculum')

@section('sidebar')
    <nav class="nav flex-column text-center">
        <div class="center mt-5">
            <img src="{{'opcion3.jpg'}}" alt="Foto de {{ $curriculum['nombre'] }}" class="img-fluid rounded-circle border " style="max-width: 220px; border-width: 2px;">
        </div>
        <h4 class="text center color-primary mt-5">{{$curriculum['nombre']}}</h4>
        
        <h5 class="text-center mt-2">Telefono: {{$curriculum['telefono']}}</h5>
        <h5 class="text-center">Email: {{$curriculum['email']}}</h5>
         <div class=" row mt-3">
            
            <a class="nav-link col-6"  href="https://{{$curriculum['github']}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                </svg></a>
        
            <a  class="nav-link col-6" href="https://{{ $curriculum['linkedin'] }}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
            </svg></a>
         </div>
        

         <!-- Habilidades -->
         <h3 class="mt-4 ">Habilidades</h3>
         <div class="d-flex flex-wrap justify-content-center mt-3" >
              @foreach($curriculum['skills'] as $habilidad)
                 <span class="badge border me-2 mb-2" style="border-radius: 25px; padding: 8px 15px; font-size: 14px; background-color: #59637f;">{{ $habilidad }}</span>
              @endforeach
         </div>

    </nav>
@endsection

@section('content')
    <h1>Tecnio de desarrollo multiplataforma</h1>
    <span>
        Técnico de campo con más de 10 años de experiencia en soporte técnico y asistencia en el montaje de equipos informáticos. 
    </br>
    </span>
    <span>
        He desarrollado habilidades en creatividad, resolución de incidencias y trato con el cliente, asegurando siempre un enfoque profesional y cordial. 
    </br>
    </span>
    <span>
        Experto en organización de salidas programadas y comprensión de procesos empresariales.
    </span>
    </br>

 
    <!-- Experiencia -->
    <h3 class="mt-4 text-dark">Experiencia</h3>
    <div class="list-group">
        @foreach($curriculum['experiencia'] as $experiencia)
            <div class="list-group-item list-group-item-action mb-3 shadow-sm p-4" style="border-left: 5px solid #7fb0e5;">
                <h5 class="mb-1 fw-bold text-primary" >{{ $experiencia['cargo'] }}</h5>
                <p class="text-muted mb-2 "><strong>Empresa:</strong> {{ $experiencia['empresa'] }}</p>
                <small class="text-muted">Fecha: {{ $experiencia['fecha'] }}</small>
                <ul class="mt-3">
                    @foreach($experiencia['descripcion'] as $descripcion)
                        <li class="text-muted">{{ $descripcion }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

    <!-- Educación -->
    <h3 class="mt-4 text-dark">Educación</h3>
    <div class="list-group">
        @foreach($curriculum['educacion'] as $educacion)
            <div class="list-group-item list-group-item-action mb-3 shadow-sm p-4" style="border-left: 5px solid #55ceba;">
                <h5 class="mb-1 fw-bold text-success">{{ $educacion['titulo'] }}</h5>
                <p class="text-muted mb-2"><strong>Institución:</strong> {{ $educacion['institucion'] }}</p>
                <small class="text-muted">Fecha: {{ $educacion['fecha'] }}</small>
            </div>
        @endforeach
    </div>


 
@endsection
