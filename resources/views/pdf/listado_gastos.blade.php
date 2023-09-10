<!DOCTYPE html>
<html>

<head>
    <title>Listado General de Gastos</title>
</head>

<body>
    <div class="container">

        <div class="fecha">
            {{ date('d/m/Y') }}
        </div>

        <h1>Listado General de Gastos</h1>

        <div class="empresa-info">
            @foreach($empresas as $empresa)
            <p>{{ $empresa->nom_emp }}</p>
            <p>{{ $empresa->pai_emp }}, {{ $empresa->reg_emp }}, {{ $empresa->dir_emp }}</p>
            <p>Código Postal: {{ $empresa->cod_pos_emp }}</p>
            <p>Nit: {{ $empresa->nit_emp }}</p>
            @endforeach
        </div>

        <div class="nit-space"></div>

        <div class="fecha-informe">
            @if (!empty($dateRange))
            Intervalo de Fechas: {{ $dateRange }}
            @endif
        </div>

        <div class="nit-space"></div>

        <table>
            <thead>
                <tr>
                    <th>Viaje</th>
                    <th>Camión</th>
                    <th>Categoría</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gastos as $gasto)
                <tr>
                    <td>{{ $gasto->viaje }}</td>
                    <td>{{ $gasto->camion }}</td>
                    <td>{{ $gasto->categoria }}</td>
                    <td>{{ $gasto->monto }}</td>
                    <td>{{ $gasto->fecha }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="footer">
        <div class="page-number"></div>
    </div>

    <script>
    var pageCount = 0;
    var pageHeight = 0;

    window.onload = function() {
        var table = document.querySelector('table');
        var rows = table.rows;
        pageHeight = window.innerHeight;

        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var rowHeight = row.clientHeight;

            if (pageHeight - pageCount < rowHeight) {
                pageCount = 0;
                var pageNumber = document.createElement('div');
                pageNumber.className = 'page-number';
                pageNumber.style.pageBreakBefore = 'always';
                pageNumber.textContent = 'Página ' + (i + 1);
                document.body.appendChild(pageNumber);
            }

            pageCount += rowHeight;
        }
    }
    </script>
</body>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .container {
        width: 100%;
        margin: 0 auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    h1 {
        text-align: center;
    }

    /* Estilos para la información de la empresa */
    .empresa-info {
        text-align: center;
        margin: 0 auto;
    }

    .empresa-info p {
        margin: 0;
    }

    /* Estilo para espacio después del Nit */
    .nit-space {
        margin-bottom: 10px;
    }

    /* Estilo para la fecha en el lado superior derecho */
    .fecha {
        text-align: right;
    }

    /* Estilo para el pie de página */
    .footer {
        position: absolute;
        bottom: 20px;
        left: 0;
        right: 0;
        text-align: center;
    }

    /* Estilo para el número de página */
    .page-number:before {
        content: "Página "counter(page);
    }

    /* Estilo para el intervalo de fechas en el lado superior izquierdo */
    .fecha-informe {
        text-align: center;
    }
</style>

</html>