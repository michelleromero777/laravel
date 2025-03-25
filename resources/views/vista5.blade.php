@extends('plantilla')

@section('contenido')
<style>
    .card {
    background-color: rgba(241, 251, 254, 0.8);
    border-radius: 8px;
    border: 2px white solid;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    height: 100%;
}

    .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(5, 112, 252, 0.2);
    background-color: rgba(203, 241, 252, 0.8);
 }

 h5{
    text-decoration: underline;
    text-align: center;
 }

 img {
    width: 100%;        
    height: 200px;      
    object-fit: cover;  
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
 
</style>

<div class="container mt-5">
        <h1 class="text-center">ANIMALES AEREOS</h1>
    </div>
<div class="container mt-5">

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTobqcgqOnWWfdszmKbEdTMnc1fmA_rh0CGOg&s" class="card-img-top" alt="Platillo 1">
                <div class="card-body">
                    <h5 class="card-title">Águila Real (Aquila chrysaetos)</h5>
                    <p class="card-text">
                    <strong>✅ Descripción:</strong> Es una de las aves rapaces más poderosas y emblemáticas del mundo. Tiene una vista excepcional que le permite detectar presas a gran distancia.
                    <br><strong>✅ Alimentación:</strong> Carnívora (mamíferos pequeños, aves, reptiles).
                    <br><strong>✅ Hábitat:</strong> Montañas, praderas y zonas abiertas de América del Norte, Europa, Asia y el norte de África.
                    <br><strong>✅ Esperanza de vida:</strong>  20-30 años en libertad, hasta 50 en cautiverio.
                    <br><strong>✅ Dato Curioso:</strong> Puede alcanzar velocidades de hasta 320 km/h en picada cuando caza.
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7bVW4xK7C1EZyvitCgUQinV3WZ6TI6qMpjg&s" class="card-img-top" alt="Platillo 2">
                <div class="card-body">
                    <h5 class="card-title">Guacamayo Azul y Amarillo (Ara ararauna)</h5>
                    <p class="card-text">
                    <strong>✅ Descripción:</strong>  Es un loro colorido y llamativo con una gran capacidad para imitar sonidos y palabras humanas.
                    <br><strong>✅ Alimentación:</strong> Herbívoro (frutas, semillas, frutos secos).
                    <br><strong>✅ Hábitat:</strong> Selvas tropicales de América del Sur.
                    <br><strong>✅ Esperanza de vida:</strong> 30-50 años en libertad, más de 60 en cautiverio.
                    <br><strong>✅ Dato Curioso:</strong> Forman lazos de pareja de por vida y se comunican con su compañero mediante sonidos y gestos.
                    </p>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwfA51kUrTqjUOhFIz0zRUQqOnDNmb_lXSCg&s" class="card-img-top" alt="Platillo 3">
                <div class="card-body">
                    <h5 class="card-title">Murciélago Vampiro Común (Desmodus rotundus)</h5>
                    <p class="card-text">
                    <strong>✅ Descripción:</strong> Es el único mamífero volador que se alimenta exclusivamente de sangre (hematófago). Se orienta mediante la ecolocalización.
                    <br><strong>✅ Alimentación:</strong> Hematófago (sangre de mamíferos y aves).
                    <br><strong>✅ Hábitat:</strong> América Latina, en zonas tropicales y subtropicales.
                    <br><strong>✅ Esperanza de vida:</strong>9-12 años en libertad, hasta 20 en cautiverio.
                    <br><strong>✅ Dato Curioso:</strong> Comparte su alimento con otros murciélagos de su grupo si no han comido, mostrando un comportamiento social único.

                </div>
            </div>
        </div>

    </div>
</div>
@endsection