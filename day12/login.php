
<style>
body {font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
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

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.xxx{
    color: aliceblue;
}
.image{
  background-image: url('image/2.jpg');
  block-size: cover;
}
.sai{
    font-size: 30px;
    color: rgb(255, 255, 255);
  }
  .den{
    padding-bottom: 0px;
    padding-top: 0px;
  }
  .xnxx{
    padding-bottom: 30px;
    padding-top: 0px;
  }
  .colornav{
  color: rgb(255, 255, 255)
  }
  .myst{
        padding-bottom: 20px;
        padding-top: 20px;
    }
    .xxx{
      color: rgb(255, 255, 255);
      margin-top: 10px;

    }
    .den1{
      margin: top 10px;
    }
    .color{
      background-color: rgb(43, 43, 43);
    }
    .color1{
      background-color: rgb(65, 65, 65);
    }
    .xxx1{
      width: 200px;
      height: 320px;
    }
    .xxx2{
      margin-top: 10px;
      width: 180px;
      height: 230px;
    }
    .xxx3{
      margin-top: 8px;
      width: 230px;
      height: 320px;
    }
    .xxx4{
      float:right;
      
    }
    .xxx5{
      float:left;
    }
    .color2{
      color: rgb(255, 255, 255);
      font-size: 20px;
    }
    .color3{
    background-color: rgb(153, 153, 153);
    }
    .color4{
      padding-top:20px;
    background-color: rgb(77, 94, 255);
    }
    ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

ul.pagination li a.active {
    color: white;
    background-color: green;

}

ul.pagination li a:hover:not(.active) {background-color: #ddd;}

div.center {
  margin-top:5px;
  text-align: center;
  }
</style>
</head>
<body style="background-image: url('image/1.jpg');block-size: cover;">
<div class="container" style="margin-top:30px;height:300px;width:300;margin:auto;">
<div class="col-md-6">
<h2 style="text-align: center;">Login</h2>
<div class="image">
<form action="datalogin.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    
    <button type="submit">Login</button>
  </div>
</form>
</div>
</div>
</div>  
</body>
</html>
