<table border='1'>

    <tr>
        <td>Kode</td>
        <td>Unit Kerja</td>
        <td>Level</td>
        <td>Action</td>
    </tr>
    @foreach($opds as $opd)
        <tr>
            <td>{{$opd->kunker}}</td>                
            <td>{{$opd->name}}</td>
            <td>{{$opd->levelunker}}</td>
            <td>
                <a href="{{ route('addChild',$opd->id)}}"> Add child </a>
            </td>
        </tr>
    @endforeach


</table>