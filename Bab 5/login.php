<!DOCTYPE html>  
<html>  
<head>  
<style>  
body {  
  background-color: #90EE90;  
  font-family: Arial, sans-serif;  
}  

.container {  
  width: 300px;  
  background-color: #F0FFF0;  
  padding: 20px;  
  border-radius: 10px;  
  margin: 100px auto;  
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);  
}  

h1 {  
  text-align: center;  
  color: #800000;  
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
  background-color: #800000;  
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

.forgot {  
  text-align: center;  
  margin-bottom: 10px;  
}  

a {  
  color: #800000;  
  text-decoration: none;  
}  

a:hover {  
  text-decoration: underline;  
}  
</style>  
</head>  
<body>  
  <div class="container">  
    <h1>Selamat Datang!</h1>  
    <h1>Login</h1>  
    <form>  
      <label for="uname">Username:</label>  
      <input type="text" id="uname" name="uname" required>  

      <label for="psw">Password:</label>  
      <input type="password" id="psw" name="psw" required>  

      <button type="submit">Sign in</button>  
      <div class="forgot">  
        <a href="#">Forgot password?</a>  
      </div>  
    </form>  
    <p>Belum punya akun? klik disini! <a href="#">Register</a></p>  
  </div>  
</body>  
</html>