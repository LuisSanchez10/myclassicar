@extends('layouts.main')

@section('head')
    <title>Vender</title>
    <style>
      /* establecer fondo gris */
      .cuerpo-main{
        background: #F2F2F2;
      }
      </style>
      <style>
        .contenedorFormVender{
              background-color:#fff;
              -webkit-box-shadow: 0px 1px 21px 0px rgba(0,0,0,0.05);
              -moz-box-shadow: 0px 1px 21px 0px rgba(0,0,0,0.05);
              box-shadow: 0px 1px 21px 0px rgba(0,0,0,0.05);
            }
            .titleVentasForm{
              color: #000;
              font-size: 0.8rem;
              font-weight: bold;
            }
            .textVIN{
              text-decoration: underline!important;
              color: #000;
              font-weight: bold;
              font-size: 0.8rem;
            }
            .textVIN:hover{
              text-decoration: underline!important;
              color: #000;
            }
           
            .inputFormVender{
              height: 48px !important;
              outline: none!important;
              width: 100%;

              background: #FFFFFF;
              border: 1px solid #DBDBDB;
              box-sizing: border-box;
              border-radius: 4px !important;

              font-family: Roboto Condensed;
              font-style: normal;
              font-weight: 300;
              font-size: 14px;
              line-height: 18px;
              padding: 10px;
            }
            .inputFormVender:focus{
              border: solid 1px #000;
            }
      
          .textareaFormVender{
              min-height: 48px !important;
              outline: none !important;
              width: 100%;
              background: #FFFFFF;
              border: 1px solid #DBDBDB;
              box-sizing: border-box;
              border-radius: 4px !important;

              font-family: Roboto Condensed;
              font-style: normal;
              font-weight: 300;
              font-size: 14px;
              line-height: 18px;
              padding: 10px;
            }

            .form_titulo{
              font-family: Roboto Condensed;
              font-style: normal;
              font-weight: bold;
              font-size: 24px;
              line-height: 32px;
              /* identical to box height, or 133% */
              color: #DE5214;
            }
      
            .form-subtitulo{
              font-family: Roboto Condensed;
              font-style: normal;
              font-weight: bold;
              font-size: 18px;
              line-height: 24px;
            }
            .form-subtitulo.disabled{
              color: #999999;
            }
          
            .form-reinicio{
              font-family: Roboto Condensed;
              font-style: normal;
              font-weight: normal;
              font-size: 16px;
              line-height: 19px;
              /* identical to box height */
              color: #999999;
            }
      
            .form-italic{
              font-family: Roboto Condensed;
              font-style: italic;
              font-weight: normal;
              font-size: 12px;
              line-height: 16px;
              /* identical to box height, or 133% */
              color: #999999;
            }
      
          .input-titulo{
            font-family: Roboto Condensed;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 16px;

            color: #000000;
          }

          .text-form{
            font-family: Roboto Condensed;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 18px;
          }

          .optional{
            font-family: Roboto Condensed;
            font-style: italic;
            font-weight: normal;
            font-size: 12px;
            line-height: 16px;
            color: #999999;
          }
          .inputKilimetraje{
            display: flex;
            width: 100%;
            margin: 0;
            padding: 0;
            border-radius: 4px 0 0 4px;
          }
          .inputFormVender:focus{
              border: solid 1px #000;
            }
          .inputKilimetraje >.kilometros{
            width: 80%;
            height: 48px;
            outline: none!important;

            background: #FFFFFF;
            border: 1px solid #DBDBDB;
            box-sizing: border-box;
            border-radius: 4px 0 0 4px;

            font-family: Roboto Condensed;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 18px;
            padding: 15px;
          }

          .inputKilimetraje > .unidad{
            width: 20%;
            height: 48px;
            background: #FFFFFF;
            border: 1px  solid #DBDBDB;
            border-left:none; 
            box-sizing: border-box;
            border-radius: 0 4px 4px 0;
            font-family: Roboto Condensed;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 18px;
          }

          .inputKilimetraje >.unidad >span {
            align-self: center;
            text-align: center;
          }


          .inputpar{
            display: flex;
            width: 100%;
            margin: 0;
            padding: 0;
          }
          .inputpar:focus{
              border: solid 1px #000;
            }

            .inputpar >.option-l{
            width: 50%;
            height: 48px;

            background: #FFFFFF;
            border: 1px solid #DBDBDB;
            box-sizing: border-box;
            border-radius: 4px 0 0 4px;

            font-family: Roboto Condensed;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 18px;
            padding: 15px;
            cursor: pointer;
          }

          .inputpar > .option-r{
            width: 50%;
            height: 48px;
            background: #FFFFFF;
            border: 1px  solid #DBDBDB;
            border-left:none; 
            box-sizing: border-box;
            border-radius: 0 4px 4px 0;
            font-family: Roboto Condensed;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 18px;
            padding: 15px;
            cursor: pointer;
          }

          .inputpar >.unidad >span {
            align-self: center;
            text-align: center;
          }

          .inputpar span:hover{
            background: #0C2849;
            color: #fff;
          }
          .inputpar >.selected{
            background: #0C2849;
            color: #fff;
          }

          .btn-atras{
            height: 48px;
            border: 1px solid #000000;
            box-sizing: border-box;
            border-radius: 4px;
            background: #fff;
            font-family: Roboto Condensed;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 18px;
            text-align: center;
            color: #1A1A1A;
          }

          .btn-siguiente{
            height: 48px;
            box-sizing: border-box;
            border-radius: 4px;
            background: #DE5214;
            font-family: Roboto Condensed;
            font-style: normal;
            font-weight: bold;
            font-size: 14px;
            line-height: 18px;
            text-align: center;
            color: #FFFFFF;
          }
          .btn-siguiente.disabled{
            background: #DBDBDB;
          }
          .btn-siguiente:hover{
            color: #FFFFFF;
          }
      </style>
      <script>
        $(function(){
          $('#seccion-vehiculo').show();
          $('#seccion-ficha').hide();
          $('#seccion-fotos').hide();
          $('#seccion-datos_venta').hide();
        });
      </script>
@endsection
@section('content')
  @include('vender_editar.form_vender')
@endsection