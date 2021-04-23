@extends('layouts.main')

@section('head')
<!-- fuente de letra -->
{{-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet"> --}}
<style type="text/css">
.titulo-body {
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 24px;
line-height: 27px;	
position: absolute;
}
.izquierda {
margin-top: 85px;
width: 255px;
height: 385px;
background: #FFFFFF;
border: 3px solid #DBDBDB;
box-sizing: border-box;
box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.24);
border-radius: 4px;
}

.centrada	{
margin-top: 75px;
width: 280px;
height: 410px;
background: #FFFFFF;
border: 3px solid #0C2849;
box-sizing: border-box;
box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.24), 0px 8px 16px rgba(0, 0, 0, 0.08), 0px 8px 32px rgba(0, 0, 0, 0.1);
border-radius: 4px;
}
.etiqueta-promocion {
position: absolute;
top: -24px;
left: 234px;
}
.icono_plan {
position: absolute;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
-webkit-transform: translate(-50%, -50%);
}
.derecha {
margin-top: 85px;
width: 255px;
height: 385px;
background: #FFFFFF;
border: 3px solid #DBDBDB;
box-sizing: border-box;
box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.24);
border-radius: 4px;
}
.info-util {
/* position: absolute;
height: 24px; */
/* left: 18.99%;
right: 24.02%;
top: calc(50% - 24px/2 - 15px); */
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 16px;
line-height: 24px;
}
.info-util-contenido {


font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 14px;
line-height: 18px;
padding: 0 20px 0 20px;

}
.inicial{
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 33px;
margin-top: 20px;
/* identical to box height, or 183% */
text-align: center;
letter-spacing: 3.375px;
color: #1A1A1A;
}
.gratuito_y_profesional{
    font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 33px;
margin-top: 10px;
/* identical to box height, or 183% */
text-align: center;
letter-spacing: 3.375px;
color: #1A1A1A;
}
.dolar {
display: inline;
margin-top: 30px;
transform: translateX(-50%);
-webkit-transform: translateX(-50%);
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 32px;
line-height: 37px;
/* identical to box height */
color: #DE5214;
text-align: center;
}
.valor {
display: inline;
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 55px;
line-height: 75px;
/* identical to box height */
color: #DE5214;
}
.periodo {
display: inline;
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 18px;
margin-top: 30px;
margin-left: 2px;
/* identical to box height, or 129% */
color: #999999;
}
.condiciones {
margin-left: 0px; 
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 75%;
line-height: 229% ;
/* or 229% */
align-items: center;
color: #000000;
list-style: none;
}
/*viñetas de listas*/
.condiciones-item:before { 
	content:"•"; 
	font-size:15px; 
	vertical-align:top; 
	padding-right:10px; 
}
.boton-elegir, .boton-elegir:hover, .boton-elegir:focus {
text-decoration: none;
box-shadow: none;	
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 18px;
height: 129%;
background: #DE5214;
text-align: center;
outline:none;
color: #FFFFFF;	
}
.boton-oferta, .boton-oferta:hover, .boton-oferta:focus {
text-decoration: none;
box-shadow: none;
font-family: Roboto Condensed;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 18px;
height:129%;
text-align: center;
color: #1A1A1A;
background: #ffff;
border: 1px solid #000000;

}
.boton-elegir-profesional, .boton-elegir-profesional:hover, .boton-elegir-profesional:focus {
text-decoration: none;
box-shadow: none;	
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 18px;
height: 129%;
background: #DE5214;
text-align: center;
outline:none;
background: #0C2849;
text-align: center;
outline:none;
color: #FFFFFF;	
}
@media (max-width:415px) and (min-width:1px) {
    .info-util-contenido {
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 14px;
line-height: 18px;
padding: 0;

}
}
@media (max-width:770px) and (min-width:415px) {
.info-util-contenido {
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 14px;
line-height: 18px;
padding: 0 100px 0 100px;
}
.centrada	{
/* margin: 75px 200px  0 200px ; */
width: 280px;
height: 410px;
background: #FFFFFF;
border: 3px solid #0C2849;
box-sizing: border-box;
box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.24), 0px 8px 16px rgba(0, 0, 0, 0.08), 0px 8px 32px rgba(0, 0, 0, 0.1);
border-radius: 4px;
}
}
.cuerpo-main{
	background: #F2F2F2;
}

