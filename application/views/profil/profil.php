<div class="atas" style="padding: 30px">
<p style="font-size: 40px; font-family: Inter; font-weight: 600; word-wrap: break-word">Dashboard / Profil</p>
</div>
<div class="row" style="margin-top: 20px">
  <div class="col-md-4">
    <div class="card" style="widht:500px;height:500px;  display: flex; flex-direction: column; align-items: center; justify-content: center;  text-align: center;">
      <div class="content">
        <img src="<?= base_url("application/assets/img/fadhil.png")?>" style="width: 70%; height: 70%; border-radius: 9999px;">
        <label style="font-size: 20px; font-family: Inter; font-weight: 600; word-wrap: break-word"><?= $this->session->userdata('nama'); ?></label>
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div class="card" style="widht:1000px;height:500px">
      <div class="content">
        <p style="font-size: 40px; font-family: Inter; font-weight: 600; word-wrap: break-word; margin-left: 50px; margin-top: 20px">Edit Profil</p>
      </div>
      <div class="form" style="padding: 40px; font-size: 20px; font-family: Inter; font-weight: 600; word-wrap: break-word; padding-top: 10px">
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
                if ($this->session->userdata('role_id') == 0) {
                    echo '<label for="NIM">NIM</label>';
                } else {
                    echo '<label for="NIP">NIP</label>';
                }
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
            <div class="col-md-8">
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
                  " 
                  type="text" 
                  id="editAngkatan" 
                  name="editAngkatan" 
                  value="<?= $this->session->userdata('angkatan'); ?>">
            </div>
          </div>
          <button type="submit" style="color: white;padding-left:10px;font-family: Inter; font-weight: 600; word-wrap: break-word; width: 100px; height; 100px; margin-left: 570px; background: #F30606; border-radius: 5px; padding: 5px">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


  