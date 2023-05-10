@extends('role.main')
@section('content.dashboard')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 fw-bold">Dashboard</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Dashboard v1</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
				<div class="row mb-3">
					<div class="col-lg-6 col-6">
						<!-- small box -->
						<div class="small-box bg-info">
							<div class="inner">
								<h3>{{ $userCount }}</h3>

								<p>All Users</p>
							</div>
							<div class="icon">
								<i class="ion ion-ios-people"></i>
							</div>
							<a href="{{ route('users.index') }}" class="small-box-footer">More info <i
									class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<div class="col-lg-6 col-6">
						<!-- small box -->
						<div class="small-box bg-success">
							<div class="inner">
								<h3>{{ $productCount }}</h3>

								<p>All Products</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 fw-bold">Insight</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-secondary">
								<h5 class="m-0">Gender Chart</h5>
							</div>
							<div class="card-body">
								<div>
									<canvas id="genderChart"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-secondary">
								<h5 class="m-0">Product Chart</h5>
							</div>
							<div class="card-body">
								<p>INI CHART PRODUCTS</p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

	</div>
	<!-- content-wrapper -->
	<footer class="main-footer">
		<strong>Copyright &copy; 2023 <a href="https://instagram.com/roshitx">Roshit</a>.</strong>
		All rights reserved.

	</footer>
	<script>
		$(document).ready(function() {
			$.ajax({
				url: '{{ route('user.statistic') }}',
				dataType: 'json',
				success: function(data) {
					var ctx = document.getElementById('genderChart').getContext('2d');
					var myChart = new Chart(ctx, {
						type: 'pie',
						data: {
							labels: ['Male', 'Female', 'Other'],
							datasets: [{
								label: 'Count',
								data: [data.male, data.female, data.other],
								backgroundColor: [
									'rgba(54, 162, 235, 0.2)',
									'rgba(255, 99, 132, 0.2)',
									'rgba(255, 205, 86, 0.2)'
								],
								borderColor: [
									'rgba(54, 162, 235, 1)',
									'rgba(255, 99, 132, 1)',
									'rgba(255, 205, 86, 1)'
								],
								borderWidth: 1
							}]
						},
					});
				}
			});
		});
	</script>
@endsection