</style>
@endsection

@section('content')
<div class="container pt-5">
		<div class="row justify-content-center mr-0">
			<div class="col-9 col-sm-10 col-md-5 col-lg-3">
				<h1 class="titulo-body text-center">Eligí ahora tu plan de publicación</h1>			
			</div>	
		</div>
	</div>
	<div class="container">
		<div class="row mx-0 justify-content-center">
			<div class="izquierda text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 pt-5 mt-3">
							<svg class ="icono_plan" width="56" height="48" viewBox="0 0 56 48" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M31.6094 13.5H28.9998C28.42 13.5 27.909 13.3016 27.4919 12.9128C27.3063 12.7397 27.1297 12.4765 26.9454 12.1152C26.8199 11.8693 26.9175 11.5681 27.1635 11.4426C27.4094 11.3171 27.7106 11.4147 27.8361 11.6607C27.9721 11.9272 28.0904 12.1035 28.1739 12.1814C28.4045 12.3964 28.6714 12.5 28.9998 12.5H32.3902L34.6412 21.5041C34.8277 21.5102 35.0124 21.5232 35.1952 21.5427C35.4595 21.5145 35.728 21.5 35.9998 21.5C36.5727 21.5 37.1307 21.5642 37.6668 21.6859L39.8948 17.8751L38.3582 15H37.3906H36.3906L35.3906 14V13H42.3906V14L40.3906 15H39.492L40.561 17H55.3906V18L46.3906 29H43.4998C43.4998 33.1421 40.1419 36.5 35.9998 36.5C35.728 36.5 35.4596 36.4855 35.1952 36.4573C34.9309 36.4855 34.6624 36.5 34.3906 36.5C30.2485 36.5 26.8906 33.1421 26.8906 29C26.8906 25.1183 29.8395 21.9254 33.6192 21.5392L31.6094 13.5ZM33.9425 22.8323C31.3609 23.693 29.4998 26.1292 29.4998 29C29.4998 32.3174 31.985 35.0544 35.1952 35.4507C38.4054 35.0544 40.8906 32.3174 40.8906 29H37.4998C37.4998 29.8284 36.8282 30.5 35.9998 30.5C35.7037 30.5 35.4277 30.4142 35.1952 30.2662C34.9627 30.4142 34.6867 30.5 34.3906 30.5C33.5622 30.5 32.8906 29.8284 32.8906 29C32.8906 28.214 33.4951 27.5693 34.2645 27.5052L34.8573 26.4914L33.9425 22.8323ZM36.1418 27.5066L35.9263 26.6443L37.7891 23.4581C39.3798 24.4357 40.5176 26.079 40.8142 28H37.1179C36.8728 27.7262 36.5287 27.543 36.1418 27.5066ZM35.5793 25.2564L34.9128 22.5905C35.0063 22.5747 35.1004 22.561 35.1952 22.5493C35.7915 22.6229 36.3628 22.7773 36.8978 23.0012L35.5793 25.2564ZM45.3062 28L40.448 18.9101L38.6518 21.9824C41.1857 22.9404 43.0648 25.2315 43.4337 28H45.3062ZM42.4233 28C42.1358 26.1375 41.0575 24.536 39.5423 23.5493C40.76 24.7006 41.5921 26.2555 41.8245 28H42.4233ZM42.4998 29C42.4998 31.2831 41.3227 33.2913 39.5423 34.4507C40.9884 33.0835 41.8906 31.1471 41.8906 29H42.4998ZM30.8481 34.4507C29.0677 33.2913 27.8906 31.2831 27.8906 29C27.8906 26.7169 29.0677 24.7087 30.8481 23.5493C29.4021 24.9165 28.4998 26.8529 28.4998 29C28.4998 31.1471 29.4021 33.0835 30.8481 34.4507ZM41.0954 18H54.0986L46.2333 27.6131L41.0954 18ZM34.4998 29C34.4998 28.8375 34.5256 28.681 34.5734 28.5345C34.5168 28.5122 34.4551 28.5 34.3906 28.5C34.1145 28.5 33.8906 28.7239 33.8906 29C33.8906 29.2761 34.1145 29.5 34.3906 29.5C34.4551 29.5 34.5168 29.4878 34.5734 29.4655C34.5256 29.319 34.4998 29.1625 34.4998 29ZM35.9998 29.5C35.9353 29.5 35.8736 29.4878 35.817 29.4655C35.8648 29.319 35.8906 29.1625 35.8906 29H36.4998C36.4998 29.2761 36.2759 29.5 35.9998 29.5Z" fill="#999999"/>
							</svg>
						</div>
                        <div class=" col-12 text-center">
						    <h1 class="gratuito_y_profesional">GRATUITO</h1>
                        </div>
                        <div class="col-12 text-center pb-3">
						<h1 class="dolar pl-3">$<h1 class="valor">0</h1><span class="periodo"> /mes</span></h1>
						</div>
                        <div class="col-12 text-left px-0 py-2">
                            <ul class="condiciones text-left">
                                <li class="condiciones-item">1 Publicación por mes</li>
                                <li class="condiciones-item">10 Preguntas al mes</li>
                                <li class="condiciones-item">Sin destacar</li>
                            </ul>
                        </div>
					</div>
                    <div class="px-3">
                        <button class="btn btn-block boton-oferta black">Oferta</button>
                    </div>
				</div>
			</div>
			<div class="centrada text-center">
				<div class="container">
					<div class="row">
						
					</div>
					<div class="row justify-content-center">
						<div class="col-12 pt-5 mt-3">
                        <svg class="etiqueta-promocion" width="30" height="40" viewBox="0 0 30 40" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M5.00139 0H29.0014L24 5H0L5.00139 0Z" fill="#8C3711"/>
						<path d="M5 0H29V40L17 32.1951L5 40V0Z" fill="#DE5214"/>
						</svg>
						<svg class ="icono_plan" width="48" height="50" viewBox="0 0 48 50" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M17.6986 15.5H25.8676C26.7458 15.5 27.5595 15.9607 28.0114 16.7138L30.8831 21.5H12.1169L14.6973 17.1993C15.3299 16.145 16.4692 15.5 17.6986 15.5ZM27.1539 17.2283C26.8828 16.7764 26.3945 16.5 25.8676 16.5H19.5V20.5H29.1169L27.1539 17.2283ZM18.5 20.5V16.5H17.6986C16.8204 16.5 16.0066 16.9607 15.5548 17.7138L13.8831 20.5H18.5ZM8.78729 34.8491C7.98715 33.9626 7.5 32.7882 7.5 31.5C7.5 28.7386 9.73858 26.5 12.5 26.5C13.624 26.5 14.6614 26.8709 15.4965 27.497C16.2842 26.862 17.2769 26.5 18.3213 26.5H28.6787C29.9486 26.5 31.142 27.0351 31.9835 27.9456C32.8867 27.0519 34.1289 26.5 35.5 26.5C38.2614 26.5 40.5 28.7386 40.5 31.5C40.5 32.6644 40.102 33.7358 39.4346 34.5856C40.2917 34.8633 41.1333 35.1883 41.9556 35.5593C43.5044 36.258 44.5 37.7994 44.5 39.4984V42.7003C44.5 43.6882 43.9182 44.5835 43.0153 44.9848L42.4459 45.2379C42.0875 47.6633 39.9963 49.5 37.5 49.5C35.0979 49.5 33.0658 47.7979 32.6 45.5H26H19.4C18.9342 47.7979 16.9021 49.5 14.5 49.5C11.9832 49.5 9.88174 47.6341 9.54653 45.1849C8.31771 44.6241 7.5 43.39 7.5 42V38C7.5 36.7731 7.99103 35.6608 8.78729 34.8491ZM28.6787 27.5C29.7128 27.5 30.6816 27.9562 31.3394 28.726C30.8092 29.5198 30.5 30.4738 30.5 31.5C30.5 34.2614 32.7386 36.5 35.5 36.5C36.6919 36.5 37.7864 36.0829 38.6455 35.3868C39.634 35.6838 40.6024 36.0459 41.5444 36.4708C42.7348 37.0078 43.5 38.1925 43.5 39.4984V42.7003C43.5 43.293 43.1509 43.8302 42.6092 44.071L41.5103 44.5594L41.4847 44.8531C41.3052 46.9089 39.5778 48.5 37.5 48.5C35.4564 48.5 33.7471 46.9595 33.5244 44.9451L33.4752 44.5H18.5248L18.4756 44.9451C18.3631 45.9622 17.8717 46.8584 17.1497 47.4966C16.4441 48.121 15.5163 48.5 14.5 48.5C13.4536 48.5 12.501 48.0982 11.7882 47.4405C11.0652 46.774 10.5875 45.8435 10.5108 44.797L10.4868 44.4695L10.1768 44.3614C9.18093 44.0143 8.5 43.072 8.5 42V38C8.5 37.0317 8.89318 36.1553 9.52858 35.5217C10.3593 36.1365 11.3872 36.5 12.5 36.5C15.2614 36.5 17.5 34.2614 17.5 31.5C17.5 30.2279 17.0249 29.0667 16.2425 28.1842C16.8348 27.747 17.5604 27.5 18.3213 27.5H28.6787ZM32.5858 28.7674L32.5832 28.7628C33.3129 27.9855 34.3497 27.5 35.5 27.5C37.7091 27.5 39.5 29.2909 39.5 31.5C39.5 32.5757 39.0754 33.5523 38.3846 34.2712C37.992 34.1631 37.5967 34.0648 37.1989 33.9764L35.3244 33.5599L35.2835 33.4884C35.3546 33.4961 35.4269 33.5 35.5 33.5C36.6046 33.5 37.5 32.6046 37.5 31.5C37.5 30.3954 36.6046 29.5 35.5 29.5C34.6889 29.5 33.9907 29.9828 33.6768 30.6766L32.5858 28.7674ZM36.982 34.9526C37.1092 34.9809 37.2362 35.0102 37.3629 35.0406C36.8066 35.334 36.1727 35.5 35.5 35.5C33.2909 35.5 31.5 33.7091 31.5 31.5C31.5 30.8378 31.6609 30.2131 31.9458 29.663L34.6756 34.4401L36.982 34.9526ZM15.5299 28.8885C16.1344 29.5892 16.5 30.5019 16.5 31.5C16.5 33.7091 14.7091 35.5 12.5 35.5C11.7228 35.5 10.9974 35.2784 10.3835 34.8948C10.8671 34.6426 11.4169 34.5 12 34.5H12.2902L12.8825 33.4635C13.8041 33.285 14.5 32.4738 14.5 31.5C14.5 31.2659 14.4598 31.0412 14.3859 30.8325L15.2824 29.2635C15.3574 29.1323 15.4402 29.0071 15.5299 28.8885ZM11.7044 33.5096L11.785 33.3684C11.0336 33.0807 10.5 32.3527 10.5 31.5C10.5 30.3954 11.3954 29.5 12.5 29.5C12.9714 29.5 13.4046 29.6631 13.7465 29.9359L14.4142 28.7674C14.5251 28.5732 14.6493 28.3893 14.7852 28.2166C14.1374 27.7649 13.3496 27.5 12.5 27.5C10.2909 27.5 8.5 29.2909 8.5 31.5C8.5 32.5485 8.90341 33.5028 9.56347 34.2161C10.188 33.8131 10.9187 33.5605 11.7044 33.5096ZM12.2935 32.4786L13.2382 30.8254C13.0553 30.6254 12.7923 30.5 12.5 30.5C11.9477 30.5 11.5 30.9477 11.5 31.5C11.5 31.9815 11.8403 32.3835 12.2935 32.4786ZM35.5 32.5C36.0523 32.5 36.5 32.0523 36.5 31.5C36.5 30.9477 36.0523 30.5 35.5 30.5C34.9477 30.5 34.5 30.9477 34.5 31.5C34.5 32.0523 34.9477 32.5 35.5 32.5ZM20 23.5C20 23.2239 20.2239 23 20.5 23H22.5C22.7761 23 23 23.2239 23 23.5C23 23.7761 22.7761 24 22.5 24H20.5C20.2239 24 20 23.7761 20 23.5Z" fill="#999999"/>
						</svg>
						</div>
                        <div class=" col-12 text-center">
						    <h1 class="inicial ">INICIAL</h1>
                        </div>
                        <div class="col-12 text-center pb-3">
						<h1 class="dolar pl-3">$<h1 class="valor">10</h1><span class="periodo"> /mes</span></h1>
						</div>
                        <div class="col-12 text-left px-0 py-2">
                            <ul class="condiciones text-left">
                                <li class="condiciones-item">Sin límete de publicaciones</li>
                                <li class="condiciones-item">Sin límite de preguntas</li>
                                <li class="condiciones-item">1 Publicación destacada</li>
                            </ul>
                        </div>
					</div>
						<div class="px-3">
							<button class="btn btn-block boton-elegir">Elegir</button>
						</div>
				</div>
			</div>
			<div class="derecha text-center">
					<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 pt-5 mt-3">
                        	<svg class ="icono_plan" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M27.6096 15.3124C27.4371 15.0967 27.472 14.7821 27.6877 14.6096C27.9033 14.4371 28.2179 14.472 28.3904 14.6877L32.3752 19.6687C35.3551 19.9673 38.3117 20.6624 41.2442 21.7537C42.6004 22.2584 43.5 23.5529 43.5 25V27.5858C43.5 28.6239 43.0876 29.6195 42.3536 30.3536L42.2071 30.5H41.5C41.5 33.2614 39.2614 35.5 36.5 35.5C33.7386 35.5 31.5 33.2614 31.5 30.5H24H16.5C16.5 33.2614 14.2614 35.5 11.5 35.5C8.73858 35.5 6.5 33.2614 6.5 30.5H6.00502L5.86543 30.3825C4.9997 29.6534 4.5 28.5793 4.5 27.4475V25.163C4.5 24.3119 4.72931 23.4765 5.16382 22.7447C5.6021 22.0066 6.25341 21.4183 7.03219 21.0571L8.13339 20.5464C9.61973 19.8571 11.2384 19.5 12.8768 19.5H15.5V16.5908C15.5 15.9884 15.9884 15.5 16.5908 15.5C17.1467 15.5 17.6512 15.8249 17.8813 16.3309L19.3219 19.5H29C29.6702 19.5 30.3393 19.5198 31.0073 19.5595L27.6096 15.3124ZM19.7765 20.5H15.5L12.8769 20.5C11.3838 20.5 9.90862 20.8254 8.55411 21.4536L7.45291 21.9643C6.85717 22.2406 6.35894 22.6906 6.02368 23.2553C5.6809 23.8326 5.5 24.4916 5.5 25.163V27.4475C5.5 28.2255 5.81928 28.9665 6.37846 29.5H6.60002C7.06329 27.2178 9.08104 25.5 11.5 25.5C13.919 25.5 15.9367 27.2178 16.4 29.5H31.6C32.0633 27.2178 34.081 25.5 36.5 25.5C38.919 25.5 40.9367 27.2178 41.4 29.5H41.7832C42.2439 28.9711 42.5 28.2917 42.5 27.5858V25C42.5 23.9707 41.8601 23.0499 40.8955 22.6909C36.9693 21.2299 33.005 20.5 29 20.5L19.7765 20.5ZM18.2235 19.5L16.9709 16.7448C16.9032 16.5957 16.7545 16.5 16.5908 16.5C16.5407 16.5 16.5 16.5407 16.5 16.5908V19.5H18.2235ZM7.50153 30.388C7.50051 30.4253 7.5 30.4626 7.5 30.5C7.5 32.7091 9.29086 34.5 11.5 34.5C13.7091 34.5 15.5 32.7091 15.5 30.5C15.5 30.4486 15.499 30.3973 15.4971 30.3461C15.4162 28.2083 13.6576 26.5 11.5 26.5C9.32831 26.5 7.56084 28.2307 7.50153 30.388ZM32.5061 30.2765C32.502 30.3507 32.5 30.4252 32.5 30.5C32.5 32.7091 34.2909 34.5 36.5 34.5C38.7091 34.5 40.5 32.7091 40.5 30.5C40.5 30.387 40.4953 30.2746 40.486 30.163C40.3149 28.1115 38.5956 26.5 36.5 26.5C34.3659 26.5 32.6221 28.1713 32.5061 30.2765ZM9.5 30.5C9.5 31.6046 10.3954 32.5 11.5 32.5C12.6046 32.5 13.5 31.6046 13.5 30.5C13.5 29.3954 12.6046 28.5 11.5 28.5C10.3954 28.5 9.5 29.3954 9.5 30.5ZM12.5 30.5C12.5 31.0523 12.0523 31.5 11.5 31.5C10.9477 31.5 10.5 31.0523 10.5 30.5C10.5 29.9477 10.9477 29.5 11.5 29.5C12.0523 29.5 12.5 29.9477 12.5 30.5ZM36.5 32.5C35.3954 32.5 34.5 31.6046 34.5 30.5C34.5 29.3954 35.3954 28.5 36.5 28.5C37.6046 28.5 38.5 29.3954 38.5 30.5C38.5 31.6046 37.6046 32.5 36.5 32.5ZM36.5 31.5C37.0523 31.5 37.5 31.0523 37.5 30.5C37.5 29.9477 37.0523 29.5 36.5 29.5C35.9477 29.5 35.5 29.9477 35.5 30.5C35.5 31.0523 35.9477 31.5 36.5 31.5Z" fill="#999999"/>
							</svg>
						</div>
                        <div class=" col-12 text-center">
						    <h1 class="gratuito_y_profesional">PROFESIONAL</h1>
                        </div>
                        <div class="col-12 text-center pb-3">
						<h1 class="dolar pl-3">$<h1 class="valor">20</h1><span class="periodo"> /mes</span></h1>
						</div>
                        <div class="col-12 text-left px-0 py-2">
                            <ul class="condiciones text-left">
                                <li class="condiciones-item">Sin limite de publicaciones</li>
                                <li class="condiciones-item">Sin limite de preguntas</li>
                                <li class="condiciones-item">5 publicaciones destadas</li>
                            </ul>
                        </div>
					</div>
                    <div class="px-3">
                        <button class="btn btn-block boton-elegir-profesional black">Elegir</button>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col-12 ">
				<h1 class="info-util text-center">Información útil</h1>			
			</div>	
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-7 col-lg-3 px-3">
				<h1 class="info-util-contenido text-center">Mostramos este mensaje una vez por mes. Podés editar tu plan en tu perfil</h1>			
			</div>	
		</div>
	</div>
@endsection
