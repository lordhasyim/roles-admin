
<style scoped>

 
</style>

<template>
  <div>
 <mypopup slot="message"></mypopup>
 <myimport slot="modal-import" url-import="security/roles/import"></myimport>
	<mytopmenu show-menu="true"></mytopmenu> 
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
				<mysubmenu submenu= "security"></mysubmenu>
			</div>
		
			<div class="col-sm-10">

				<mymessage 
					message="userTopMessage"
					color="info"
					align="center"
				>
				</mymessage>
				
				<mycrudtable  table-title="userList" 

						table-id="table1"

						select-fields='{	}'
									
						columns-names='{
								"0": { "name": "id", "width":"10%"},
								"1": { "name": "username", "width":"15%"},
								"2": { "name": "userFullname", "width":"25%"},
								"3": { "name": "userEmail" , "width":"50%"},
								"4": { "name": "roleName" , "width":"10%"},
								"5": { "name": "status", "width":"10%"},
								"6": { "name": "createdBy", "width":"15%"},
								"7": { "name": "updatedBy", "width":"25%"}
						}' 
						
						url="security/users"

						icon-info='{	}'
						icon-actions='{		}'

						>
				
						<mycrudbuttons
							slot="crud" 
							url-export="security/users/export"
							btn-actions='{
         						"0": {"title": "add",    "method": "Add",    "disabled": false},
          						"1": {"title": "export", "method": "Export", "disabled": false}, 
          						"2": {"title": "import", "method": "Import", "disabled": false}        					}'
						>
						</mycrudbuttons>
						
						<mycrudform 
							slot="forma" 

							url="security/users"

							form-title="user"

							input-fields='{
									"0": {
										"type": "text",
										"name": "id",
										"value": "", 
										"label": "id",	
										"placeholder":"",
										"readonly":"true",
										"required": "true",	
										"maxlength": ""
									},

									"1": {
										"type": "text",
										"name": "username",
										"value": "", 
										"label": "username",	
										"placeholder":"Type the User ID",
										"required": "true",	
										"maxlength": ""
									},

									"2": {
										"type": "text",
										"name": "user_fullname",
										"value": "", 
										"label": "userFullname", 
										"placeholder":"Type the User Fullname",
										"required": "true",	
										"maxlength": ""
									},

									"3": {
										"type": "text",
										"name": "email",
										"value": "", 
										"label": "userEmail", 
										"placeholder":"Type the User Email",
										"required": "true",	
										"maxlength": ""
									 },

									 "4": {
										"type": "select",
										"name": "role_name",
										"value": "", 
										"label": "roleName", 
										"required": "true",
										"maxlength": "",
										"url": "security/roles/getAllRolesActive",
										"table": "roles"
									 },

									 "5": {
										"type": "status",
										"name": "deleted_at",
										"label": "status"
									 }
									
								}'
						>
						</mycrudform>
				</mycrudtable>
			<div>
		</div>
	</div>
 </div>
</template>


<script 

src="../../main.js" type="text/javascript">
	
</script>


<!-- "5": {
		"type": "checkbox",
		"name": "chkCloseAfterSave",
		"value": "", 
		"label": "Close After Action", 
		"required": "false",	
		"maxlength": ""
	} -->