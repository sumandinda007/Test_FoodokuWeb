
<div class="uk-width-1">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/Cuisine/Do/Add" class="uk-button mbtn"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/Cuisine" class="uk-button mbtn"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/Cuisine/Do/Sort" class="uk-button mbtn"><i class="fa fa-sort-alpha-asc"></i> <?php echo Yii::t("default","Sort")?></a>
</div>

<form id="frm_table_list" method="POST" >
<input type="hidden" name="action" id="action" value="CuisineList">
<input type="hidden" name="tbl" id="tbl" value="cuisine">
<input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
<input type="hidden" name="whereid"  id="whereid" value="cuisine_id">
<input type="hidden" name="slug" id="slug" value="Cuisine">
<table id="table_list" class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
  <caption><?php echo Yii::t("default","Merchant List")?></caption>
   <thead>
        <tr>
            <th width="3%"><?php echo Yii::t("default","ID")?></th>
            <th width="7%"><?php echo Yii::t("default","Cuisine")?></th>
            <th width="5%"><?php echo Yii::t("default","Date Created")?></th>            
        </tr>
    </thead>
    <tbody>    
    </tbody>
</table>
<div class="clear"></div>
</form>