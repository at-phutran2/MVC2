<?php require_once APP_PATH."Views/layouts/header.php"; ?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php echo $title; ?></h1>
              <h2 class="subheading"><?php echo $description; ?></h2>
              <span class="meta">Posted by
                <a href="#"><?php echo $author; ?></a>
                on <?php echo $created_at; ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php echo $content; ?>
          </div>
        </div>
      </div>
    </article>

    

    <?php require_once APP_PATH."Views/layouts/footer.php"; ?>

    