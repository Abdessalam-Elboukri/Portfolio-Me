<?php  if (count($errors) > 0) : ?>
        <?php foreach ($errors as $error) : ?>
        <div class="d-flex align-items-center mb-1 rounded-sm w-100" style="background: #FFC0D3; height:24px ; padding:7px 3px" >
            <i class="bi bi-exclamation me-1 fs-5 text-danger"></i><p class="text-muted m-0" style="font-size: 12px;"><?php echo $error ?></p>
          </div>
        <?php endforeach ?>
<?php  endif ?>
