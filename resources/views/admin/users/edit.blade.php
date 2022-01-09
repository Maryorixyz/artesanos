@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
 
    <div class="card">
        <div class="card-body">
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}
                        </div>
    
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror    
                    </div>
                    
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('telefono', 'Telefono') !!}
                            {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una Telefono']) !!}
                        </div>
    
                        @error('contacto')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un email']) !!}
                        </div>
        
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('password', 'Contraseña') !!}
                            {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una contraseña']) !!}
                        </div>
        
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('direccion', 'Dirección') !!}
                            {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una Telefono']) !!}
                        </div>
        
                        @error('direccion')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::hidden('latitud', null, [ 'id' => 'latitud']) !!}
                            {!! Form::hidden('longitud', null, [ 'id' => 'longitud']) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div id="mapa" class="mapa">
                        
                    </div>
                </div>

                <div class="form-group">
                    <label class="label">Sexo</label>
                    <div class="form-check">
                            {!! Form::radio('sexo', 'F', null, ['class' => "form-check-input"]) !!}
                            <label> F</label>
                    </div>
                    <div class="form-check">
                            {!! Form::radio('sexo', 'M', null, ['class' => "form-check-input"]) !!}
                            <label> M</label>
                    </div>
                </div> 
                    {!! Form::submit('Actualizar Artesano', ['class' => 'btn btn-primary ']) !!}
                    
            {!! Form::close() !!}
        </div>
    </div>

@stop



@section('css')
    <style>
        .mapa{
            min-height: 300px;
            width: 100%;

        }
    </style>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <!--API GOOGLE MAPS-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVC1S2qxpJi-LBZlgAe3cfDyY4HbGc1TA"></script>

    <script> 
        var style = [
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#e9e9e9"
                },
                {
                    "lightness": 17
                }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 20
                }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 17
                }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 29
                },
                {
                    "weight": 0.2
                }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 18
                }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 21
                }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#dedede"
                },
                {
                    "lightness": 21
                }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                {
                    "saturation": 36
                },
                {
                    "color": "#333333"
                },
                {
                    "lightness": 40
                }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                {
                    "visibility": "off"
                }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#f2f2f2"
                },
                {
                    "lightness": 19
                }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                {
                    "color": "#fefefe"
                },
                {
                    "lightness": 20
                }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                {
                    "color": "#fefefe"
                },
                {
                    "lightness": 17
                },
                {
                    "weight": 1.2
                }
                ]
            }
        ];
        var img_pin = '{{ asset("images/icons/pin-1.png")}}';

        var latitude = {{ $user->latitud }};
        var longitude = {{ $user->longitud }};
        var scrollwhell = 1;
        var draggable = 1;
        var map_zoom = 18;
        var locations = [
            ['<div class="infobox"><h4>Hola.!!</h4><p>Encuentrame en este punto, te espero.</p></div>'
                , latitude, longitude, 2],
        ];

        var map = new google.maps.Map(document.getElementById('mapa'), {
            zoom: Number(map_zoom),
            zoomControl: false,  
            disableDoubleClickZoom: true,
            scrollwheel: scrollwhell,
            navigationControl: true,
            mapTypeControl: false,
            scaleControl: false,
            draggable: draggable,
            styles: style,
            center: new google.maps.LatLng(latitude, longitude),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: img_pin, 
                draggable: true
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

        google.maps.event.addListener(marker, 'dragend', function(event){
            let position = this.getPosition()
            document.getElementById('latitud').value = position.lat()
            document.getElementById('longitud').value = position.lng()
        })
    </script>
@stop