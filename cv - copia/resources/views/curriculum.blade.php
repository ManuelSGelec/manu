@extends('layouts.app')

@section('content')
   <div class="container mt-5">
       <div class="row justify-content-center">
           <!-- Columna principal - Contenido del CV -->
           <div class="col-md-10">
               <div class="card shadow-sm border-0 p-4 mb-5">
                   <div class="d-flex align-items-center">
                       <!-- Datos personales al lado de la foto -->
                       <div>
                           <h2 class="display-6 fw-bold text-dark">{{ $curriculum['nombre'] }}</h2>
                           <p class="text-muted mb-1"><strong>Teléfono:</strong> {{ $curriculum['telefono'] }}</p>
                           <p class="text-muted mb-1"><strong>Email:</strong> <a href="mailto:{{ $curriculum['email'] }}" class="text-decoration-none text-primary">{{ $curriculum['email'] }}</a></p>
                           <p class="text-muted mb-1"><strong>LinkedIn:</strong> <a href="https://{{ $curriculum['linkedin'] }}" class="text-decoration-none text-primary" target="_blank">Consultar</a></p>
                           <p class="text-muted mb-1"><strong>Github:</strong> <a href="https://{{ $curriculum['github'] }}" class="text-decoration-none text-primary" target="_blank">Consultar</a></p>
                        </div>
                       <!-- Foto dentro de la tarjeta -->
                       <div class="ms-auto">
                           <img src="path_to_your_image.jpg" alt="Foto de {{ $curriculum['nombre'] }}" class="img-fluid rounded-circle border" style="max-width: 120px; border-width: 2px;">
                       </div>
                   </div>
               </div>

                 <!-- Habilidades -->
                <h3 class="mt-4 ">Habilidades</h3>
                <div class="d-flex flex-wrap justify-content-center mb-4" ">
                     @foreach($curriculum['skills'] as $habilidad)
                        <span class="badge border me-2 mb-2" style="border-radius: 25px; padding: 8px 15px; font-size: 14px; background-color: #5f7dcd;">{{ $habilidad }}</span>
                     @endforeach
                </div>

               <!-- Experiencia -->
               <h3 class="mt-4 text-dark">Experiencia</h3>
               <div class="list-group">
                   @foreach($curriculum['experiencia'] as $experiencia)
                       <div class="list-group-item list-group-item-action mb-3 shadow-sm p-4" style="border-left: 5px solid #7fb0e5;">
                           <h5 class="mb-1 fw-bold">{{ $experiencia['cargo'] }}</h5>
                           <p class="text-muted mb-2"><strong>Empresa:</strong> {{ $experiencia['empresa'] }}</p>
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
                           <h5 class="mb-1 fw-bold">{{ $educacion['titulo'] }}</h5>
                           <p class="text-muted mb-2"><strong>Institución:</strong> {{ $educacion['institucion'] }}</p>
                           <small class="text-muted">Fecha: {{ $educacion['fecha'] }}</small>
                       </div>
                   @endforeach
               </div>

           </div>
       </div>
       <div class="d-flex justify-content-center">
           <button class="btn btn-outline-primary btn-sm my-3" onclick="window.print()">Imprimir</button>
       </div>
   </div>

   <style>
      /* Tipografía moderna */
      body {
          font-family: 'Roboto', sans-serif;
          line-height: 1.6;
      }

      /* Tarjeta principal */
      .card {
          background-color: #f8f9fa;
          border-radius: 20px;
      }

      /* Hover para las tarjetas de experiencia y educación */
      .list-group-item:hover {
          transform: translateY(-5px);
          box-shadow: 0 4px 10px rgba(0,0,0,0.1);
          background-color: rgba(0, 123, 255, 0.05);
      }

      /* Botón de imprimir */
      button.btn-outline-primary {
          padding: 10px 20px;
          border-radius: 30px;
          transition: background-color 0.3s ease;
      }
      button.btn-outline-primary:hover {
          background-color: #007bff;
          color: white;
      }

      /* Ajustes a las etiquetas y títulos */
      h2, h3, h5 {
          color: #343a40;
      }

      /* Bordes y colores personalizados */
      .badge {
          background-color: #e9ecef;
          font-size: 13px;
      }

      .text-primary {
          color: #007bff !important;
      }

      /* Transiciones suaves */
      .list-group-item {
          transition: transform 0.3s ease, box-shadow 0.3s ease;
          border-radius: 12px;
      }
   </style>
@endsection
