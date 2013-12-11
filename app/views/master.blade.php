

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') - Mini Blog - </title>
            {{HTML::style('template/css/style.css')}}
            {{HTML::style('bower_components/bootstrap/dist/css/bootstrap.css')}}
            {{HTML::style('bower_components/font-awesome/css/font-awesome.css')}}
            {{HTML::script('bower_components/bootstrap/dist/js/bootstrap.js')}}
    </head>
    <body class="body">
        <header class="mainHeader">
            <div class="row">
                <div class="headerTitle"><h1>Mini Blog</h1></div>
            </div>
        </header>

        <div class="mainContent">
            <div class="content">
                <article class="topContent">
                    <header>
                        <h2>Bienvenue User</h2>
                    </header>
                        <footer>
                            <p class="post-info">ici l'information de l'article</p>
                        </footer>
                    <content>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel semper dui, vel suscipit tortor. Sed at ligula orci. Quisque vehicula pellentesque mi, condimentum pellentesque diam dignissim at. Morbi accumsan bibendum nulla. Maecenas elementum ligula quis fringilla imperdiet. Duis dolor quam, gravida non neque venenatis, laoreet ultrices massa. In laoreet pretium mi sit amet tincidunt. Nulla ac dictum eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam sit amet eros quis mauris ornare elementum nec suscipit est. Sed a leo quam. Proin in ipsum convallis, lobortis justo eget, consequat elit. Etiam vestibulum in leo a congue.</p>
                    </content>
                </article>
            </div>
        </div>
        <aside class="top-sidebar">
            <article>
                <ul class="nav nav-list">
                    <li class="nav-header"><h4>MENU</h4></li>
                        <li class="active"><a href="#"><i class="icon-home"></i> Accueil</a></li>
                        <li><a href="#"><i class="icon-bookmark"></i> Portofiol</a></li>
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