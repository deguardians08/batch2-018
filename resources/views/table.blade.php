@extends("template")
@section("content")
<br>
	<div class="text-right">
		<a href="{{ url('form') }}" class="btn btn-primary">Tambah Data</a>
	</div>	<br>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Kolom Header </th>
				<th>Kolom Header </th>
				<th>Kolom Header </th>
				<th>Kolom Header </th>
				<th>Kolom Header </th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Data</td>
				<td>Data</td>
				<td>Data</td>
				<td>Data</td>
				<td>Data</td>
			</tr>
		</tbody>
	</table>
@endsection