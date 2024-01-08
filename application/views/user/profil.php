<div class="atas" style="padding: 30px;margin-left:200px">
<p style="font-size: 40px; font-family: Inter; font-weight: 600; word-wrap: break-word">Dashboard / Profil</p>
</div>
<div class="row justify-content-center" style="margin-top: 20px;">
  <div class="col-md-3">
    <div class="card" style="widht:150px;height:500px;  display: flex; flex-direction: column; align-items: center; justify-content: center;  text-align: center;">
      <?= form_open_multipart(base_url("admin/update_gmbr"), 'class="was-validated" novalidate') ?>
                <label for="profile-picture" class="profile-picture-container">
                    <input type="file" id="profile-picture" name="profile-picture" style="display: none;" accept="image/*" onchange="displayImage(this)" required>
                    <img id="profile-image" src="<?= base_url('application/assets/gambar/profil') ?>/<?= $this->session->userdata('img'); ?>" style="width: 70%; height: 70%; border-radius: 9999px; cursor: pointer;" alt="Profile Picture">
                </label>
                <div class="row">
                  <label style="font-size: 20px; font-family: Inter; font-weight: 600; word-wrap: break-word"><?= $this->session->userdata('nama'); ?></label>
                </div>
                <div class="row">
                  <button type="submit" class="btn btn-primary mx-auto" style="width: 200px;margin-top:20px">Ganti</button>
                </div>
      <?= form_close() ?>
      </div>
  </div>
  <div class="col-md-6">
    <div class="card" style="widht:800px;height:500px">
      <div class="content">
        <p style="font-size: 40px; font-family: Inter; font-weight: 600; word-wrap: break-word; margin-left: 50px; margin-top: 20px">Edit Profil</p>
      </div>
      <div class="form" style="padding: 40px; font-size: 20px; font-family: Inter; font-weight: 600; word-wrap: break-word; padding-top: 10px;padding-left: 80px">
        <form method="post" action="<?= base_url('admin/update_profil'); ?>">
          <div class="row">
            <div class="col-md-4">
              <label for="firstName">Nama</label>
            </div>
            <div class="col-md-8">
              <input style="width: 400px; padding-left: 10px" type="text" id="editName" name="editName" value="<?= $this->session->userdata('nama'); ?>">
            </div>
          </div>
          <div class="row" style="margin-top: 10px">
            <div class="col-md-4">
              <?php
                // Tampil NIM/NIP
                if ($this->session->userdata('role_id') == 0) {
                  echo '<label for="NIM">NIM</label>';
                } else {
                    echo '<label for="NIP">NIP</label>';
                }
                // david
              ?>
            </div>
            <div class="col-md-8">
              <input style="width: 400px; padding-left: 10px" type="text" id="editNim" name="editNim" value="<?= $this->session->userdata('NIM_NIP'); ?>" readonly>
            </div>
          </div>
          <div class="row" style="margin-top: 10px">
            <div class="col-md-4">
                <label
                    <?php
                    if ($this->session->userdata('role_id') == 0) {
                        echo 'style="display: block;"';
                    } else {
                        echo 'style="display: none;"';
                    }
                    ?>
                    for="class">Angkatan</label>
            </div>
            <div class="col-md-8" style="margin-bottom: 20px">
              <input 
                  style="
                      width: 400px; 
                      padding-left: 10px;
                      <?php
                      if ($this->session->userdata('role_id') == 0) {
                          echo 'display: block;';
                      } else {
                          echo 'display: none;';
                      }
                      ?>
                  "type="text" id="editAngkatan" name="editAngkatan" value="<?= $this->session->userdata('angkatan'); ?>" readonly>
            </div>
          </div>
          <button type="submit" style="color: white;padding-left:10px;font-family: Inter; font-weight: 600; word-wrap: break-word; width: 100px; height; 100px; margin-left: 570px; background: #F30606; border-radius: 5px; padding: 5px">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
      function displayImage(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#profile-image').attr('src', e.target.result);
              }

              reader.readAsDataURL(input.files[0]);
          }
      }
      
  </script>

  