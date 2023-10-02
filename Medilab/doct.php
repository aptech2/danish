<?php
 include 'header.php';
?>
   <!-- ======= Doctors Section ======= -->
   <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row">
        <?php 
$sql="SELECT * FROM `doctor`";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)){ ?>
     

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
           

              <div class="pic"><img src="<?php echo $row['doc_img']?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4 ><?php echo $row['doc_name']?></h4>
                <span><?php echo $row['experience']?></span>
                <span><?php echo $row['contact']?></span>

        
              </div>
            </div>
          </div>

          
          <?php  } ?>
        </div>

      </div>
    </section><!-- End Doctors Section -->
<?php 

include 'footer.php';
?>