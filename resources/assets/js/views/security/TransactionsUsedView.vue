
<style scoped>

	.link-space {
		padding-right: 40px;
	}
 
</style>

<template>

<div>
 	<mypopup slot="message"></mypopup>
	<myimport slot="modal-import" url-import="security/modules/import"></myimport>
	<mytopmenu show-menu="true"></mytopmenu> 
	<div class="container-fluid" >
		<div class="row" >
			<div class="col-sm-2">
				<mysubmenu submenu= "security"></mysubmenu>
			</div>
			<div class="col-sm-10" >
				<mymessage 
					message="dashboardTopMessage"
					color="info"
					align="center"
				>
				</mymessage>

				<myhorizontallinks name="horizontal-links"></myhorizontallinks>

				<div class="row" style="padding:0px">
					<div class="col-sm-12" style="padding:0px">
					 
					  <div style="padding-left:10px;padding-right:20px">
					  
					  	<mychart 
					  		id="Chart1"
					  		type="spline"
					  		width="500"
					  		height="250"
							url="/security/dashboard/transactionsUsedByDay"
							title="transactionsUsedByDay"
							x-title="Days"
							y-title="Transactiones Used"
							legend-position="bottom"
							legend-display="false"
							show-year="true"
							show-month="true"
					  	>

					  	</mychart>

					 	</div>
					</div>
				</div>
				
				<div class="row" style="padding:0px">
					<div class="col-sm-12" >
					 
						<mytableyearmonth  

							table-id="table1"

							table-title="transactionsUsed" 

							columns-names='{
								"0": { "name": "moduleName", "width":"25%"},
								"1": { "name": "transactionName" , "width":"50%"},
								"2": { "name": "clicks" , "width":"50%"}
									
							}' 
							
							url="security/dashboard/transactionsUsed"

							icon-info='{ }'

							icon-actions='{ }'

							show-year ="true"

							show-month = "true"

							>

							</mytableyearmonth>

						</div>
					
				</div>

				<div class="row" style="padding:0px">
					<div class="col-sm-12" style="padding:0px">
					 
					  <div style="padding-left:10px;padding-right:20px">
					  
					  	<mychart 
					  		id="Chart2"
					  		type="column"
					  		width="500"
					  		height="250"
							url="/security/dashboard/transactionsUsedByMonth"
							title="transactionsUsedByMonth"
							x-title="Days"
							y-title="Transactions Used"
							legend-position="top"
							legend-display="false"
							show-year="true"
							show-month="false"
					  	>
					  	</mychart>

					 	</div>
					</div>
				</div>


			</div>		
		</div>		
	</div>
</div>
</template>


<script 

src="../../main.js" type="text/javascript">
	
</script>



										