<?php require_once APP_PATH."Views/layouts/header.php"; ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        	<?php foreach($posts as $post): ?>
          <div class="post-preview">
            <a href="/posts/view/<?php echo $post['id']; ?>">
              <h2 class="post-title">
                <?php echo $post['title']; ?>
              </h2>
              <img height="200px" width="400px" src="/<?php echo $post['image']; ?>">
              <h3 class="post-subtitle">
                <?php echo $post['description']; ?>
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#"><?php echo $post['author']; ?></a>
              on <?php echo $post['created_at']; ?></p>
          </div>
          <hr>

          <?php endforeach; ?>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

   

<?php require_once APP_PATH."Views/layouts/footer.php"; ?>













<!-- 

<?php echo $post['title']; ?>
<br>
<?php echo $post['description']; ?>


 -->