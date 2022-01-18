@extends('layouts.plantilla')

@section('titulo', 'Nosotros')

@section('css')

	<link rel="stylesheet" type="text/css" href="{{ mix("css/nosotros.css") }}">

@endsection

@section('classes-header', 'header-v4')
	
@section('contenido')

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92 banner">
		<h2 class="ltext-105 cl0 txt-center">
			Nosotros
		</h2>
	</section>	

	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Asociaciones de Artesanos
						</h3>

						<p class="stext-113 cl6 p-b-26">
							El alcalde del Distrito de Amarilis señaló que Amarilis alberga al 90 % de bordadores de la región Huánuco, los artesanos, a los tejedores y es importante reconocer su labor, visibilizando el trabajo que a diario realizan.
							Teniendo en cuenta que se considera a una asociacion de artesanos como:
							Organización sin fines lucrativos, legalmente constituida, cuyos miembros son artesanos o empresas de la actividad artesanal, o ambos, que tiene por objeto principal, el fomento y la defensa de la artesanía, y que se encuentra inscrita en el Registro Nacional del Artesano.
						</p>

						<p class="stext-113 cl6 p-b-26">
							La Municipalidad Distrital de Amarilis reconocerá y promocionará trabajos de los artesanos del distrito con más de 50 años de experiencia en el rubro, ofreciendo sus productos elaborados a mano con recursos naturales del distrito y la región.
						</p>

						<p class="stext-113 cl6 p-b-26">
							Las diferentes Asociaciones que se encuentran inscritas en en el RNA contarán con un espacio dentro de esta plataforma donde mostraran todos sus productos y así poder ampliar su conexión con posibles clientes que requieran sus productos artesanales, logrando generar más ventas y de esta manera estaría descentralizando la gran cantidad de artesanos sin trabajos frecuentes para un sustento económico continuo en su calidad de vida.
						</p>
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/nosotros1.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Municipalidad de Amarilis
						</h3>

						<p class="stext-113 cl6 p-b-26">
							La Gerencia Municipal es el órgano responsable de dirigir la administración municipal, de conducir y articular el planeamiento, organización, ejecución, evaluación y supervisión de las acciones y actividades que se desarrollan en la Municipalidad Distrital de Amarilis, dentro del marco de los dispositivos legales vigentes.
							La Gerencia Municipal está a cargo de un Gerente Municipal quien depende del Alcalde  Distrital de Amarilis.
						</p>

						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<p class="stext-114 cl6 p-r-40 p-b-11">
								Funciones:
							</p>

							<span class="stext-111 cl8">
								<li>
									<ul>- Supervisar la formulación, ejecución y evaluación del Presupuesto Participativo Institucional de la Municipalidad Distrital de Amarilis, elevándolo al Alcalde Metropolitano para su presentación al Concejo Distrital</ul>
									<ul>- Supervisar el cumplimiento de las actividades, programas y prestación de los servicios públicos que brinda la Municipalidad Distrital de Amarilis, propiciando el trabajo coordinado entre las gerencias municipales. </ul>
									<ul>- Emitir Resoluciones de Gerencia Municipal Metropolitana en los asuntos materia de su competencia.</ul>
									<ul>- Coordinar y supervisar la función administrativa y gestión de la Sociedad de Beneficencia Pública de Amarilis Metropolitana, sin perjuicio de la función de fiscalización que corresponde al Concejo Metropolitano.</ul>
								</li>
							</span>
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="images/nosotros2.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	

@endsection

@section('js')
	
@endsection
