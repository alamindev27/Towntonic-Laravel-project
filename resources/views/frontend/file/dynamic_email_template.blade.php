<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

form {
  border: 3px solid #f1f1f1;
  font-family: Arial;
}

.container {
  padding: 20px;
  background-color: #f1f1f1;
}

</style>
<body>

  <div class="container">
    <h2>Hi, Taiwanmoigov</h2>
    <h4>This is {{ $data['fname'] }}, {{ $data['gender'] }}</h4>
    <h5>Subject:  {{ $data['subject'] }}</h5>
    <p>{{ $data['content'] }}</p>
    <p>It would be appriciative, if you gone through this feedback.</p>
  </div>
  

</body>
</html>
