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
          <th>Mata kuliah</th>
          <th>Cetak Kwitansi Pembayaran</th>
          <th>Cetak Form Surat</th>
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
              </td>
              <td><?php echo $s->matkul; ?></td>
              <td align="center"><a href="<?= base_url()?>C_uas/kwitansi_uaspdf/<?= $s->id?>" class="fa fa-download" >CETAK</a></td>
              <td align="center"><a href="<?= base_url()?>C_uas/form_uas_pdf/<?= $s->id?>" class="fa fa-download" >CETAK</a></td>
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