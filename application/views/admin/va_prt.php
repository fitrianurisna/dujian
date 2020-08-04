<div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pembayaran Remedial Teaching</h2>
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
          <th>Jumlah Mata Kuliah</th>
          <th>Tahun Ajaran</th>
          <th>Cetak Kwitansi Pembayaran</th>
          <th>Cetak Form Surat</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php 
              $no = 1;
              foreach ($rt as $s)  {
                $this->db->select('count(*) AS jumlah')->from('d_package');
                $this->db->where('susulan_id', $s->id);
                $this->db->where('tipe', 3);
                $this->db->group_by('susulan_id');
                ?>
              <td><?php echo $no++ ?></td>
              <td><?php echo $s->nama; ?></td>
              <td><input type="hidden" name="npm" value="<?php echo $s->npm; ?>" class="form-control"><?php echo $s->npm; ?></td>
              </td>
              <td><?= $this->db->get()->row_array()['jumlah'] ?> Mata Kuliah</td>
              <td><?php echo $s->ta; ?></td>
              <td align="center"><a href="<?= base_url()?>C_prt/kwitansi_rtpdf/<?= $s->id?>" class="fa fa-download" >CETAK</a></td>
              <td align="center"><a href="<?= base_url()?>C_prt/form_rt_pdf/<?= $s->id?>" class="fa fa-download" >CETAK</a></td>
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