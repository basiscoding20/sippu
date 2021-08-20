<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Surat Terbit</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Surat Terbit</h6>
            </div>
            <div class="card-body">
            
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NPWP</th>
                      <th>Nama Pemilik</th>
                      <th>Nama Perusahaan</th>
                      <th>QR Code</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($suratterbit as $dat) : ?>
                    <tr>
                      <td><?= $dat['npwp']; ?></td>
                      <td><?= $dat['nama_pemilik']; ?></td>
                      <td><?= $dat['nama_perusahaan']; ?></td>
                      <td>
                        <!-- <img style="width: 50px; height: 50px;" src="<?= base_url('assets/img/') . $dat['qr_code']; ?>"> -->
                        <a href="<?= base_url('assets/img/') . $dat['qr_code']; ?>" class="badge badge-pill badge-info" style="width: 80px" target="_blank"> View </a> 
                      </td>
                       <td>
                        <a href="<?= base_url('Surat/cetak/') . $dat['id_mohon']; ?>" class="btn btn-primary btn-sm" target="_blank">Priview</a>

                      </td>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>

