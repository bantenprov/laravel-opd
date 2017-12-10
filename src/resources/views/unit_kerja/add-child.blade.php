<form action="{{route('storeChild',$unit_kerja->id)}}" method="post">

    <table>
    
        <tr>
            <td><b>Root</b></td>
        </tr>
        <tr>
            <td>Root</td>
            <td>:</td>
            <td>  
                {{ $unit_kerja->kunker }} - {{ $unit_kerja->name }}
                <input type="hidden" name="root" value="{{ $unit_kerja->id }}" >
            </td>            
        </tr>
            <td><b>Children</b></td>
        </tr>
        <tr>
            <td>Kode Unit Kerja</td>
            <td>:</td>
            <td><input type="text" name="c_kunker"></td>            
        </tr>
        <tr>
            <td>Nama Unit Kerja</td>
            <td>:</td>
            <td><input type="text" name="c_name"></td>            
        </tr>    
        <tr>
            <td>Level Unit Kerja</td>
            <td>:</td>
            <td>
                <select name='c_levelunker'>
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
            <td><input type="text" name="c_njab"></td>            
        </tr>
        <tr>
            <td>Nama Pejabat</td>
            <td>:</td>
            <td><input type="text" name="c_npej"></td>            
        </tr>
        <tr>
            <td>Kode Unit Kerja Simral</td>
            <td>:</td>
            <td><input type="text" name="c_kunker_simral"></td>            
        </tr>
        <tr>
            <td>Kode Unit Kerja Sinjab</td>
            <td>:</td>
            <td><input type="text" name="c_kunker_sinjab"></td>            
        </tr> 

    </table>
    

    <button type="submit">Submit</button>
    {{ csrf_field() }}
    
</form>