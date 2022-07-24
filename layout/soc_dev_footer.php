 <div class="d-flex justify-content-center my-3">
     <div class="mx-2">
         <label>Prepared By:</label> <input style="border:none;border-bottom:1px solid black;outline:none;"
             class="px-2 py-1" type="text" name="preparedby" placeholder="type name..."
             value="<?php  echo  isset($rowresult) ?  $rowresult["preparedby"] : '';  ?> " />

     </div>

     <div class="mx-2">

         <label>Reviewed By:</label> <input style="border:none;border-bottom:1px solid black;outline:none;"
             class="px-2 py-1" type="text" name="reviewedby" placeholder="type name..."
             value="<?php  echo  isset($rowresult) ?  $rowresult["reviewedby"] : '';  ?> " />
     </div>

 </div>