<!DOCTYPE html>
<html>
<head>
    <title>REPORTE LOCALES</title>
</head>
<body>
  
   
    <h1 style="text-align: center">REPORTE DE LOCALES DEL CENTRO COMERCIAL</h1>
    <table style="border: 1px solid black; padding: 8px;">
        <thead>
            <tr>
                <th style="font-size:70%;font-weight:bold ">NOMBRE LOCAL</th>
                <th style="font-size:70%;font-weight:bold ">UBICACION</th>
                <th style="font-size:70%;font-weight:bold ">REPRESENTANTE LEGAL</th>
                <th style="font-size:70%;font-weight:bold ">TELEFONO</th>
                <th style="font-size:70%;font-weight:bold ">CATEGORIA</th>
                <th style="font-size:70%;font-weight:bold ">SUBCATEGORIA</th>
                <th style="font-size:70%;font-weight:bold ">ESTADO</th>
                
                <!-- Agrega las columnas adicionales que desees mostrar -->
            </tr>
        </thead>
        <tbody >
            @foreach ($local as $locales)
            <tr style="font-size:70%; padding-top:8px " >
                <td>{{ strtoupper ($locales->namelocal) }}</td>
                <td>{{strtoupper ($locales->ubicacion) }}</td>
                <td>{{ strtoupper ($locales->namelegal.' '.$locales->apellidoslegal)}}</td>
                <td>{{strtoupper  ($locales->telefono )}}</td>
                <td>{{ strtoupper ($locales->namecategoria) }}</td>
                <td>{{strtoupper  ($locales->namesubcategorias) }}</td>
                <td>{{strtoupper( $locales->estado) }}</td>
                
                <!-- Agrega las celdas adicionales que desees mostrar -->
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
