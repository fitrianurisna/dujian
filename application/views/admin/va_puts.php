<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Pembayaran Susulan Ujian Tengah Semester (UTS)</h2>
      <ul class="nav navbar-center panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-center"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>

    <div class="x_content">
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr>
              <th>Nomer</th>
              <th>Nama</th>
              <th>NPM</th>
              <th>Jumlah Mata kuliah</th>
              <th>Tahun Ajaran</th>
              <th>Cetak Kwitansi Pembayaran</th>
              <th>Cetak Form Surat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              $no = 1;
              foreach ($susulan_uts as $suts) {
                $this->db->select('count(*) AS jumlah')->from('d_package');
                $this->db->where('susulan_id', $suts->id);
                $this->db->where('tipe', 1);
                $this->db->group_by('susulan_id');
              ?>
                <td><?php echo $no++ ?></td>
                <td><?php echo $suts->nama_mahasiswa; ?></td>
                <td><input type="hidden" name="npm" value="<?php echo $suts->npm; ?>" class="form-control"><?php echo $suts->npm; ?></td>
                <td><?= $this->db->get()->row_array()['jumlah'] ?> Mata Kuliah</td>
                <td><?= $suts->tahun_ajaran; ?></td>
                <td align="center"><a href="<?= base_url() ?>C_admin/kwitansi_pdf/<?= $suts->id ?>" target="_blank" class="fa fa-download">CETAK</a></td>
                <td align="center"><a href="<?= base_url() ?>C_admin/form_uts_pdf/<?= $suts->id ?>" target="_blank" class="fa fa-download">CETAK</a></td>
            </tr>
          <?php } ?>
          </tbody>

        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>