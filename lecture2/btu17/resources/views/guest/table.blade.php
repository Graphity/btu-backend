<!DOCTYPE html>
<html>
<head>
  <title>Received Data From Post Request</title>
  <meta charset="utf-8">
  <style type="text/css">
    table,tr,td,th {
      border: solid 1px black;
      padding: 5px;
      border-colapse: seperate;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>DOB</th>
      <th>Address</th>
      <th>Biography</th>
    </tr>
    <tr>
      @foreach ($newdata as $data)
        <td>{{ $data }}</td>
      @endforeach
    </tr>
  </table
</body>
</html>
