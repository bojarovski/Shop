<?php 
		function last20 (){
				$query="SELECT * FROM sneakers ORDER BY sneakersId DESC LIMIT 10";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_object($result))
                {
                ?>
                <!-- Last single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php $row->photo; ?>" alt="Photo">
							<div class="product-details">
								<h6><?php $row->Name ?></h6>
								<div class="price">
									<a><?php $row->Price; ?></a>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									
								</div>
							</div>
						</div>
					</div>
             <?php
             }
         }
				
?>