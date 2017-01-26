
<div id="statistic" class="row">
		 
	<div class="col-md-3">
		<div class="user-info">
			
			<p class="user-gravatar">
				<img src="{!!asset('images/algebra-BOX-logo.png')!!}"/>
			</p>
			
		</div>	
	</div>
	

	
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<h3 class="pull-left panel-title">Status</h3>
				<p class="user-status-info">User ID: {{ Sentinel::check()->email}} | Registreted on: {{ Sentinel::check()->created_at}} | Type: User</p>
				
			</div>
				<div class="panel-body">
					<div class="col-md-4">
						<div class="status-info">
							<h3>Overall Usage</h3>
							<p>
								<table>
								  <tr>
									<th>Storage:</th>
									<th class="used-info">1.2 GB</th>
								  </tr>
								  <tr>
									<td>of:</td>
									<td class="used-info">2 GB</td>
								  </tr>
									<tr>
									<td>Storage Used:</td>
									<td class="used-info">60%</td>
								  </tr>
								</table>
							</p>
							
						</div>	
					</div>
				
				
				
					<div class="col-md-4">
						<div class="status-info">
							<h3>Data</h3>
							<p>
								<table class="used-info">
								  <tr>
									<th>All Files:</th>
									<th class="used-info">63 files</th>
								  </tr>
								  <tr>
									<td>All Foldefs</td>
									<td class="used-info">6 Folders</td>
								  </tr>
									<tr>
									<td>Linked files:</td>
									<td class="used-info">1</td>
								  </tr>
								</table>
							</p>
							
						</div>	
					</div>
				
				
				
					<div class="col-md-4">
						<div class="status-info">
							<h3>Used Storage</h3>
							<p>
								<table class="used-info">
								  <tr>
									<th>Images:</th>
									<th class="used-info">0.2 GB</th>
								  </tr>
								  <tr>
									<td>Files:</td>
									<td class="used-info">0.5 GB</td>
								  </tr>
									<tr>
									<td>Music:</td>
									<td class="used-info">0.5 GB</td>
								  </tr>
								</table>
							</p>
							
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>