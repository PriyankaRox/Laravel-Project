<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" >
    
    <title>PDF Demo</title>
    <link rel="stylesheet" >
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
      <tr class="table-danger">
        <td>ID</td>
        <td>Name</td>
        <td>Date of birth</td>
        <td>Gender</td>
        <td>Email</td>
        <td>Mobile</td>
        <td>Address</td>
        <td>City</td>
        <td>Pin</td>
        <td>State</td>
        <td>Country</td>
        <td>Adhar Number</td>
        <td>Religion</td>
        <td>Caste</td>
        <td>Category</td>
        <td>Emergency Contact</td>
      </tr>
      </thead>
      <tbody>
        @foreach ($customer as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->dob }}</td>
            <td>{{ $data->gender }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->mobile }}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->city }}</td>
            <td>{{ $data->pin }}</td>
            <td>{{ $data->state }}</td>
            <td>{{ $data->country }}</td>
            <td>{{ $data->adhar_number }}</td>
            <td>{{ $data->religion }}</td>
            <td>{{ $data->caste }}</td>
            <td>{{ $data->category }}</td>
            <td>{{ $data->emergency_contacts }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>