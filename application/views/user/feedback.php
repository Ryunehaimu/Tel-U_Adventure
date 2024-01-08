<div class="container mt-5">
    <h2 style="margin-bottom:50px">Feedback TelU Adventure</h2>
    <form action="<?= base_url("user/update") ?>" method="POST">
      <?php
      if (!empty($this->session->userdata('feedback'))) {
          echo '<textarea class="tinymce" name="konten">' . htmlspecialchars($this->session->userdata('feedback')) . '</textarea>';
      } else {
          echo '<textarea class="tinymce" name="konten"></textarea>';
      }
      ?>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  <script>
    tinymce.init({
      selector: '.tinymce',
      height: 300,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
      ],
      toolbar: 'undo redo | formatselect | ' +
               'bold italic underline strikethrough | ' +
               'alignleft aligncenter alignright alignjustify | ' +
               'bullist numlist outdent indent | ' +
               'removeformat | help'
    });
  </script>