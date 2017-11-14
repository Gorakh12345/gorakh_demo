
<style>
.email-muliti{width:100% !important}
.select2-container--default.select2-container--open{border:0 !important;}
.select2-container .select2-selection--single{    height: 34px !important;border: 1px solid #d2d6de !important;border-radius: 0 !important;padding-left: 0 !important;}
.select2-container{border:0 !important}
 </style>
 
 <link rel="stylesheet" href="/expopanel/assets/css/select2.min.css"> 
        
        <div class="col-md-9">
        <div class="multi-select email-muliti">
        <select class="form-control select2" name="supplier_email" id="supplier_email"  data-placeholder="Select supplier Email" >
        <option value="">select</option>
        <?php 
        $result = search_supplier_master($con, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '
        ', 'active', '', '', '');
        while($row = mysqli_fetch_array($result)) {
        ?>     
        <option value="<? echo $row['email']; ?>" <? if( $supplier_email == $row['email']){echo "selected";}?>><? echo $row['email']; ?></option>
        <? 
        }
        ?>                  
        </select>
        </div>
        </div>
                              
                              
                              
<script src="/expopanel/assets/js/select2.full.min.js"></script>