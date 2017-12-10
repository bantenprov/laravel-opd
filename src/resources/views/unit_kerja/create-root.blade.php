<form action="{{route('storeRoot')}}" method="post">

    <table>
    
        <tr>
            <td><b>Root</b></td>
        </tr>
        <tr>
            <td>Kode Unit Kerja</td>
            <td>:</td>
            <td><input type="text" name="kunker"></td>            
        </tr>
        <tr>
            <td>Nama Unit Kerja</td>
            <td>:</td>
            <td><input type="text" name="name"></td>            
        </tr>
        <tr>
            <td>Level Unit Kerja</td>
            <td>:</td>
            <td>
                <select name='levelunker'>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>            
        </tr> 
        <tr>
            <td>Nama Jabatan</td>
            <td>:</td>
            <td><input type="text" name="njab"></td>            
        </tr>
        <tr>
            <td>Nama Pejabat</td>
            <td>:</td>
            <td><input type="text" name="npej"></td>            
        </tr>
        <tr>
            <td>Kode Unit Kerja Simral</td>
            <td>:</td>
            <td><input type="text" name="kunker_simral"></td>            
        </tr>
        <tr>
            <td>Kode Unit Kerja Sinjab</td>
            <td>:</td>
            <td><input type="text" name="kunker_sinjab"></td>            
        </tr>

    </table>
    

    <button type="submit">Submit</button>
    {{ csrf_field() }}
    
</form>