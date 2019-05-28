<table class="table table-bordered table-striped">
<thead>
<th>Id</th>
<th>prix</th>
<th>titre</th>
</thead>

@foreach($lesMangas as $manga)
    <tr>
        <td> {{ $manga->getIdManga() }}</td>
        <td> {{ $manga->getPrix() }}</td>
        <td> {{ $manga->getTitre() }}</td>
        <td>{{$manga->getGenre()}}</td>
    </tr>
    @endforeach

    </table>
