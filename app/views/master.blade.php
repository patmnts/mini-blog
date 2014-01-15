

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') - Mini Blog - </title>
        {{ Basset::show('master.css') }}
    </head>
    <body class="body">
        <header class="mainHeader">
            <div class="row">
                <div class="headerTitle"><h1>Mini Blog</h1></div>
            </div>
        </header>

        <div class="mainContent">
            <div class="content">
                @yield('contenu') 
            </div>
        </div>
        <aside class="top-sidebar">
            <article>
                <ul class="nav nav-list">
                    <li class="nav-header"><h4>MENU</h4></li>
                        <li class="active"><a href="users"><i class="icon-home"></i> Accueil</a></li>
                        <li><a href="show"><i class="icon-bookmark"></i> Article</a></li>
                        <li><a href="#"><i class="icon-bookmark"></i> Contact</a></li>
                        <li><a href="#"><i class="icon-dashboard"></i> Dashboard</a></li>
                        <li><a href="#"><i class="icon-bookmark"></i> souscrire</a></li>
                </ul>
            </article>
        </aside>

        <aside class="bottom-sidebar">
            <article>
                <h2>nouvelles</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel semper dui, vel suscipit tortor. Sed at ligula orci. Quisque vehicula pellentesque mi, condimentum pellentesque diam dignissim at. </p>
            </article>
        </aside>
        
        <footer class="mainFooter"><p>Copyright &copy; Mini-blog </p></footer>
    </body>
</html>