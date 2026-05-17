<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Rahul | Full Stack Developer545454454545</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Inter',sans-serif;
}

body{
background:#0f172a;
color:white;
line-height:1.6;
}

.container{
width:90%;
max-width:1200px;
margin:auto;
}

header{
background:#020617;
padding:20px 0;
position:sticky;
top:0;
z-index:1000;
}

nav{
display:flex;
justify-content:space-between;
align-items:center;
}

nav h2{
color:#38bdf8;
}

nav ul{
display:flex;
list-style:none;
}

nav ul li{
margin-left:25px;
}

nav a{
text-decoration:none;
color:white;
font-size:14px;
transition:0.3s;
}

nav a:hover{
color:#38bdf8;
}

.hero{
padding:150px 0;
text-align:center;
background:linear-gradient(135deg,#020617,#0f172a,#020617);
}

.hero h1{
font-size:56px;
margin-bottom:10px;
}

.hero span{
color:#38bdf8;
}

.hero p{
color:#cbd5f5;
margin-top:10px;
}

.btn{
display:inline-block;
margin-top:25px;
padding:12px 25px;
background:#38bdf8;
color:black;
border-radius:6px;
text-decoration:none;
font-weight:600;
transition:0.3s;
}

.btn:hover{
transform:translateY(-3px);
}

section{
padding:80px 0;
}

.section-title{
text-align:center;
font-size:32px;
margin-bottom:40px;
color:#38bdf8;
}

.skills{
display:flex;
flex-wrap:wrap;
justify-content:center;
gap:15px;
}

.skill{
background:#1e293b;
padding:10px 18px;
border-radius:6px;
transition:0.3s;
}

.skill:hover{
background:#38bdf8;
color:black;
}

.projects{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
gap:30px;
}

.project-card{
background:#1e293b;
border-radius:10px;
overflow:hidden;
transition:0.4s;
}

.project-card:hover{
transform:translateY(-8px);
box-shadow:0 20px 40px rgba(0,0,0,0.4);
}

.project-card img{
width:100%;
height:200px;
object-fit:cover;
}

.project-content{
padding:20px;
}

.project-content h3{
margin-bottom:10px;
}

.project-content p{
color:#cbd5f5;
font-size:14px;
}

.project-content a{
color:#38bdf8;
text-decoration:none;
font-weight:600;
}

.experience{
background:#1e293b;
padding:20px;
border-radius:8px;
margin-bottom:20px;
}

.contact{
text-align:center;
}

footer{
background:#020617;
padding:20px;
text-align:center;
color:#94a3b8;
}

</style>

</head>

<body>

<header>

<div class="container">

<nav>

<h2>Rahul</h2>

<ul>
<li><a href="#about">About</a></li>
<li><a href="#skills">Skills</a></li>
<li><a href="#projects">Projects</a></li>
<li><a href="#experience">Experience</a></li>
<li><a href="#contact">Contact</a></li>
</ul>

</nav>

</div>

</header>

<section class="hero">

<div class="container">

<h1>Hi, I'm <span>Rahul Singh</span></h1>

<p>Full Stack Developer | Laravel • Node.js • Next.js</p>

<p>6+ years experience building SaaS platforms, dashboards and web applications.</p>

<a href="#contact" class="btn">Hire Me</a>

</div>

</section>

<section id="about">

<div class="container">

<h2 class="section-title">About Me</h2>

<p style="text-align:center; max-width:700px; margin:auto;">
Full Stack Developer with strong experience in PHP, Laravel, CodeIgniter and modern JavaScript technologies like Node.js and Next.js. I specialize in building scalable web applications, SaaS products and business platforms.
</p>

</div>

</section>

<section id="skills">

<div class="container">

<h2 class="section-title">Technical Skills</h2>

<div class="skills">

<div class="skill">PHP</div>
<div class="skill">Laravel</div>
<div class="skill">CodeIgniter</div>
<div class="skill">Node.js</div>
<div class="skill">Express.js</div>
<div class="skill">Next.js</div>
<div class="skill">JavaScript</div>
<div class="skill">jQuery</div>
<div class="skill">MySQL</div>
<div class="skill">Bootstrap</div>

</div>

</div>

</section>

<section id="projects">

<div class="container">

<h2 class="section-title">Featured Projects</h2>

<div class="projects">

<div class="project-card">

<img src="images/frozberries.jpg">

<div class="project-content">

<h3>Frozberries</h3>

<p>Frozen berries ecommerce platform with product catalog and order management.</p>

<a href="https://frozberries.com.au/" target="_blank">Visit Website</a>

</div>
</div>


<div class="project-card">

<img src="images/georgegankas.jpg">

<div class="project-content">

<h3>George Gankas Golf</h3>

<p>Online golf learning platform with video lessons and training modules.</p>

<a href="https://www.georgegankas.golf/" target="_blank">Visit Website</a>

</div>
</div>


<div class="project-card">

<img src="images/servicecue.jpg">

<div class="project-content">

<h3>ServiceCue</h3>

<p>Service management platform for tracking customer requests and workflow automation.</p>

<a href="https://servicecue.com.au/" target="_blank">Visit Website</a>

</div>
</div>


</div>

</div>

</section>

<section id="experience">

<div class="container">

<h2 class="section-title">Experience</h2>

<div class="experience">
<h3>Support Soft Technologies PTY LTD</h3>
<p>Senior Developer (2022 - Present)</p>
</div>

<div class="experience">
<h3>Web Nautical Pvt Ltd</h3>
<p>PHP Developer (2019 - 2022)</p>
</div>

</div>

</section>

<section id="contact">

<div class="container">

<h2 class="section-title">Contact</h2>

<div class="contact">

<p>Email: your-email@gmail.com</p>

<p>LinkedIn: linkedin.com/in/rahul</p>

<a class="btn" href="mailto:your-email@gmail.com">Send Email</a>

</div>

</div>

</section>

<footer>

<p>© 2026 Rahul Singh | Full Stack Developer</p>

</footer>

</body>
</html>
