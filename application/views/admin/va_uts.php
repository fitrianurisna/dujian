 <?php
  // print_r($this->session->userdata());
  ?>

 <div class="col-md-12 col-sm-12  ">
   <div class="x_panel">
     <div class="x_title">
       <h2>Pendaftar Susulan Ujian Tengah Semester (UTS)</h2>
       <ul class="nav navbar-center panel_toolbox">
         <li><a class="collapse-link"><i class="fa fa-chevron-center"></i></a>
         </li>
       </ul>
       <div class="clearfix"></div>
     </div>

     <div class="x_content">
       <div class="table-responsive">
         <form action="<?php echo base_url() . 'C_admin/update/'; ?>" method="post">
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
                  foreach ($susulan_uts as $suts) { 
                    $this->db->select('count(*) AS jumlah')->from('d_package');
                    $this->db->where('susulan_id', $suts->id);
                    $this->db->where('tipe', 1);
                    $this->db->group_by('susulan_id');
                    ?>
                   <td><?php echo $no++ ?></td>
                   <td><?php echo $suts->nama_mahasiswa; ?></td>
                   <td><?php echo $suts->npm; ?></td>
                   <input type="hidden" name="id" value="<?php echo $suts->id; ?>" class="form-control">
                   <td><?php echo $suts->semester; ?></td>
                   <td><?= $this->db->get()->row_array()['jumlah'] ?> Mata Kuliah</td>
                   <td><?php echo $suts->tahun; ?></td>
                   <td>
                     <select name="verivikasi">
                       <option value="0">Belum dibayar</option>
                       <option value="1">Telah dibayar</option>
                     </select>
                   </td>
                   <td align="center"><input type="submit" value="Simpan" class="fa fa-save"></td>
                   <!-- <td align="center"><a href="<?= base_url() ?>C_admin/invoice_pdf/<?= $suts->id ?>" class="fa fa-download" >Cetak Invoice</a></td> -->
                   <td align="center"><a href="<?= base_url() ?>C_package/invoice_pdf/<?= $suts->id ?>/uts" target="_blank" class="fa fa-download">Cetak Invoice</a></td>

               </tr>
             <?php } ?>


             </tbody>

           </table>
         </form>
       </div>


     </div>
   </div>
 </div>
 </div>
 </div>
 </div>