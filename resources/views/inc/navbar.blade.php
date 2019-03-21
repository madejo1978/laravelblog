{{-- 
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{config('app.name','standard-title does not work, check it in .env')}}</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/services">Contact</a></li>
            </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
   --}}  
{{-- 
   <div class="container bg-">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarColor03">
<ul class="navbar-nav mr-auto">
    </li><a class="nav-link" href="/">Home</a>
    <li><a class="nav-link" href="/about">About</a>
    <li><a class="nav-link" href="/services">Services</a>
</ul>
</div>
</nav>
</div> --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">{{config('app.name','standard-title does not work, check it in .env')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/posts">Blog
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/posts/create">Create Blog</a>
        </li>
      </ul>  
    </div>
  </nav>