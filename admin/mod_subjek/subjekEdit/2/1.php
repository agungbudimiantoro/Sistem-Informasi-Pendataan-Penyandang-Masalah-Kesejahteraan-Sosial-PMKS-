<div class="row border p-2">
    <table>
        <tr>
            <td colspan="8">
                <h5 style="text-transform:uppercase;">II. latar belakang keluarga</h5>
            </td>
        </tr>
        <tr>
            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_ayah" class="form-label">nm ayah</label></td>
            <td> <input type="text" value="<?= $data['nm_ayah'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> name="nm_ayah" class="form-control" id="nm_ayah" aria-describedby="emailHelp" required></td>

            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_pgl_ayah" class="form-label">nm pglan ayah</label></td>
            <td> <input type="text" value="<?= $data['nm_pgl_ayah'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> name="nm_pgl_ayah" class="form-control" id="nm_pgl_ayah" aria-describedby="emailHelp" required></td>

            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="pkj_ayah" class="form-label">pekerjaan ayah</label></td>
            <td> <input type="text" value="<?= $data['pkj_ayah'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> name="pkj_ayah" class="form-control" id="pkj_ayah" aria-describedby="emailHelp" required></td>
        </tr>
        <tr>
            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_ibu" class="form-label">nm ibu</label></td>
            <td> <input type="text" value="<?= $data['nm_ibu'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> name="nm_ibu" class="form-control" id="nm_ibu" aria-describedby="emailHelp" required></td>

            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_pgl_ibu" class="form-label">nm pglan ibu</label></td>
            <td> <input type="text" value="<?= $data['nm_pgl_ibu'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> name="nm_pgl_ibu" class="form-control" id="nm_pgl_ibu" aria-describedby="emailHelp" required></td>

            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="pkj_ibu" class="form-label">pekerjaan ibu</label></td>
            <td> <input type="text" value="<?= $data['pkj_ibu'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> name="pkj_ibu" class="form-control" id="pkj_ibu" aria-describedby="emailHelp" required></td>
        </tr>

    </table>
</div>