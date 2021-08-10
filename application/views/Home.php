<div class="container-fluid">
          <!-- Page Heading -->
          <h3 align="center" class="text-primary"><marquee behavior="" direction=""><b>SELAMAT DATANG DI SISTEM INFORMASI PELAYANAN PERIZINAN USAHA DINAS PERINDUSTRIAN DAN PERDAGANGAN KABUPATEN LEBAK</b></marquee> </h3>
        
        <br><br>
 <div class="col-xl-12 col-lg-7">
          
 <!-- Bar Chart -->
          <div class="card shadow mb-12">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
            </div>
            <div class="row">
                                      
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border shadow h-100 py-3 bg-primary text-light">
                  <center><i class="fas fa-fw fa-folder fa-5x" style="color: white" ></i>
                  <h5 class="text-light">
                  Data Permohonan</h5>
                  <a href="<?= base_url("Permohonan"); ?>">
                      <?php if($this->session->userdata('level')=='admin'){ ?>
                    <span class="badge badge-danger">
                        <?=              
                        // $this->db->count_all_results('tb_permohonan');  
                      $num_rows=$this->db->get_where('tb_permohonan', array('status' => 'proses verifikasi'))->num_rows();
                      
                      // var_dump($count);
                      // die;
                    ?> Data
                  </span>
                  <?php } ?>

                  <?php if($this->session->userdata('level')=='pemohon'){ ?>
                    <span class="badge badge-danger">
                        <?=              
                        // $this->db->count_all_results('tb_permohonan'); 
                        
                      $num_rows=$this->db->get_where('tb_permohonan', array('id_user'=> '4', 'status' => 'proses verifikasi'))->num_rows();
                      
                      // var_dump($count);
                      // die;
                    ?> Data
                  </span>
                  <?php } ?>
                  </center>
                </div>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border shadow h-100 py-3 bg-warning text-light">
                  <center><i class="fas fa-fw fa-search fa-5x" style="color: white" ></i>
                  <h5 class="text-light">Tracking Permohonan</h5>
                  <a href="<?= base_url("Permohonan/tracking"); ?>">
                    <span class="badge badge-danger"><i class="fas fa-fw fa-search" style="color: white" ></i>Search</span>
                  </center>
                </div>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border shadow h-100 py-3 bg-success text-light">
                   <center>
                   <i class="fas fa-fw fa-book-open fa-5x" style="color: white" ></i>
                  <h5 class="text-light">
                  Surat Permohonan</h5>
               <a href="<?= base_url('Surat/suratterbit'); ?>">
                <?php if($this->session->userdata('level')=='admin'){ ?>
                    <span class="badge badge-danger">
                    <?=
                        // $this->db->count_all_results('tb_permohonan');                
                      $num_rows=$this->db->get_where('tb_permohonan', array('status' => 'diterima'))->num_rows();
                      
                      // var_dump($count);
                      // die;
                    ?> Data
                    <?php } ?>

                    <?php if($this->session->userdata('level')=='pemohon'){ ?>
                    <span class="badge badge-danger">
                        <?=              
                        // $this->db->count_all_results('tb_permohonan'); 
                        
                      $num_rows=$this->db->get_where('tb_permohonan', array('id_user'=> '4','status' => 'diterima'))->num_rows();
                      
                      // var_dump($count);
                      // die;
                    ?> Data
                  </span>
                  <?php } ?>
                   </center>
                </div>
                  
                </a>
              </div>

          </div>


</div>
</div>
          
