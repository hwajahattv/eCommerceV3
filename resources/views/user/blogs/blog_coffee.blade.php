
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Coffee Shop</title>

	<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<!-- Bootstrap CSS -->
		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<style>
			body {
				background-image: url(img/blog_coffee/bg3.jpg);
				background-position: center;
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
				width: 100%;
				height: 100vh;
			}
			table {
				max-width: 600px;
				background-color: rgba(1, 1, 1, 0.35);
			}

			#show {
				height: 50px;
				min-width: 300px;
				background-color: white;
			}
			th {
				text-align: center;
			}

			tr:hover {
				background-color: rgba(14, 190, 23, 0.35);
				color: seashell;
				/* font-weight: 500; */
				text-shadow: 0px 1px 4px black;
			}
			.wrapper {
				max-width: 600px;
				display: flex;
				align-items: center;
				justify-content: space-between;
				/* background-color: rgba(1, 1, 1, 0.35); */
			}
			.butn {
				min-width: 140px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="text-center display-3">My Coffee Shop</h1>
				</div>
			<div class="col-md-6">
				<a href="{{('/home')}}" class="btn btn-outline-primary">User Dashboard</a>
				<a href="{{('/admin')}}" class="btn btn-outline-primary">Admin Panel</a>
			</div>
		</div>

			<table class="table text-white align-right rounded">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Coffee Brands</th>
						<th scope="col">Price</th>
						<th scope="col">Quantity</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Death wish coffee</td>
						<td>200 Rs.</td>
						<td>
							<input
								type="text"
								class="form-control"
								id="nm1"
								onkeypress="return onlyNumberKey(event)"
							/>
						</td>
					</tr>
					<tr>
						<td>Starbuck French</td>
						<td>250 Rs.</td>
						<td>
							<input
								type="text"
								class="form-control"
								id="nm2"
								onkeypress="return onlyNumberKey(event)"
							/>
						</td>
					</tr>
					<tr>
						<td>Rising Sun Brazil Peaberry</td>
						<td>300 Rs.</td>
						<td>
							<input
								type="text"
								class="form-control"
								id="nm3"
								onkeypress="return onlyNumberKey(event)"
							/>
						</td>
					</tr>
					<tr>
						<td>Lavazza Super Cream Espresso</td>
						<td>350 Rs.</td>
						<td>
							<input
								type="text"
								class="form-control"
								id="nm4"
								onkeypress="return onlyNumberKey(event)"
							/>
						</td>
					</tr>
					<tr>
						<td>Hawaiian Gold Gourmet Blend</td>
						<td>280 Rs.</td>
						<td>
							<input
								type="text"
								class="form-control"
								id="nm5"
								onkeypress="return onlyNumberKey(event)"
							/>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="wrapper">
				<button class="btn butn btn-success" onclick="bill_calc()">
					Calculate bill
				</button>
				<div class="alert" id="show"></div>
			</div>
			<div class="wrapper">
				<button class="btn butn btn-success" onclick="order_submitted()">
					Submit order!
				</button>
				<button class="btn btn-success" onclick="clear_form()">
					Clear order form
				</button>
			</div>
		</div>
		<script>
			var msgbox = document.getElementById("show");
			var total = 0;
			var c1 = 0,
				c2 = 0,
				c3 = 0,
				c4 = 0,
				c5 = 0;
			function bill_calc() {
				if (parseInt(document.getElementById("nm1").value.length) != 0) {
					c1 = parseInt(document.getElementById("nm1").value);
				}
				if (parseInt(document.getElementById("nm2").value.length) != 0) {
					c2 = parseInt(document.getElementById("nm2").value);
				}
				if (parseInt(document.getElementById("nm3").value.length) != 0) {
					c3 = parseInt(document.getElementById("nm3").value);
				}
				if (parseInt(document.getElementById("nm4").value.length) != 0) {
					c4 = parseInt(document.getElementById("nm4").value);
				}
				if (parseInt(document.getElementById("nm5").value.length) != 0) {
					c5 = parseInt(document.getElementById("nm5").value);
				}

				//clearing the input field

				total = c1 * 200 + c2 * 250 + c3 * 300 + c4 * 350 + c5 * 280;
				//clearing the input field
				// document.getElementById("nm1").value = "";
				// document.getElementById("nm2").value = "";
				// document.getElementById("nm3").value = "";
				// document.getElementById("nm4").value = "";
				// document.getElementById("nm5").value = "";
				//also empty the message box
				// msgbox.innerHTML = "";
				document.getElementById("show").innerHTML = total;
				msgbox.innerHTML = "<span>Total Bill:  " + total + " Rs.</span><br>";
			}
			function clear_form() {
				//clearing the input field
				document.getElementById("nm1").value = "";
				document.getElementById("nm2").value = "";
				document.getElementById("nm3").value = "";
				document.getElementById("nm4").value = "";
				document.getElementById("nm5").value = "";
				msgbox.innerHTML = "";
				//clearing data stored in all variables
				total = 0;
				c1 = 0;
				c2 = 0;
				c3 = 0;
				c4 = 0;
				c5 = 0;
			}
			function order_submitted() {
				bill_calc();
				if (total == 0) {
					alert("Please enter quantity for at least 1 brand.");
				} else {
					alert(
						"This order is submitted and total payable amount is: " + total
					);
				}
			}
			function onlyNumberKey(evt) {
				// Only ASCII character in that range allowed
				var ASCIICode = evt.which ? evt.which : evt.keyCode;
				if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) return false;
				return true;
			}
		</script>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script
			src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"
		></script>
		<script
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"
		></script>
	</body>
</html>
