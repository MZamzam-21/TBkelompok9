<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>

        <title>CSS Grid Tutorial</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
        <link media="all" type="text/css" rel="stylesheet" href="index.css">
<style>
    body {
    font-family: 'Source Sans Pro';
    background:red;
    margin:0;
    color:white;
}

a {
    text-decoration:none;
    color:red;
    font-size:1.8em;
    font-weight:700;
}
img { 
    width:150px;
}
header {
    background:#FFFFFF;
    padding: 1em;
}

.container {
    padding: 4em 1em;
}

footer {
    background:#571212;
}

ul {
    margin:0;padding:0;
}
ul li {
    padding: 2em;
    color:#E98A8A;
}
ul li span {
    display:block;
    font-size:1.4em;
    margin-bottom:1em;
    color: white;
}
.container {
    display:grid;
    grid-template-columns: 66% auto;
    padding: 4em 1em;
}
ul {
    display:grid;
    list-style-type:none;
    margin:0;padding:0;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: repeat(2, auto);
}
img { 
    width:150px;
    justify-self:center;
}
</style>
    </head>
    <body>
    <header>
            <a href="#">Libertians > *</a>
        </header>

        <div class="container">
            <div id="content">
                <h1>Down with the state</h1>
                <p>Abandon the left vs. right paradigm and adopt new ideals, where consistency and logic reign supreme.</p>
            </div>
            <img src="logo.png" />
        </div>

        <footer>
            <ul>
                <li>
                <img src="image/cayla.jpg" alt="">
                </li>
                <li>
                <img src="image/cayla.jpg" alt="">
                </li>
                <li>
                <img src="image/cayla.jpg" alt="">
                </li>
                <li> <!-- Ulangi lagi tiga kali sehingga sekarang kita punya 6 list -->
                <li> <!-- Ulangi lagi tiga kali sehingga sekarang kita punya 6 list -->
                <li> <!-- Ulangi lagi tiga kali sehingga sekarang kita punya 6 list -->
            </ul>
        </footer>
    </body>
</html>
 