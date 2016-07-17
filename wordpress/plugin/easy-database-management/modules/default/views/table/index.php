<section id="edm-container-main" class="content-header">
	<h1> Manage Forms <button class="btn btn-default btn-sm publish edm-btn-save" type="button"><i class="fa fa-floppy-o"></i> Publish</button></h1>
</section>
<div class="content">
  <div class="row">
    <div class="col-xs-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#form-elements" aria-expanded="true">Form Elements</a></li>
          <li class=""><a data-toggle="tab" href="#database-elements" aria-expanded="false">Database Elements</a></li>
        </ul>
        <div class="tab-content">
          <div id="form-elements" class="tab-pane active table-responsive no-padding">
          	<div class="action">
                <div class="pull-left">                
                  	<button class="btn btn-default btn-sm" type="button"><i class="fa fa-trash-o"></i> Delete Field</button>
                	<button class="btn btn-default btn-sm" type="button"><i class="fa fa-plus"></i> Add Field</button>
                    <button class="btn btn-default btn-sm" type="button"><i class="fa fa-plus"></i> Add Category</button>
                </div>
                <div class="pull-right editable">
                    <a class="lh30" data-id="form.name" data-type="text"  data-title="Form Name">Form Name</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <table class="table table-hover editable">
              <tbody>
                <tr>
                  <th><input type="checkbox"></th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Length</th>
                  <th>Decimals</th>
                  <th>Allow Null</th>
                  <th>Default</th>
                  <th>Comment</th>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td><a data-id="form.rows.0.name" data-type="text" data-pk="1" data-title="Enter Name">Link ID</a></td>
                  <td><a class="form" data-id="form.rows.0.type" data-type="select" data-title="Select Type">String</a></td>
                  <td>20</td>
                  <td>0</td>
                  <td><i class="fa fa-check"></i></td>
                  <td>0</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="database-elements" class="tab-pane table-responsive no-padding">
            <div class="action">
                <div class="pull-left">                
                  <button class="btn btn-default btn-sm" type="button"><i class="fa fa-refresh"></i> Update</button>
                </div>
                <div class="pull-right editable">
                    <a class="lh30" data-id="database.category" data-type="text"  data-title="Category Name">Category Name</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <table class="table table-hover">
              <tbody>
                <tr>
                  <th>ID</th>
                  <th>Type</th>
                  <th>Length</th>
                  <th>Decimals</th>
                  <th>Allow Null</th>
                  <th></th>
                </tr>
                <tr>
                  <td>link_id</td>
                  <td>Varchar</td>
                  <td>20</td>
                  <td>0</td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-key"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-xs-3" id="edm-container-forms">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Forms</h3>
          <div class="box-tools">
            <button class="btn btn-box-tool edm-btn-delete" type="button"><i class="fa fa-trash-o"></i> Delete Form</button>
            <button class="btn btn-box-tool edm-btn-add" type="button"><i class="fa fa-plus"></i> Add Form</button>
          </div>
        </div>
        <div class="box-body no-padding">
          <ul class="nav nav-pills nav-stacked edm-data-list"></ul>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/template" name="forms" container="#edm-container-forms">
	<% _.each(forms, function(form, index) { %>
	<li class="<%= ( params.current == form.id ) ? 'active'  : '' %>" data-id="<%= form.id %>"><a href="javascript:void(0);"><i class="fa fa-wpforms"></i> <%= form.name %></a></li>
	<% }); %>
</script> 
<script type="text/template" name="formElements" container="#edm-container-formElements">
	
</script> 
<script type="text/template" name="databaseElements" container="#edm-container-databaseElements">
	
</script>
