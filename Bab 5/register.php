<!DOCTYPE html>  
<html>  
<head>  
<style>  
body {  
  background-color: #90EE90; /* Hijau muda */  
  font-family: Arial, sans-serif;  
}  

.container {  
  width: 300px;  
  background-color: #F0FFF0; /* Hijau muda pucat */  
  padding: 20px;  
  border-radius: 10px;  
  margin: 100px auto;  
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);  
}  

h1 {  
  text-align: center;  
  color: #800000; /* Coklat tua */  
}  

input[type=text], input[type=password] {  
  width: 100%;  
  padding: 12px 20px;  
  margin: 8px 0;  
  display: inline-block;  
  border: 1px solid #ccc;  
  box-sizing: border-box;  
}  

button {  
  background-color: #800000; /* Coklat tua */  
  color: white;  
  padding: 14px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
}  

button:hover {  
  opacity: 0.8;  
}  
</style>  
</head>  
<body>  
  <div class="container">  
    <h1>Selamat Datang!</h1>  
    <h1>Register</h1>  
    <form>  
      <label for="email">Email:</label>  
      <input type="text" id="email" name="email" required>  

      <label for="uname">Username:</label>  
      <input type="text" id="uname" name="uname" required>  

      <label for="psw">Password:</label>  
      <input type="password" id="psw" name="psw" required>  

      <button type="submit">Sign up</button>  
    </form>  
  </div>  
</body>  
</html>