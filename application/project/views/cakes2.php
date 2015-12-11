<?php

foreach ($results as $row) {

  echo  $row->name ;
  echo $row->price;
  
  echo '<div class="col-md-5">';
               echo "<h3><b>" .$row->name. "</b></h3>";
              echo  '<h4>Price: &#8377 ;' .$row->price. ' /-</h4>';
				echo '<h4>Weight: 5 kg</h4>';
               echo ' <p><b>Product Description:</b> This 2 layer Chocolate cakes are all time favorite for any big party! This chocolate cream cake is an extreme indulgence of chocolate 
				as it is made up with fluffy chocolate sponge and abundance of chocolate creamy layers. The decoration is also simple yet elegant. 
				The splash of chocolate glaze is spread across the upper layer of the cake so as to feel the flavor of chocolate in every bite.</p>
                                <input type="hidden" name="cakeId" value="" />

                <button type="submit" name="submit"  value="add to cart" class="btn btn-primary" >Add to cart</button>
            </div>
        </div>
        </form>';
 
}
?>