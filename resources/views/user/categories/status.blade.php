
<div id="statistic" class="user-data row">
		 
	<div class="col-md-3">
		<div class="user-info">
			
			<p class="user-gravatar">
                <img src="{!!asset('images/algebra-logo.svg')!!}"/>
			</p>
			
		</div>	
	</div>
	

	
	<div class="col-md-9">
		<div class="panel-user">
			
				<div class="statistic-body">
					<div class="col-md-4">
						<h4 class="background-blue">User ID: {{ Sentinel::check()->email}}</h4>
						<div class="status-info">
							<h3 class="blue">Overall Usage</h3>
								<div class="col-md-6">
									Storage
								</div>
								
								<div class="col-md-6">
									1.2 GB
								</div>
								<div class="col-md-6 ">
									All Storage
								</div>
								
								<div class="col-md-6">
									2 GB
								</div>
								<div class="col-md-6">
									Storage Used
								</div>
								
								<div class="col-md-6">
									60%
								</div>
						</div>	
					</div>
				
					<div class="col-md-4">
						<h4 class="background-orange">Registreted on: {{ Sentinel::check()->created_at}}</h4>
						<div class="status-info">
							<h3 class="orange">Data</h3>
								<div class="col-md-6">
									All Files
								</div>
								
								<div class="col-md-6">
									63 files
								</div>
								<div class="col-md-6 ">
									All Folders
								</div>
								
								<div class="col-md-6">
									6 Folders
								</div>
								<div class="col-md-6">
									Linked files
								</div>
								
								<div class="col-md-6">
									6
								</div>
						</div>	
					</div>
							
				
					<div class="col-md-4">
						<h4 class="background-green">Type: User</h4>
						<div class="status-info">
							<h3 class="green">Used Storage</h3>
								<div class="col-md-6">
									Images
								</div>
								
								<div class="col-md-6">
									0.2 GB
								</div>
								<div class="col-md-6 ">
									Files
								</div>
								
								<div class="col-md-6">
									0.5 GB
								</div>
								<div class="col-md-6">
									Music
								</div>
								
								<div class="col-md-6">
									0.5 GB
								</div>
						</div>	
					</div>
					
				</div>
			</div>
		</div>
	</div>