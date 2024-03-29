<div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pembayaran Susulan Ujian Akhir Semester (UAS)</h2>
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
              foreach ($susulan_uas as $s)  {
                $this->db->select('count(*) AS jumlah')->from('d_package');
                    $this->db->where('susulan_id', $s->id);
                    $this->db->where('tipe', 2);
                    $this->db->group_by('susulan_id');
                    ?>
              <td><?php echo $no++ ?></td>
              <td><?php echo $s->nama_mahasiswa; ?></td>
              <td><input type="hidden" name="npm" value="<?php echo $s->npm; ?>" class="form-control"><?php echo $s->npm; ?></td>
              <td><?= $this->db->get()->row_array()['jumlah'] ?> Mata Kuliah</td>
              <td><?php echo $s->tahun; ?></td>
              <td align="center"><a href="<?= base_url()?>C_uas/kwitansi_uaspdf/<?= $s->id?>" target="_blank" class="fa fa-download" >CETAK</a></td>
              <td align="center"><a href="<?= base_url()?>C_uas/form_uas_pdf/<?= $s->id?>" target="_blank" class="fa fa-download" >CETAK</a></td>
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