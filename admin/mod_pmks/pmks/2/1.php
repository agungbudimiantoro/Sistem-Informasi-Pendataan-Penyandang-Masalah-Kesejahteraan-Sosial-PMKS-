<div class="row border p-2">
    <table>
        <tr>
            <td colspan="8">
                <h5 style="text-transform:uppercase;">II. latar belakang keluarga</h5>
            </td>
        </tr>
        <tr>
            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_ayah" class="form-label">nm ayah</label></td>
            <td> <input type="text" value="<?= $data['nm_ayah'] ?>" readonly name="nm_ayah" class="form-control" id="nm_ayah" aria-describedby="emailHelp" required></td>

            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_pgl_ayah" class="form-label">nm pglan ayah</label></td>
            <td> <input type="text" value="<?= $data['nm_pgl_ayah'] ?>" readonly name="nm_pgl_ayah" class="form-control" id="nm_pgl_ayah" aria-describedby="emailHelp" required></td>

            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_ibu" class="form-label">status ayah:</label></td>
            <td> <input type="text" value="<?= $data['nm_ibu'] ?>" readonly name="nm_ibu" class="form-control" id="nm_ibu" aria-describedby="emailHelp" required></td>

        </tr>
        <tr>
            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_ibu" class="form-label">nm ibu</label></td>
            <td> <input type="text" value="<?= $data['nm_ibu'] ?>" readonly name="nm_ibu" class="form-control" id="nm_ibu" aria-describedby="emailHelp" required></td>

            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_pgl_ibu" class="form-label">nm pglan ibu</label></td>
            <td> <input type="text" value="<?= $data['nm_pgl_ibu'] ?>" readonly name="nm_pgl_ibu" class="form-control" id="nm_pgl_ibu" aria-describedby="emailHelp" required></td>

            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_pgl_ibu" class="form-label">status ibu:</label></td>
            <td> <input type="text" value="<?= $data['nm_pgl_ibu'] ?>" readonly name="nm_pgl_ibu" class="form-control" id="nm_pgl_ibu" aria-describedby="emailHelp" required></td>

        </tr>
    </table>
</div>