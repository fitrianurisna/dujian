<div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pendaftar Susulan Ujian Akhir Semester (UAS)</h2>
                    <ul class="nav navbar-center panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-center"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
                      <form action="<?php echo base_url().'C_uas/update/';?>" method="post">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
        <tr>
           <th>Nomer</th>
          <th>Nama</th>
          <th>NPM</th>
          <th>Semester</th>
          <th>Mata Kuliah</th>
          <th></th>
          <th>Verifikasi Pembayaran</th>
          <th>Action</th>
          <th>Cetak Invoice</th>
        </tr>
      </thead>
      <tbody>
      <tr>
        <?php 
                                        $no = 1;
                                        foreach ($susulan_uas as $s)  {?>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $s->nama_mahasiswa; ?></td>
                                        <td><input type="hidden" name="npm" value="<?php echo $s->npm; ?>" class="form-control"><?php echo $s->npm; ?></td>
                                        <td><?php echo $s->semester; ?></td>
                                        <td><?php echo $s->matkul; ?></td>
                                        <td></td>
                                        <td>
                                        <select name="verivikasi">
                                            <option value="0">Belum dibayar</option>
                                            <option value="1">Telah dibayar</option>
                                        </select>
                                        </td>
                                        <td align="center"><input type="submit" value="Simpan"  class="fa fa-save"></td>
                                        <td align="center"><a href="<?= base_url()?>C_uas/invoice_uaspdf/<?= $s->npm?>" class="fa fa-download" >Cetak Invoice</a></td>

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