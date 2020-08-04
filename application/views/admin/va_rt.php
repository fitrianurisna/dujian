<div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pendaftar Remedial Teaching</h2>
                    <ul class="nav navbar-center panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-center"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
                      <form action="<?php echo base_url().'C_prt/update/';?>" method="post">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
        <tr>
          <th>Nomer</th>
          <th>Nama</th>
          <th>NPM</th>
          <th>Semester</th>
          <th>Jumlah Mata Kuliah</th>
          <th>Tahun Ajaran</th>
          <th>Verifikasi Pembayaran</th>
          <th>Action</th>
          <th>Cetak Invoice</th>
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
                                        <td><?php echo $s->semester; ?></td>
                                        <td><?= $this->db->get()->row_array()['jumlah'] ?> Mata Kuliah</td>
                                        <td><?php echo $s->ta; ?></td>
                                        <td>
                                        <select name="verivikasi">
                                            <option value="0">Belum dibayar</option>
                                            <option value="1">Telah dibayar</option>
                                        </select>
                                        </td>
                                        <td align="center"><input type="submit" value="Simpan"  class="fa fa-save"></td>
                                        <td align="center"><a href="<?= base_url() ?>C_prt/invoice_rt/<?= $s->id ?>/remedial" target="_blank" class="fa fa-download" >Cetak Invoice</a></td>

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