<div class="atas" style="padding: 30px">
<p style="font-size: 40px; font-family: Inter; font-weight: 600; word-wrap: break-word">Dashboard / Profil</p>
</div>

<div class="row" style="margin-top: 20px">
  <div class="col-md-4">
    <div class="card" style="widht:500px;height:500px;  display: flex; flex-direction: column; align-items: center; justify-content: center;  text-align: center;">
      <div class="content">
        <img src="<?= base_url("application/assets/img/profil.png")?>" style="width: 70%; height: 70%; border-radius: 9999px;">
        <p style="font-size: 20px; font-family: Inter; font-weight: 600; word-wrap: break-word">DAVID GHOLI RAHMADANA</p>
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div class="card" style="widht:1000px;height:500px">
      <div class="content">
        <p style="font-size: 40px; font-family: Inter; font-weight: 600; word-wrap: break-word; margin-left: 50px; margin-top: 20px">Edit Profil</p>
      </div>
      <div class="form" style="padding: 40px; font-size: 20px; font-family: Inter; font-weight: 600; word-wrap: break-word; padding-top: 10px">
        <form>
          <div class="row">
            <div class="col-md-4">
              <label for="firstName">Nama Depan</label>
            </div>
            <div class="col-md-8">
              <input style="width: 400px" type="text" id="firstName" name="firstName" value="DAVID">
            </div>
          </div>
          <div class="row" style="margin-top: 10px">
            <div class="col-md-4">
              <label for="lastName">Nama Belakang</label>
            </div>
            <div class="col-md-8">
              <input style="width: 400px" type="text" id="lastName" name="lastName" value="GHOLI RAHMADANA">
            </div>
          </div>
          <div class="row" style="margin-top: 10px">
            <div class="col-md-4">
              <label for="NIM">NIM</label>
            </div>
            <div class="col-md-8">
              <input style="width: 400px" type="text" id="NIM" name="NIM" value="1302213079">
            </div>
          </div>
          <div class="row" style="margin-top: 10px">
            <div class="col-md-4">
              <label for="class">Kelas</label>
            </div>
            <div class="col-md-8">
              <input style="width: 400px" type="text" id="class" name="class" value="SE4501">
            </div>
          </div>
          <div class="row" style="margin-top: 10px">
            <div class="col-md-4">
              <label for="email">Email</label>
            </div>
            <div class="col-md-8">
              <input style="width: 400px" type="email" id="email" name="email" value="davidgholirahmadana@student.telkomuniversity.ac.id" disabled>
            </div>
          </div>
        </form>
      </div>
      <button type="submit" style="color: white; font-family: Inter; font-weight: 600; word-wrap: break-word; width: 100px; height; 100px; margin-left: 570px; background: #F30606; border-radius: 5px; padding: 5px">Submit</button>
    </div>
  </div>
</div>


  