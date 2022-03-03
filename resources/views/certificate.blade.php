<!DOCTYPE html>

<html>

<head>

    <title>Certificado</title>
    {{-- <link type="text/css" href="app.css" rel="stylesheet" /> --}}
    <style type="text/css">
        @page {
            margin: 20;
        }
        * { padding: 5; margin: 5; }
        @font-face {
            font-family: "source_sans_proregular";
            src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;

        }
        body{
            font-family: "source_sans_proregular", Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;
        }
    </style>
</head>

<body>


    <table width="100%" height="200px">
        <tbody>
            <tr>
                <td style="width: 30%">
                    <img src="{{public_path('/imagenes/Logo.png')}}" alt="" width="80%">
                </td>
                <td style="width: 70%">
                    <h3><strong>CERTIFICADO Y TÍTULO DE PROPIEDAD</strong></h3>
                    <p>Myeart, certifica la autenticidad y propiedad de la obra detallada a continuación</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>

    <table style="width: 100%">
    <tbody>
      <tr style="width: 40%">
        <td rowspan="5"><img src="{{public_path($image_location)}}" alt="" width="90%"><br></td>
        <td><p><strong>Autor:<strong></p></td>
        <td>{{$buy->artwork->seller->user->profile->firstName}} {{$buy->artwork->seller->user->profile->lastName}}</td>
      </tr>
      <tr style="width: 60%">
        <td><p><strong>Nombre:<strong></p></td>
        <td>{{$buy->artwork->name}}</td>
      </tr>
      <tr>
        <td><p><strong>Categoría:<strong></p></td>
        <td>{{$buy->artwork->category->name}}</td>
      </tr>
      <tr>
        <td><p><strong>Descripción:<strong></p></td>
        <td>{{$buy->artwork->description}}<br></td>
      </tr>
      <tr>
        <td><p><strong>Propietario:<strong></p></td>
        <td>{{$buy->user->profile->firstName}} {{$buy->user->profile->lastName}}</td>
      </tr>
  </tbody>
    </table>



</body>

</html>
