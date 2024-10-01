<div class="bg-primary text-white text-center">
    <h1>Ykua Software | Sistema de Gestion para Aguateras Paraguayas</h1>
</div>
<p>Detalle de cuidad:</p>
<table class="my-table">
    <thead>
        <tr>
            <th class='text-center'>
                id
        </th>
        <th class="text-left">
            Ciudad
        </th>
</tr>
</thead>
<tbody>
    <tr>
        <td class='text-center'>
            {{$ciudad->id}}
    </td>
    <td>
        {{$ciudad->nombre}}
    </td>
    </tr>
    </tbody>
</table>
<i>Descargado: {{$fecha}}</i>
